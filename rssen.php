<?php
require 'vendor/autoload.php';

$count = file_get_contents('inc.txt', true);
$fp = fopen($count.'rsstxt.txt' ,'wa');
$rss = simplexml_load_file('http://feeds.bbci.co.uk/news/rss.xml');
//echo '<h1>'. $rss->channel->title . '</h1>';

foreach ($rss->channel->item as $item) {
   echo '<h2><a href="'. $item->link .'">' . $item->title . "</a></h2>";
   echo "<p>" . $item->pubDate . "</p>";
   echo "<p>" . $item->description . "</p>";
    echo "<p>" . $item-> category. "</p>";
// Open the file to get existing content
// Append a new person to the file
// Write the contents back to the file

$count=$count+1;
fwrite($fp, utf8_encode($item->title));
fwrite($fp, "\n");
 fwrite($fp, utf8_encode(strip_tags($item->description)));
 fwrite($fp,utf8_encode( strip_tags($item->category)));
 
}


 
 
 
 
 
 
 $fpc = fopen('inc.txt', 'w');
fwrite($fpc,$count );
fclose($fpc);


 fclose($fp);
 
  

  
  ?>





   
   
   
   


