<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  </head>
</html>

<?php

//1.

$read = fopen("string.txt", "r") or die("Unable to open file!");
echo fread($read,filesize("string.txt"));
fclose($read);
echo "</br>";



//1.

function mailFiler($read)
{
	$read = fopen("string.txt", "r") or die("Unable to open file!");
	echo fread($read,filesize("string.txt"));
	fclose($read);
}



//2.

$read = fopen("string.txt", "r") or die("Unable to open file!");
$standard = "/^([A-Za-z]+)$/";
function mailRegex($read, $standard){
if(preg_match($standard, $read, $result)) 
{
　　echo $result;
} 
else 
{
　　echo "比對錯誤";
}
fclose($read);
}



//3.





?>