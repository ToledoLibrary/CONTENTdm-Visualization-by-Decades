   
       
       
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
       
       
       
        <?php

// THIS IS CDM DIGITAL COLLECTIONS


function debugToConsole($msg) { 
        echo "<script>console.log(".json_encode($msg).")</script>";
}

$xmlData = file_get_contents('http://open.toledolibrary.org/digitization/timeline/xml_data.xml');

// Create the document object

$xml = simplexml_load_string($xmlData);

//print_r($xml);
/*
$pager = array();

// How many hits did the search yield

foreach ($xml->xpath('//pager') as $hits) {
        $pager[] = array(
                'start' => (string) $hits->start,
                'total' => (string) $hits->total
        );
}
*/

$result = array();
$i=1;
$itemkey = '//item';

// Get the nodes and loop them

foreach ($xml->xpath($itemkey) as $record) {
        $result[] = array(
                'time' => (string) $record->time
        );

}
           
           $d1750 = 0;
           $d1760 = 0;
           $d1770 = 0;
           $d1780 = 0;
           $d1790 = 0;
           $d1800 = 0;
           $d1810 = 0;
           $d1820 = 0;
           $d1830 = 0;
           $d1840 = 0;
           $d1850 = 0;
           $d1860 = 0;
           $d1870 = 0;
           $d1880 = 0;
           $d1890 = 0;
           $d1900 = 0;    
           $d1910 = 0;  
           $d1920 = 0;  
           $d1930 = 0;  
           $d1940 = 0;  
           $d1950 = 0;  
           $d1960 = 0;  
           $d1970 = 0;  
           $d1980 = 0;  
           $d1990 = 0;  
           $d2000 = 0;  
           $d2010 = 0;  
           
$resultCount = count($result) - 1;           
           
for ($i=0;$i<=$resultCount;$i++) {
        $time = $result[$i]["time"];
        
        
	$decades = explode(";", $time);
	foreach($decades as $decade) {
     	$decade = trim($decade);
    	$time = $decade;
    	
    	
    	$debugtime = $i.": ".$time;
	    debugToConsole($debugtime);

    
        
        if ($time == "1750s") {
        	$d1750++;
        	//echo $d1870;
        }
        else if ($time == "1760s") {
        	$d1760++;
        	//echo $d1870;
        }
        else if ($time == "1770s") {
        	$d1770++;
        	//echo $d1870;
        }
        else if ($time == "1780s") {
        	$d1780++;
        	//echo $d1870;
        }
        else if ($time == "1790s") {
        	$d1790++;
        	//echo $d1870;
        }
        else if ($time == "1800s") {
        	$d1800++;
        	//echo $d1870;
        }
        else if ($time == "1810s") {
        	$d1810++;
        	//echo $d1870;
        }
        else if ($time == "1820s") {
        	$d1820++;
        	//echo $d1870;
        }
        else if ($time == "1830s") {
        	$d1830++;
        	//echo $d1870;
        }
        else if ($time == "1840s") {
        	$d1840++;
        	//echo $d1870;
        }
        else if ($time == "1850s") {
        	$d1850++;
        	//echo $d1870;
        }
        else if ($time == "1860s") {
        	$d1860++;
        	//echo $d1870;
        }
        else if ($time == "1870s") {
        	$d1870++;
        	//echo $d1870;
        }
        else if ($time == "1880s") {
        	$d1880++;
        	//echo $d1880;
        }
        else if ($time == "1890s") {
        	$d1890++;
        	//echo $d1890;
        }
        else if ($time == "1900s") {
        	$d1900++;
        	//echo $d1900;
        }
        else if ($time == "1910s") {
        	$d1910++;
        	//echo $d1910;
        }
        else if ($time == "1920s") {
        	$d1920++;
        	//echo $d1920;
        }
        else if ($time == "1930s") {
        	$d1930++;
        	//echo $d1930;
        }
        else if ($time == "1940s") {
        	$d1940++;
        	//echo $d1940;
        }
        else if ($time == "1950s") {
        	$d1950++;
        	//echo $d1950;
        }
        else if ($time == "1960s") {
        	$d1960++;
        	//echo $d1960;
        }
        else if ($time == "1970s") {
        	$d1970++;
        	//echo $d1970;
        }
        else if ($time == "1980s") {
        	$d1980++;
        	//echo $d1980;
        }
        else if ($time == "1990s") {
        	$d1990++;
        	//echo $d1990;
        }
		else if ($time == "2000s") {
        	$d2000++;
        	//echo $d2000;
        }    
        else if ($time == "2010s") {
        	$d2010++;
        	//echo $d2000;
        }  
        
        
        
        
        
        }
        
        
        
}

	$d1750url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1750s/field/time/mode/exact/conn/and";
	
	$d1760url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1760s/field/time/mode/exact/conn/and";
	
	$d1770url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1770s/field/time/mode/exact/conn/and";
	
	$d1780url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1780s/field/time/mode/exact/conn/and";
	
	$d1790url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1790s/field/time/mode/exact/conn/and";
	
	$d1800url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1800s/field/time/mode/exact/conn/and";
	
	$d1810url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1810s/field/time/mode/exact/conn/and";
	
	$d1820url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1820s/field/time/mode/exact/conn/and";
	
	$d1830url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1830s/field/time/mode/exact/conn/and";
	
	$d1840url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1840s/field/time/mode/exact/conn/and";  
                                
	$d1850url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1850s/field/time/mode/exact/conn/and";

    $d1860url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1860s/field/time/mode/exact/conn/and";

    $d1870url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1870s/field/time/mode/exact/conn/and";
        
        $d1880url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1880s/field/time/mode/exact/conn/and"; 
        
        $d1890url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1890s/field/time/mode/exact/conn/and"; 
        
        $d1900url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1900s/field/time/mode/exact/conn/and"; 
        
        $d1910url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1910s/field/time/mode/exact/conn/and"; 
        
        $d1920url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1920s/field/time/mode/exact/conn/and"; 
        
        $d1930url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1930s/field/time/mode/exact/conn/and"; 
        
        $d1940url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1940s/field/time/mode/exact/conn/and"; 
        
        $d1950url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1950s/field/time/mode/exact/conn/and"; 
        
        $d1960url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1960s/field/time/mode/exact/conn/and"; 
        
        $d1970url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1970s/field/time/mode/exact/conn/and"; 
        
        $d1980url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1980s/field/time/mode/exact/conn/and"; 
        
        $d1990url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/1990s/field/time/mode/exact/conn/and"; 
        
        $d2000url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/2000s/field/time/mode/exact/conn/and"; 
        
        $d2010url = "https://www.ohiomemory.org/digital/collection/p16007coll33/search/searchterm/2010s/field/time/mode/exact/conn/and"; 
        

