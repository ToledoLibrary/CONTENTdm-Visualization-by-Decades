<?php
ini_set("allow_url_fopen", 1);

$servername = "";
$username = "";
$password = "";
$dbname = "";

// Create connection
$mysqli = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'https://server16007.contentdm.oclc.org/dmwebservices/index.php?q=dmQuery/p16007coll33/collea%5eLloyd%20Brothers%20Walker%20Monument%20Company%20Records%5eall%5eand/title!creato/date/3000/1/1/0/0/0/json');
$result = curl_exec($ch);
curl_close($ch);

$obj = json_decode($result, true);
/*
echo "-----ARRAY------";
echo "<br/><br/>";
echo $result;
echo "<br/><br/>";
echo "-----";
echo "<br/><br/>";
echo print_r($obj);
echo "<br/><br/>";
echo "-----";
echo "<br/><br/>";
*/
//$result = array();



foreach ($obj['records'] as $data1) {
    
    $title = $data1['title']; $title = $mysqli->real_escape_string($title);
    //echo $title;
    $pointer = $data1['pointer']; $pointer = $mysqli->real_escape_string($pointer);
    //echo $pointer;
    
    
    
    	echo "Title: $title ";
    	//echo "<a href=http://www.ohiomemory.org/cdm/compoundobject/collection/p16007coll33/id/$pointer/rec/1>Link</a>";
    	echo "<br/>";
		$creato = $data1['creato']; //$creato = $mysqli->real_escape_string($creato);
		//echo $creato;
    	echo "Creator: $creato ";
    	echo "<br/>";
    	
    
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLOPT_URL, "https://server16007.contentdm.oclc.org/dmwebservices/index.php?q=dmGetItemInfo/p16007coll33/$pointer/json");
$result2 = curl_exec($ch2);
curl_close($ch2);    

$obj2 = json_decode($result2, true);
//echo "$result2 <br/><br/>";
//echo $obj2;
//$result2 = array();

$collec = $obj2['collec']; $collec = $mysqli->real_escape_string($collec);
echo $collec;
$decade = $obj2['time']; $decade = $mysqli->real_escape_string($decade);
echo $decade;

echo "<br/><br/>";
echo "Collection: $collec";
echo "<br/>";
echo "Decade: $decade";
echo "<br/><br/>";



$sql = "INSERT INTO cdm (id, title, pointer, creato, collec, time) VALUES ('', '$title', '$pointer','$creato','$collec','$decade')";


if (mysqli_multi_query($mysqli, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}

mysqli_close($conn);



}

?>



<!DOCTYPE HTML>
<html>
<head>

</head>
<body>



</body>
</html>





