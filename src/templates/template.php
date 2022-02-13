<?php

$validInputs = [
  'NUMBER' => [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16],
  'UNIT_OF_MEASURE' => ['mile', 'kilometer'],
  'PLACE' => ['work', 'home', 'the grocery store'],
  'ADJECTIVE'=> ['blue', 'green', 'yellow', 'red'],
  'NOUN' => ['rock', 'jewel', 'necklace', 'bracelet']
];

$templateStats = [
  'NUMBER' => [],
  'UNIT_OF_MEASURE' => [],
  'PLACE' => [],
  'ADJECTIVE'=> [],
  'NOUN' => []
];

$template = "One day Anna was walking her {{NUMBER}} {{UNIT_OF_MEASURE}} commute to {{PLACE}} and found a {{ADJECTIVE}} {{NOUN}} on the ground.";
