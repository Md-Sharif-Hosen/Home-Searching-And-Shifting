<?php
include("config.php");
$sid = $_GET['id'];
$sql = "DELETE FROM country WHERE sid = {$sid}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>country Deleted</p>";
	header("Location:countryadd.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>country Not Deleted</p>";
	header("Location:countryadd.php?msg=$msg");
}
mysqli_close($con);
?>
