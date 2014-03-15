<?php
ob_start();
session_start();
require "samkush.php";
?>
<html>
<body>
<?php	
	$user=$_POST['usernamesignup'];
	$email=$_POST['emailsignup'];
	$pass=$_POST['passwordsignup'];
	$repass=$_POST['passwordconfirm'];
	$code=$_POST['code'];
	$string="select username,email from samkush_login where email='$email'";
	$res=mysqli_query($con,$string);
	$row=mysqli_fetch_array($res);
	if(mysqli_num_rows($res)==1)
	{
		echo '<center>';
		echo 'Hello '.$row[0].', you have been already registered';
		echo 'You are being redirected to login page';
		header("Refresh:2;index.php");
	}
	else
	{
		if($pass!=$repass)
		{
			echo '<center>';
			echo '<font color="red"><u>PLEASE CHECK YOUR PASSWORD</u></font><br>';
			echo "Your Password does not match, Please signup again !! You are being redirected to login page";
			header("Refresh:2;index.php");
			//$str="insert into samkush_login values('','$user','$email','$pass','guest','$code','$code')";
			//mysqli_query($con,$str);
			//echo $str;
		}
		else
		{
			$str="insert into samkush_login values('','$user','$email','$pass','guest','$code','33',CURDATE(),CURTIME(),NOW())";
			mysqli_query($con,$str);
			//echo $str;
			$str1="select userid from samkush_login where email='$email'";
			$res=mysqli_query($con,$str1);
			$row=mysqli_fetch_array($res);
			
			$to=$_POST['emailsignup'];
			$subject="Email Verification";
			//$pass=$_GET['pass'];
			$message="Please Click the link below to verify your Email Id: http://pikachoo.in/login/verify.php?id='$row[0]'";

			$from="info@pikachoo.in";

			$headers="From:" . $from;
			mail($to,$subject,$message,$headers);
			echo "<center><h2>Check Your Email Id for verification</h2></center>";
			echo '<center><a href="/login/">Go Back to Login Page</a>';
		}
	}
	?>

</body>
</html>
<?php
ob_flush();
?>