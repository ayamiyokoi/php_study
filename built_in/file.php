<?php
// PHPでファイルを開いて文字列を書き込む方法を見ていきます。

// fopen()
// fwrite()
// fclose()

$fp = fopen('names.txt', 'w');

fwrite($fp, "taro\n");

fclose($fp);


//追加
$fp = fopen('names.txt', 'a');

fwrite($fp, "jiro\n");
fwrite($fp, "saburo\n");

fclose($fp);


//read追加

// $fp = fopen('names.txt', 'r');
// $contents = fread($fp, filesize('names.txt'));
// fclose($fp);
// echo $contents;

$fp = fopen('names.txt', 'r');
while (($line = fgets($fp)) !== false) {
  echo $line;
}
fclose($fp);