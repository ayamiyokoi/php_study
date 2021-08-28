<?php

function showAd($message = 'Ad')//借引数
{
  echo '----------' . PHP_EOL;
  echo '--- '. $message .' ---' . PHP_EOL;
  echo '----------' . PHP_EOL;
}

showAd('Header_Ad');//実引数
echo 'Tom is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;
showAd('Ad');
showAd();
echo 'Steve is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;
showAd('Footer_Ad');