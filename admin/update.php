<?php
	ob_start();
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Pikachoo | Update Item List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body bgcolor="#D8D8D8">
<?php
	session_start();
	if(!isset($_SESSION['s_var']))
	{
		echo "Error!! You are being redirected to Login Page!!";
		header("Refresh:2;login.php");
	}
	else if($_SESSION['s_var']=='0')
	{
		require "samkush.php";
		//$name=$_SESSION['uname'];
		$str="select * from samkush_item";
		$res=mysqli_query($con,$str);
		echo '<center><h2>Enter Item Name: </h2>';
		echo '<form action="edit.php" method="get">';
		echo '<select name="r">';
		while($row=mysqli_fetch_array($res))
		{
			echo '<option>'.$row[1].'</option>';
		}
		echo '<br><br><input type="submit" value="Go" name="go">';
		echo '</select></form><br>
		<div id="tab">
		<a href ="admin.php">Back</a>
			<a href ="logout.php">Logout</a></div></center>';
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