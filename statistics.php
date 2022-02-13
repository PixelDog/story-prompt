<?php

// load the story file
$storyFile = "stories.txt";
if(!file_exists($storyFile)){
  die("Story file could not be found\n");

}
$stats = fopen("stories.txt", "r");

include("./src/templates/template.php");

// read file line by line to asseble statistics
while(!feof($stats)) {

  $storyStat = json_decode(fgets($stats), true);

  if(empty($storyStat)){
    break;
  }
  foreach($storyStat as $key=>$value){
    $templateStats[$key][]= $value;
  }
}

// get the most popular replacements
foreach($templateStats as $key=>$value){
  $values = array_count_values($value);
  arsort($values);
  $popular = array_slice(array_keys($values), 0, 1, true);

  echo "The most popular $key is: " . $popular[0] . "\n";
}

// get min and max for NUMBER
$min = min($templateStats['NUMBER']);
$max = max($templateStats['NUMBER']);

echo("The minimum value for NUMBER is $min\n");
echo("The maximum value for NUMBER is $max\n");
