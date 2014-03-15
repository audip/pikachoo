<?php
ob_start();
session_start();
require "samkush.php";
?>
<html>
<body>
<?php
	$email=$_SESSION['email'];
	$pass=$_SESSION['pass'];
	$to=$_SESSION['email'];
	$subject="Account Activated";
	$message="You have successfully activated your account.Username: '$email'   Password: '$pass'";
	$from="info@pikachoo.in";
	$headers="From:" . $from;
	mail($to,$subject,$message,$headers);
	header("location:index.php");
?>

</body>
</html>
<?php
ob_flush();
?>