<?php
	ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Change Password</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<?php
	session_start();
	require "samkush.php";
	if(!isset($_SESSION['userid']))
	{ 
		header("location:login.php");   
	}
	else
	{
	   echo '<center><h2><font face="verdana" size="5">Enter New Password</h2></font>
	   <table border="0" width="300"><body bgcolor="#D8D8D8"><form action="" method="post">
	   <tr><td>Old Password</td><td><input type="pass" name="old"></td></tr><br>
	   <tr><td>New Password</td><td><input type="pass" name="new"></td></tr><br>
	   <tr><td>Retype</td><td><input type="pass" name="retype"></td></tr></table><br>
	   <input type="submit" name="go" value="Go">
	   <div id="tab">
		<a href ="admin.php">Back</a>
		<a href ="logout.php">Logout</a></div></center>';
	   if(isset($_POST['go']))
	   {
			$old=$_POST['old'];
			$new=$_POST['new'];
			$retype=$_POST['retype'];
			$uid=$_SESSION['userid'];
			//echo $old;
			//echo $new;
			//echo $retype;
			$str="select * from login where uid='$uid'";
			$result=mysqli_query($con,$str);
			$row=mysqli_fetch_array($result);
			
			if($row[1]!=$old)
			{
				echo "Error!! Password do not match";
				header("Refresh:1;change.php");
			}
			else if($new!=$retype)
			{
				echo "Error!! Please Retype";
				header("Refresh:1;change.php");
			}
			else
			{
				
				$old=$new;
				$str="update login set password='$old' where uid='$uid'";
				mysqli_query($con,$str);
				header("location:login.php");
			}
		}
				
	}
?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47903223-1', 'pikachoo.in');
  ga('send', 'pageview');

</script>
</body>
</html>
<?php
	ob_flush();
?>