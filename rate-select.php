<?php
	include_once("database-connect.php");
$citizenid=$_GET["citizenid"];


$query="select * from ratings where citizenid='$citizenid'";
//$query="select * from workers where  city='$city'";
$table=mysqli_query($dbpro,$query);//table will have 0 or 1 record

$ary=array();//JSON-1

while($row=mysqli_fetch_array($table))
{
	
	$ary[]=$row;
}
echo json_encode($ary);
?>