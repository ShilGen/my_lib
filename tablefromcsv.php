<?php header("Content-Type: text/html; charset=UTF-8"); ?>
<?php /*Copyright 2013 ShilGen.ru geniusshil@gmail.com */ 
#29.06.2013
#error_reporting(E_ALL);
#ini_set('display_errors', true);
#ini_set('html_errors', false); ?>
<?php $data = File($_GET["filecsv"]); ?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title><?php echo $_GET['name']; ?></title>
  <!--<link type="text/css" rel="stylesheet" media="all" href="" > -->
 </head>
<body>
<?php
echo "<b><i><h2><center>".$_GET['name']."</b></i></h2></center>";
echo "<center><table border=0><tr>";
$dat_arr = explode(";", $data[0]);
for ($p=0;$p<count($dat_arr);$p++) {echo "<td bgcolor=lightblue><center><b><i>$dat_arr[$p]</td>";}
echo "</tr>";
for ($i=1;$i<count($data);$i++) {
	$data_array = explode(";", $data[$i]);
	echo "<tr>";
    for ($f=0;$f<count($data_array);$f++) { echo "<td>$data_array[$f]</td>";}
	echo "</tr>";}
echo "</table></center>";
?>
</body>
</html>