?>
       
  

    <?php

// CPA



$xmlDatacpa = file_get_contents('http://open.toledolibrary.org/digitization/timeline/xml_data_cpa.xml');

// Create the document object

$xmlcpa = simplexml_load_string($xmlDatacpa);

//print_r($xmlcpa);
/*
$pager = array();

// How many hits did the search yield

foreach ($xml->xpath('//pager') as $hits) {
        $pager[] = array(
                'start' => (string) $hits->start,
                'total' => (string) $hits->total
        );
}
*/

$resultcpa = array();
$icpa=1;
$itemkeycpa = '//item';

// Get the nodes and loop them

foreach ($xmlcpa->xpath($itemkeycpa) as $recordcpa) {
        $resultcpa[] = array(
                'time' => (string) $recordcpa->time
        );

}
           
           $cpa1750 = 0;
           $cpa1760 = 0;
           $cpa1770 = 0;
           $cpa1780 = 0;
           $cpa1790 = 0;
           $cpa1800 = 0;
           $cpa1810 = 0;
           $cpa1820 = 0;
           $cpa1830 = 0;
           $cpa1840 = 0;
           $cpa1850 = 0;
           $cpa1860 = 0;
           $cpa1870 = 0;
           $cpa1880 = 0;
           $cpa1890 = 0;
           $cpa1900 = 0;    
           $cpa1910 = 0;  
           $cpa1920 = 0;  
           $cpa1930 = 0;  
           $cpa1940 = 0;  
           $cpa1950 = 0;  
           $cpa1960 = 0;  
           $cpa1970 = 0;  
           $cpa1980 = 0;  
           $cpa1990 = 0;  
           $cpa2000 = 0;  
           $cpa2010 = 0;  
           
$resultCountcpa = count($resultcpa) - 1;           
           
