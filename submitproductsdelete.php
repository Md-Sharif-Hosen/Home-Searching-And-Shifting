<?php
include("config.php");
$pid = $_GET['id'];
$sql = "DELETE FROM products WHERE pid = {$pid}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>Products Deleted</p>";
	header("Location:feature.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>Products Not Deleted</p>";
	header("Location:feature.php?msg=$msg");
}
mysqli_close($con);
?>