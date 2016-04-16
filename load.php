<?php
$numOfSeconds = 10;
header( "refresh:$numOfSeconds;he.php" );

$dom = new DOMDocument;
$dom->load('http://www.cpcbnoise.com/cache/Banglore_Parisar%20Bhawan_04-15-2016_04-16-2016.xml');
echo $dom->save('file.xml');
?>