for ($icpa=0;$icpa<=$resultCountcpa;$icpa++) {
        $time = $resultcpa[$icpa]["time"];
        //echo $time;
        
        if ($time == "1750s") {
        	$cpa1750++;
        	//echo $cpa1870;
        }
        else if ($time == "1760s") {
        	$cpa1760++;
        	//echo $cpa1870;
        }
        else if ($time == "1770s") {
        	$cpa1770++;
        	//echo $cpa1870;
        }
        else if ($time == "1780s") {
        	$cpa1780++;
        	//echo $cpa1870;
        }
        else if ($time == "1790s") {
        	$cpa1790++;
        	//echo $cpa1870;
        }
        else if ($time == "1800s") {
        	$cpa1800++;
        	//echo $cpa1870;
        }
        else if ($time == "1810s") {
        	$cpa1810++;
        	//echo $cpa1870;
        }
        else if ($time == "1820s") {
        	$cpa1820++;
        	//echo $cpa1870;
        }
        else if ($time == "1830s") {
        	$cpa1830++;
        	//echo $cpa1870;
        }
        else if ($time == "1840s") {
        	$cpa1840++;
        	//echo $cpa1870;
        }
        else if ($time == "1850s") {
        	$cpa1850++;
        	//echo $cpa1870;
        }
        else if ($time == "1860s") {
        	$cpa1860++;
        	//echo $cpa1870;
        }
        else if ($time == "1870s") {
        	$cpa1870++;
        	//echo $cpa1870;
        }
        else if ($time == "1880s") {
        	$cpa1880++;
        	//echo $cpa1880;
        }
        else if ($time == "1890s") {
        	$cpa1890++;
        	//echo $cpa1890;
        }
        else if ($time == "1900s") {
        	$cpa1900++;
        	//echo $cpa1900;
        }
        else if ($time == "1910s") {
        	$cpa1910++;
        	//echo $cpa1910;
        }
        else if ($time == "1920s") {
        	$cpa1920++;
        	//echo $cpa1920;
        }
        else if ($time == "1930s") {
        	$cpa1930++;
        	//echo $cpa1930;
        }
        else if ($time == "1940s") {
        	$cpa1940++;
        	//echo $cpa1940;
        }
        else if ($time == "1950s") {
        	$cpa1950++;
        	//echo $cpa1950;
        }
        else if ($time == "1960s") {
        	$cpa1960++;
        	//echo $cpa1960;
        }
        else if ($time == "1970s") {
        	$cpa1970++;
        	//echo $cpa1970;
        }
        else if ($time == "1980s") {
        	$cpa1980++;
        	//echo $cpa1980;
        }
        else if ($time == "1990s") {
        	$cpa1990++;
        	//echo $cpa1990;
        }
		else if ($time == "2000s") {
        	$cpa2000++;
        	//echo $cpa2000;
        }    
        else if ($time == "2010s") {
        	$cpa2010++;
        	//echo $cpa2000;
        }  
}

	$cpa1750url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1750s/field/time/mode/exact/conn/and";
	
	$cpa1760url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1760s/field/time/mode/exact/conn/and";
	
	$cpa1770url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1770s/field/time/mode/exact/conn/and";
	
	$cpa1780url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1780s/field/time/mode/exact/conn/and";
	
	$cpa1790url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1790s/field/time/mode/exact/conn/and";
	
	$cpa1800url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1800s/field/time/mode/exact/conn/and";
	
	$cpa1810url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1810s/field/time/mode/exact/conn/and";
	
	$cpa1820url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1820s/field/time/mode/exact/conn/and";
	
	$cpa1830url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1830s/field/time/mode/exact/conn/and";
	
	$cpa1840url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1840s/field/time/mode/exact/conn/and";  
                                
	$cpa1850url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1850s/field/time/mode/exact/conn/and";

    $cpa1860url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1860s/field/time/mode/exact/conn/and";

    $cpa1870url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1870s/field/time/mode/exact/conn/and";
        
        $cpa1880url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1880s/field/time/mode/exact/conn/and"; 
        
        $cpa1890url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1890s/field/time/mode/exact/conn/and"; 
        
        $cpa1900url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1900s/field/time/mode/exact/conn/and"; 
        
        $cpa1910url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1910s/field/time/mode/exact/conn/and"; 
        
        $cpa1920url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1920s/field/time/mode/exact/conn/and"; 
        
        $cpa1930url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1930s/field/time/mode/exact/conn/and"; 
        
        $cpa1940url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1940s/field/time/mode/exact/conn/and"; 
        
        $cpa1950url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1950s/field/time/mode/exact/conn/and"; 
        
        $cpa1960url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1960s/field/time/mode/exact/conn/and"; 
        
        $cpa1970url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1970s/field/time/mode/exact/conn/and"; 
        
        $cpa1980url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1980s/field/time/mode/exact/conn/and"; 
        
        $cpa1990url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/1990s/field/time/mode/exact/conn/and"; 
        
        $cpa2000url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/2000s/field/time/mode/exact/conn/and"; 
        
        $cpa2010url = "https://www.ohiomemory.org/digital/collection/p16007coll31/search/searchterm/2010s/field/time/mode/exact/conn/and"; 
        
        
        
        
        
        
        
        $listofdecades = "
