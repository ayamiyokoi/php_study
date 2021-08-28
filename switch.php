<?php

$signal = 'pink';

switch($signal){
  case 'red':
    echo 'Stop!' . PHP_EOL;
    break;
  case 'yellow':
    echo 'Caution!' . PHP_EOL;
    break;
  case 'green':
  case 'blue':
    echo 'Go!' . PHP_EOL;
    break;
  default:
    echo 'wrong signal' . PHP_EOL;
    break;
}