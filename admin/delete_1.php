<?php
	require "samkush.php";
	$del=$_GET['code'];
	$str="delete from samkush_item where item_id='$del'";
	echo $str;
	if(mysqli_query($con,$str))
		header("location:viewp.php");


?>