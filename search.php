<?php header("Content-Type: text/html; charset=UTF-8"); ?>
<?php /*Copyright 2013 ShilGen.ru geniusshil@gmail.com */ 
#error_reporting(E_ALL);
#ini_set('display_errors', true);
#ini_set('html_errors', false); ?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Search</title>
  <!--<link type="text/css" rel="stylesheet" media="all" href="" > -->
 </head>
<body>
<?php 
$word = $_GET['word']; 
$handle = @fopen($_GET["file"], "r");
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) { 
		$pos = strpos($buffer, $word);

		// Заметьте, что используется ===.  Использование == не даст верного 
		// результата, так как 'a' находится в нулевой позиции.
		if ($pos === false) { 
			#echo "Строка '$word' не найдена в строке '$buffer'"; 
			} 
		else {
			echo "$buffer";
			//echo " в позиции $pos";
			echo "<br>";
			}
		// echo $buffer;
		}
    if (!feof($handle)) { echo "Error: unexpected fgets() fail\n";}
    fclose($handle); }
?>
</body>
</html>
