<?php

$signal = 'green';

switch($signal){
  case 'red':
    echo 'Stop!' . PHP_EOL;
    break;
  case 'yellow':
    echo 'Caution!' . PHP_EOL;
    break;
  case 'green':
    echo 'Go!' . PHP_EOL;
    break;
  
}