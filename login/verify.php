<?php
	session_start();
	ob_start();
	require "samkush.php";
?>
<html>
<body>

<center><h3>Thank you for Verification</h3></center>
<?php
if(!isset($_SESSION['s_var']))
{
	header("location:login.php");
}
else if($_SESSION['s_var']==1)
{
	$user=$_SESSION['user'];
	$email=$_SESSION['email'];
	$pass=$_SESSION['pass'];
	$code=$_SESSION['code'];
	$str="insert into samkush_login values('','$user','$email','$pass','guest','$code','$code')";
	mysqli_query($con,$str);
	echo '<center><p>Please be patient, you will be redirected to login page in a moment... </p>';
	header("Refresh:1;activate.php");
}
else
	header("location:login.php");
?>
</body>
</html>

<?php
	ob_flush();
?>