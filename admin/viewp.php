<?php
	ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Product List</title>
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
		$item_select=$_POST['s'];
		if($item_select=='bags')
		{
			echo 
			'<center>
			<p><u>Item List</u></p>';
	
			require "samkush.php";
			$str ="select * from samkush_item where item_type='bags'";
			$result=mysqli_query($con,$str);
			echo '<table border="5" width="900"><tr align="center"><td><b>Item Id</b></td><td><b>Item Code</b></td><td><b>Item Name</b></td><td><b>Item Type</b></td><td><b>Item Type2</b></td><td><b>Item Price</b></td><td><b>Rate</b></td><td><b>Manufacturer Name</b></td><td><b>Image</b></td><td>&nbsp;</td>';
			while($row=mysqli_fetch_array($result))
			{
				echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[6].'</td><td>'.$row[7].'</td><td>'.$row[8].'</td><td><a href="delete_1.php?code='.$row[0].'">Delete</a></td></tr>';
			}
			echo '</table><br><br>
			<div id="tab">
			<a href ="views.php">back </a>
			<a href ="logout.php">Logout</a></div>';
	
			echo '</center>';
		}
		else if($item_select=='gift')
		{
			echo 
			'<center>
			<p><u>Item List</u></p>';
	
			require "samkush.php";
			$str ="select * from samkush_item where item_type='gift'";
			$result=mysqli_query($con,$str);
			echo '<table border="5" width="900"><tr align="center"><td><b>Item Id</b></td><td><b>Item Code</b></td><td><b>Item Name</b></td><td><b>Item Type</b></td><td><b>Item Type2</b></td><td><b>Item Price</b></td><td><b>Rate</b></td><td><b>Manufacturer Name</b></td><td><b>Image</b></td><td>&nbsp;</td>';
			while($row=mysqli_fetch_array($result))
			{
				echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[6].'</td><td>'.$row[7].'</td><td>'.$row[8].'</td><td><a href="delete_1.php?code='.$row[0].'">Delete</a></td></tr>';
			}
			echo '</table><br><br>
			<div id="tab">
			<a href ="views.php">back </a>
			<a href ="logout.php">Logout</a></div>';
	
			echo '</center>';
		}
		else if($item_select=='flower')
		{
			echo 
			'<center>
			<p><u>Item List</u></p>';
	
			require "samkush.php";
			$str ="select * from samkush_item where item_type='flower'";
			$result=mysqli_query($con,$str);
			echo '<table border="5" width="900"><tr align="center"><td><b>Item Id</b></td><td><b>Item Code</b></td><td><b>Item Name</b></td><td><b>Item Type</b></td><td><b>Item Type2</b></td><td><b>Item Price</b></td><td><b>Rate</b></td><td><b>Manufacturer Name</b></td><td><b>Image</b></td><td>&nbsp;</td>';
			while($row=mysqli_fetch_array($result))
			{
				echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[6].'</td><td>'.$row[7].'</td><td>'.$row[8].'</td><td><a href="delete_1.php?code='.$row[0].'">Delete</a></td></tr>';
			}
			echo '</table><br><br>
			<div id="tab">
			<a href ="views.php">back </a>
			<a href ="logout.php">Logout</a></div>';
	
			echo '</center>';
		}
		else if($item_select=='cakes')
		{
			echo 
			'<center>
			<p><u>Item List</u></p>';
	
			require "samkush.php";
			$str ="select * from samkush_item where item_type='cakes'";
			$result=mysqli_query($con,$str);
			echo '<table border="5" width="900"><tr align="center"><td><b>Item Id</b></td><td><b>Item Code</b></td><td><b>Item Name</b></td><td><b>Item Type</b></td><td><b>Item Type2</b></td><td><b>Item Price</b></td><td><b>Rate</b></td><td><b>Manufacturer Name</b></td><td><b>Image</b></td><td>&nbsp;</td>';
			while($row=mysqli_fetch_array($result))
			{
				echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[6].'</td><td>'.$row[7].'</td><td>'.$row[8].'</td><td><a href="delete_1.php?code='.$row[0].'">Delete</a></td></tr>';
			}
			echo '</table><br><br>
			<div id="tab">
			<a href ="views.php">back </a>
			<a href ="logout.php">Logout</a></div>';
	
			echo '</center>';
		}
		else
			echo "Error";
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