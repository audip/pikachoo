<?php
	ob_start();
	session_start();
?>
<?php
	require "samkush.php";
	$billno=$_GET['billno'];
	$str="delete from samkush_bill where billno='$billno'";
	echo $str;
	if(mysqli_query($con,$str))
		header("location:cart.php");


?>

<?php
	ob_flush();
?>