<ul>
<li>Decade: 1850s  
<ul><li><a href=$d1850url>Digital Collections: $d1850</a></li>  <li><a href=$cpa1850url>Community Photo Album: $cpa1850</a></li></ul>
</li>
<li>Decade: 1860s  
		  <ul><li><a href=$d1860url>Digital Collections: $d1860</a></li>  <li><a href=$cpa1860url>Community Photo Album: $cpa1860</a></li></ul>
</li>
<li>		  Decade: 1870s  
          <ul><li><a href=$d1870url>Digital Collections: $d1870</a></li>  <li><a href=$cpa1870url>Community Photo Album: $cpa1870</a></li></ul>
  </li>
<li>        Decade: 1880s  
          <ul><li><a href=$d1880url>Digital Collections: $d1880</a></li>  <li><a href=$cpa1880url>Community Photo Album: $cpa1880</a></li></ul>
    </li>
<li>      Decade: 1890s  
          <ul><li><a href=$d1890url>Digital Collections: $d1890</a></li>  <li><a href=$cpa1890url>Community Photo Album: $cpa1890</a></li></ul>
    </li>
<li>      Decade: 1900s  
          <ul><li><a href=$d1900url>Digital Collections: $d1900</a></li>  <li><a href=$cpa1900url>Community Photo Album: $cpa1900</a></li></ul>
    </li>
<li>      Decade: 1910s  
          <ul><li><a href=$d1910url>Digital Collections: $d1910</a></li>  <li><a href=$cpa1910url>Community Photo Album: $cpa1910</a></li></ul>
    </li>
<li>      Decade: 1920s  
          <ul><li><a href=$d1920url>Digital Collections: $d1920</a></li>  <li><a href=$cpa1920url>Community Photo Album: $cpa1920</a></li></ul>
    </li>
<li>      Decade: 1930s  
          <ul><li><a href=$d1930url>Digital Collections: $d1930</a></li>  <li><a href=$cpa1930url>Community Photo Album: $cpa1930</a></li></ul>
    </li>
<li>      Decade: 1940s  
          <ul><li><a href=$d1940url>Digital Collections: $d1940</a></li>  <li><a href=$cpa1940url>Community Photo Album: $cpa1940</a></li></ul>
    </li>
<li>      Decade: 1950s  
          <ul><li><a href=$d1950url>Digital Collections: $d1950</a></li>  <li><a href=$cpa1950url>Community Photo Album: $cpa1950</a></li></ul>
    </li>
<li>      Decade: 1960s  
          <ul><li><a href=$d1960url>Digital Collections: $d1960</a></li>  <li><a href=$cpa1960url>Community Photo Album: $cpa1960</a></li></ul>
    </li>
<li>      Decade: 1970s  
          <ul><li><a href=$d1970url>Digital Collections: $d1970</a></li>  <li><a href=$cpa1970url>Community Photo Album: $cpa1970</a></li></ul>
    </li>
<li>      Decade: 1980s  
          <ul><li><a href=$d1980url>Digital Collections: $d1980</a></li>  <li><a href=$cpa1980url>Community Photo Album: $cpa1980</a></li></ul>
    </li>
<li>      Decade: 1990s  
          <ul><li><a href=$d1990url>Digital Collections: $d1990</a></li>  <li><a href=$cpa1990url>Community Photo Album: $cpa1990</a></li></ul>
    </li>
<li>      Decade: 2000s  
          <ul><li><a href=$d2000url>Digital Collections: $d2000</a></li>  <li><a href=$cpa2000url>Community Photo Album: $cpa2000</a></li></ul>
    </li>
