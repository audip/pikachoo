<?php
	session_start();
	ob_start();
	require "samkush.php";
?>
<html>
<body>

<center><h3>Thank you for Verification</h3></center>
<?php
//if(!isset($_POST['sign1']))

	//header("location:index.php");


	//$str="insert into samkush_login values('','$user','$email','$pass','guest','$code','$code')";
	//mysqli_query($con,$str);
	//echo $str;
	$uid1=$_GET['id'];

	$uid=stripslashes($uid1);
	//	echo $uid;
	$uid2=str_replace("'","","$uid");
	//echo $uid2;
	$str="select userid from samkush_login where userid='$uid2'";
	$res=mysqli_query($con,$str);
	//echo $str;
	if(mysqli_num_rows($res)=='0')
	{
		echo '<p>You are not a valid registered user !! Please sign up to continue</p>';
		header("Refresh:3;index.php");
	}
	else
	{
		$str="update samkush_login set codeid='77' where userid='$uid2'";
		mysqli_query($con,$str);
		echo '<center><p>Please be patient, you will be redirected to login page in a moment... </p>';
		header("Refresh:5;activate.php");
	}

?>
</body>
</html>

<?php
	session_destroy();
	ob_flush();
?>