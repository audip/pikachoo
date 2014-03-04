<?php
	ob_start();
	session_start();
	require "samkush.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Welcome Admin</title>
			<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="content-language" content="en" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="google-site-verification" content="gM2QaflSX7Gc4v5R8AHXNNkCn6rUa9FwdV_8TtnF9kY" />
		<link rel="shortcut icon" href="http://pikachoo.in/favicon.ico" type="image/x-icon" >

        <meta name="author" content="Samip Jain & Kaushal Bajaj" />
        <meta name="language" content="english">
		
		<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<?php
	if(!isset($_SESSION['s_var']))
		header("location:login.php");
	else if($_SESSION['s_var']=='0')
	{
		echo '<center><br><br>
			  <body bgcolor="#D8D8D8">
			  <div id="wrap">
					
		<div id="tab">
			<h2><font face="verdana"><u>Welcome Admin</font></h2></u>
			<a href="select.php">Add New Item</a><br><br>
			<a href="views.php">View Item List</a><br><br>
			<a href="update.php">Update Item Details</a><br><br>
			<a href="change.php">Change Password</a>
			<br><br><br><br>
			<a href="logout.php">Logout</a><br>
		</div>
		</div>
	
		</center>';
	}
	else
		header("location:login.php");
		
	
		
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