<li>      
          Decade: 2010s  
          <ul><li><a href=$d2010url>Digital Collections: $d2010</a></li>  <li><a href=$cpa2010url>Community Photo Album: $cpa2010</a></li></ul>
</li>
</ul>
        ";
        
        

?>
       
       <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.setOnLoadCallback(drawChart2);
      function drawChart2() {
      
      
      
        var data2 = google.visualization.arrayToDataTable([
          ['Decade', 'link', 'Digital Collections', 'link2', 'Community Photo Album'],
          /* 
         ['1750',  '<?php echo $d1750url ?>', <?php echo $d1750 ?>, '<?php echo $cpa1750url ?>', <?php echo $cpa1750 ?>],
          ['1760',  '<?php echo $d1760url ?>', <?php echo $d1760 ?>, '<?php echo $cpa1760url ?>', <?php echo $cpa1760 ?>],
          ['1770',  '<?php echo $d1770url ?>', <?php echo $d1770 ?>, '<?php echo $cpa1770url ?>', <?php echo $cpa1770 ?>],
          ['1780',  '<?php echo $d1780url ?>', <?php echo $d1780 ?>, '<?php echo $cpa1780url ?>', <?php echo $cpa1780 ?>],
          ['1790',  '<?php echo $d1790url ?>', <?php echo $d1790 ?>, '<?php echo $cpa1790url ?>', <?php echo $cpa1790 ?>],
          ['1800',  '<?php echo $d1800url ?>', <?php echo $d1800 ?>, '<?php echo $cpa1800url ?>', <?php echo $cpa1800 ?>],
          ['1810',  '<?php echo $d1810url ?>', <?php echo $d1810 ?>, '<?php echo $cpa1810url ?>', <?php echo $cpa1810 ?>],
          ['1820',  '<?php echo $d1820url ?>', <?php echo $d1820 ?>, '<?php echo $cpa1820url ?>', <?php echo $cpa1820 ?>],
          ['1830',  '<?php echo $d1830url ?>', <?php echo $d1830 ?>, '<?php echo $cpa1830url ?>', <?php echo $cpa1830 ?>],
		  ['1840',  '<?php echo $d1840url ?>', <?php echo $d1840 ?>, '<?php echo $cpa1840url ?>', <?php echo $cpa1840 ?>],
		  */
		  ['1850s',  '<?php echo $d1850url ?>', <?php echo $d1850 ?>, '<?php echo $cpa1850url ?>', <?php echo $cpa1850 ?>],
		  ['1860s',  '<?php echo $d1860url ?>', <?php echo $d1860 ?>, '<?php echo $cpa1860url ?>', <?php echo $cpa1860 ?>],
          ['1870s',  '<?php echo $d1870url ?>', <?php echo $d1870 ?>, '<?php echo $cpa1870url ?>', <?php echo $cpa1870 ?>],
          ['1880s',  '<?php echo $d1880url ?>', <?php echo $d1880 ?>, '<?php echo $cpa1880url ?>', <?php echo $cpa1880 ?>],
          ['1890s',  '<?php echo $d1890url ?>', <?php echo $d1890 ?>, '<?php echo $cpa1890url ?>', <?php echo $cpa1890 ?>],
          ['1900s',  '<?php echo $d1900url ?>', <?php echo $d1900 ?>, '<?php echo $cpa1900url ?>', <?php echo $cpa1900 ?>],
          ['1910s',  '<?php echo $d1910url ?>', <?php echo $d1910 ?>, '<?php echo $cpa1910url ?>', <?php echo $cpa1910 ?>],
          ['1920s',  '<?php echo $d1920url ?>', <?php echo $d1920 ?>, '<?php echo $cpa1920url ?>', <?php echo $cpa1920 ?>],
          ['1930s',  '<?php echo $d1930url ?>', <?php echo $d1930 ?>, '<?php echo $cpa1930url ?>', <?php echo $cpa1930 ?>],
          ['1940s',  '<?php echo $d1940url ?>', <?php echo $d1940 ?>, '<?php echo $cpa1940url ?>', <?php echo $cpa1940 ?>],
          ['1950s',  '<?php echo $d1950url ?>', <?php echo $d1950 ?>, '<?php echo $cpa1950url ?>', <?php echo $cpa1950 ?>],
          ['1960s',  '<?php echo $d1960url ?>', <?php echo $d1960 ?>, '<?php echo $cpa1960url ?>', <?php echo $cpa1960 ?>],
          ['1970s',  '<?php echo $d1970url ?>', <?php echo $d1970 ?>, '<?php echo $cpa1970url ?>', <?php echo $cpa1970 ?>],
          ['1980s',  '<?php echo $d1980url ?>', <?php echo $d1980 ?>, '<?php echo $cpa1980url ?>', <?php echo $cpa1980 ?>],
          ['1990s',  '<?php echo $d1990url ?>', <?php echo $d1990 ?>, '<?php echo $cpa1990url ?>', <?php echo $cpa1990 ?>],
          ['2000s',  '<?php echo $d2000url ?>', <?php echo $d2000 ?>, '<?php echo $cpa2000url ?>', <?php echo $cpa2000 ?>],
          ['2010s',  '<?php echo $d2010url ?>', <?php echo $d2010 ?>, '<?php echo $cpa2010url ?>', <?php echo $cpa2010 ?>]
        ]);
        
        

        var view2 = new google.visualization.DataView(data2);
        view2.setColumns([0, 2, 4, { calc: "stringify",
                         sourceColumn: 2,
                         type: "string",
                         role: "annotation" },
                         { calc: "stringify",
                         sourceColumn: 4,
                         type: "string",
                         role: "annotation" }
                         ]
                         );

        var options2 = {
          /*title: 'Digital Collections and Community Photo Album by Decade',*/
          hAxis: {title: 'Decade'},
          vAxis: {title: 'Number of Items'},
          legend: {position: 'top', textStyle: {fontSize: 16}, alignment: 'center'}
        };


		/*
        var chart2 = new google.visualization.ColumnChart( 
          document.getElementById('chart_divcpa'));
        chart2.draw(view2, options2);
        */
        
        
        
        var chart2 = new google.charts.Bar(document.getElementById('chart_div'));

        
        // The select handler. Call the chart's getSelection() method
  function selectHandler() {
    var selectedItem = chart2.getSelection()[0];
    if (selectedItem) {
    var value = data2.getValue(selectedItem.row, selectedItem.column);
       if(isNaN(value)) {
		window.location = data2.getValue(selectedItem.row, selectedItem.column);
	 } 
	   else {
		window.location = data2.getValue(selectedItem.row, selectedItem.column+1);
	 }
      
      
      
      //alert('The user selected ' + value);
      //window.location = value;
      
    }
  }

  // Listen for the 'select' event, and call my function selectHandler() when
  // the user selects something on the chart.
  google.visualization.events.addListener(chart2, 'select', selectHandler);
        
        
        
        chart2.draw(view2, google.charts.Bar.convertOptions(options2));
   /*     

        var selectHandler2 = function(e) {

        //alert('Value: ' + data2.getValue(chart2.getSelection()[0]['row'], 1) );
		         window.location = data2.getValue(1, 3);
//        		 window.location = data2.getValue(chart2.getSelection()[0]['row'], 3 );
        }
}
        // Add our selection handler.
        google.visualization.events.addListener(chart2, 'select', selectHandler2());
        /*
        
    
    
    /*
    
        // Add our selection handler.
google.visualization.events.addListener(chart2, 'select', selectHandler);

// The selection handler.
// Loop through all items in the selection and concatenate
// a single message from all of them.
function selectHandler() {
  var selection = chart2.getSelection();
  var message = '';
  for (var i = 0; i < selection.length; i++) {
    var item = selection[i];
    if (item.row != null && item.column != null) {
      var str = chart2.getFormattedValue(item.row, item.column);
      message += '{row:' + item.row + ',column:' + item.column + '} = ' + str + '\n';
    } else if (item.row != null) {
      var str = chart2.getFormattedValue(item.row, 0);
      message += '{row:' + item.row + ', column:none}; value (col 0) = ' + str + '\n';
    } else if (item.column != null) {
      var str = chart2.getFormattedValue(0, item.column);
      message += '{row:none, column:' + item.column + '}; value (row 0) = ' + str + '\n';
    }
  }
  if (message == '') {
    message = 'nothing';
  }
  alert('You selected ' + message);
}

*/
        
      }
      
      
      
    </script>
    
    
    
    <div class="hidden-sm-down">
	    <div id="chart_div" style="width: 90%; height: 600px;margin: 3% 8% 0 8%;"></div>
    </div>
    
    
    <div class="hidden-md-up" style="margin: 3% 8% 0 8%;">
	    <?php echo $listofdecades ?>
    </div>
    

    
          