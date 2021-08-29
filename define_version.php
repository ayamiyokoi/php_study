<?php

declare(strict_types=1);

function showInfo(string $name, int $score): void
{
  echo $name . ': ' . $score . PHP_EOL;
}

// showInfo('taguchi', 40);
// showInfo('taguchi', 'dotinstall');
showInfo('taguchi', '4');