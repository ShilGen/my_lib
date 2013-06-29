<?php header("Content-Type: text/html; charset=UTF-8"); ?>
<?php /*Copyright 2013 ShilGen.ru geniusshil@gmail.com */ 
#error_reporting(E_ALL);
#ini_set('display_errors', true);
#ini_set('html_errors', false); ?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>New project</title>
  <!--<link type="text/css" rel="stylesheet" media="all" href="" > -->
 </head>
<body>
<?php
// Каждый элемент массива $lines содержит отдельную строку файла
$lines = file( 'index.html' );

$lines[98] = ICONV("Windows-1251", "UTF-8", $lines[98]);

echo $lines[98];
 $file = fopen ("tt.txt","r+");
  
  if ( !$file )
  {
    echo("Ошибка открытия файла");
  }
  else
  {
    fputs ( $file, $lines[98]);
  }
  fclose ($file);
?>	
</body>
</html>
