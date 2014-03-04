<?php
	ob_start();
	require "samkush.php";
?>

<?php 
	session_start();
	if(!isset($_SESSION['s_var']))
		header("location:login.php");
	else if($_SESSION['s_var']=='0')
	{
		$item_select=$_POST['s'];
		echo '
			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Add New Product</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
		<body bgcolor="#D8D8D8">
		<center>
			<body bgcolor="#D8D8D8">
					<table border="1" align="left">
					<tr width="600" height="300">
					<td><img src="4.jpg"></td></tr>
					</table>
					<br><br>
		<div id="header"><p><u>Add any Item</p></u></div>
		<form action="addp.php" method="post" enctype="multipart/form-data">
		<table border="0" width="500">
			<tr><td>Item Name </td><td><input type="text" name="name"></td></tr>
			<tr><td>Item Type </td><td><input type="text" name="type" value="'.$item_select.'"></td></tr>
			<tr><td>Item Type2</td><td><input type="text" name="type2"></td></tr>
			<tr><td>Item Code </td><td><input type="text" name="itemcode"></td></tr>
			<tr><td>Item Price </td><td><input type="text" name="price"></td></tr>
			<tr><td>Rate </td><td><input type="text" name="rate"></td></tr>
			<tr><td>Manufacturer Name </td><td><input type="text" name="manu_name"></td></tr>
			<tr><td>Insert Pizza Image</td><td><input type="file" name="file"></td></tr></table><br><br>
			<div id="addp"><a href ="select.php">Back </a>
			<a href ="logout.php">Logout</a></div>
			<input type="submit" name="sub" class="button1" value="Add Item">
		</form>
		</center></body></html>';
	
	
		if(isset($_POST['sub']))
		{
			require "samkush.php";
			$name=$_POST['name'];
			$allowedExts = array("jpg", "jpeg", "gif", "png","JPG","PNG","GIF");
			$extension = end(explode(".", $_FILES["file"]["name"]));
			//echo $name;
			//echo $extension;
			if ((($_FILES["file"]["type"] == "image/gif")
			|| ($_FILES["file"]["type"] == "image/jpeg")
			|| ($_FILES["file"]["type"] == "image/JPG")
			|| ($_FILES["file"]["type"] == "image/PNG")
			|| ($_FILES["file"]["type"] == "image/GIF")
			|| ($_FILES["file"]["type"] == "image/pjpeg"))
			&& ($_FILES["file"]["size"] < 6000000)
			&& in_array($extension, $allowedExts))
			{
				if ($_FILES["file"]["error"] > 0)
				{
					echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
				}
				else
				{	
					$photo=$name.".".$extension;
					if (file_exists("photos/" . $photo))
					{
						echo $photo. " already exists. ";
					}
					else
					{
						move_uploaded_file($_FILES["file"]["tmp_name"], "photos/".$photo);
						echo $photo." uploaded in the system";
						$_SESSION['pic']=$photo;
					}
				}
			}
			else
			{
				echo "Invalid photo file";
			}

			$item=$_POST['name'];
			$type=$_POST['type'];
			$type2=$_POST['type2'];
			$code=$_POST['itemcode'];
			$price=$_POST['price'];
			$rate=$_POST['rate'];
			$mname=$_POST['manu_name'];
			/*echo $item;
			echo $type;
			echo $type2;
			echo $code;
			echo $price;
			echo $rate;
			echo $mname;*/
			if($type=='gift')
			{
				$str="insert into samkush_gift values('','$code','$item','$type','$type2','$price','$rate','$mname','$photo')";
				mysqli_query($con,$str);
				$str1="select item_id from samkush_gift where item_name='$item'";
				$res=mysqli_query($con,$str1);
				$row=mysqli_fetch_array($res);
				$id=$row[0];
				$str2="insert into samkush_item values('$id','$code','$item','$type','$type2','$price','$rate','$mname','$photo')";
				mysqli_query($con,$str2);
			}
			else if($type=='flower')
			{
				$str="insert into samkush_flower values('','$code','$item','$type','$type2','$price','$rate','$mname','$photo')";
				mysqli_query($con,$str);
				$str1="select item_id from samkush_flower where item_name='$item'";
				$res=mysqli_query($con,$str1);
				$row=mysqli_fetch_array($res);
				$id=$row[0];
				$str2="insert into samkush_item values('$id','$code','$item','$type','$type2','$price','$rate','$mname','$photo')";
				mysqli_query($con,$str2);
			}
			else if($type=='cakes')
			{
				$str="insert into samkush_cakes values('','$code','$item','$type','$type2','$price','$rate','$mname','$photo')";
				mysqli_query($con,$str);
				$str1="select item_id from samkush_cakes where item_name='$item'";
				$res=mysqli_query($con,$str1);
				$row=mysqli_fetch_array($res);
				$id=$row[0];
				$str2="insert into samkush_item values('$id','$code','$item','$type','$type2','$price','$rate','$mname','$photo')";
				mysqli_query($con,$str2);
			}
			else if($type=='bags')
			{
				$str="insert into samkush_bags values('','$code','$item','$type','$type2','$price','$rate','$mname','$photo')";
				mysqli_query($con,$str);
				echo $str;
				$str1="select item_id from samkush_bags where item_name='$item'";
				$res=mysqli_query($con,$str1);
				//echo $str1;
				echo '<br>';
				$row=mysqli_fetch_array($res);
				$id=$row[0];
				$str2="insert into samkush_item values('$id','$code','$item','$type','$type2','$price','$rate','$mname','$photo')";
				mysqli_query($con,$str2);
				//echo $str2;
			}
			else
				echo "Error";
			
		}
	}
	else
		header("header:login.php");

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