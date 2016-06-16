<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>2-2</title>
</head>
<body>
	<!--使用ajax從後台抓出資料-->
	<form>
	<!--此為範例 請自行修改-->
		<select name="YourLocation">
　			<option value="Taipei">台北市</option>
			<option value="Tainan">台南市</option>
　			<option value="Kaohsiung">高雄市</option>
		</select>
		<select name="area">
			
		</select>
	</form>
	<!--3-3題-->縣市+區域<input type="text" id="address"></br>
	<!--加分題(需chrome可用)--><input type="button" value="下載">
</body>

<?php

$link=mysqli_connect("localhost","root","Zz@0910114798","2");
mysqli_query($link,"set name utf8");
if(isset($_POST['YourLocation'])){
	$link=mysqli_connect("localhost","root","Zz@0910114798","2");
	mysqli_query($link,"set name utf8");
	$YourLocation=$_POST['YourLocation'];

$sql="SELECT * FROM area , city WHERE area_name='$YourLocation' AND 'city.no'='area.city_no' ";
$readresult=mysqli_query($link,$sql);

echo "<select name='area'>";
while($result=mysqli_fetch_array($readresult))
{
	echo"<option value='Taipei'>$result[2]</option>";
}	
echo "</select>";

?>

</html>