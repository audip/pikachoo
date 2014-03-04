<?php
	ob_start();
	require "samkush.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Editing</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body bgcolor="#D8D8D8">
<?php 
	session_start();
	if(!isset($_SESSION['s_var']))
		header("location:login.php");
	else if($_SESSION['s_var']=='0')
	{		
		require "samkush.php";
		$pname=$_GET['r'];
		$str ="select * from samkush_item where item_name='$pname'";
		//$str="select name,roll,course_name,semester from student_details where roll='$roll'";
		//echo $str;		
		$result=mysqli_query($con,$str);
		$row=mysqli_fetch_array($result);
		echo '<center><form action="" method="get">
			<br>Item Name <input type="text" name="itemname">
			<br>Item Type <input type="text" name="itemtype">
			<br>Item Price <input type="text" name="itemprice">
			<br>Rate <input type="text" name="itemrate">
			<br>Manufacturer Name <input type="text" name="manuname">
			<br>Description <input type="text" name="des">
			<br>Item Id <input type="text" name="pid" readonly value="'.$row[0].'"><br><br>
			<input type="submit" name="update" value="Update"><br><br>
			<div id="tab"><a href ="admin.php">Home </a>
			<a href ="update.php">Back </a>
			<a href ="logout.php">Logout</a></div>
			
		</form>
		</center>';
	
		if(isset($_GET['update']))
		{
			require "samkush.php";
			$n=$_GET['itemname'];
			$t=$_GET['itemtype'];
			$p=$_GET['itemprice'];
			$r=$_GET['itemrate'];
			$mn=$_GET['manuname'];
			$d=$_GET['des'];
			$id=$_GET['pid'];
			$str="update samkush_item set item_name='$n',item_type='$t',item_price='$p',rate='$r',manu_name='$mn',item_description='$d' where item_id='$id'";
			
			//echo $str;
			mysqli_query($con,$str);
			echo '<b>Updated succesfully</b>';
		}
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