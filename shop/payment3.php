<?php
	ob_start();
	session_start();
	require "samkush.php";
?>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="content-language" content="en" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="google-site-verification" content="gM2QaflSX7Gc4v5R8AHXNNkCn6rUa9FwdV_8TtnF9kY" />
		<link rel="shortcut icon" href="http://pikachoo.in/favicon.ico" type="image/x-icon" >
       <link rel="stylesheet" type="text/css" href="css1/style1.css" />
		
		<title>Pikachoo | Shipping Address</title>
	</head>
<body>

<?php
	if(!isset($_SESSION['s_var']))
		header("location:index.php");
	else if($_SESSION['s_var']=='1')
	{
			$uid=$_SESSION['uid'];
			$str="select * from samkush_login where userid='$uid'";
			$result=mysqli_query($con,$str);
			$row=mysqli_fetch_array($result);
			echo '<center>
					<img src="img/cart_logo.jpg" alt="Pikachoo-Payment"><br><br><br>
					<table border="0" width="500">
						<tr align="center">
							<td >Shipping Info</td>
							<td>|&raquo;|</td>
							<td bgcolor="grey">Shipping Address</td>
							<td>|&raquo;|</td>
							<td>Order Summary</td>
							<td>|&raquo;|</td>
							<td>Payment</td>
						</tr>
					</table>
				<br><br>';
			

		$name=$_POST['fname'];
		$email=$_POST['email'];
		$company=$_POST['company'];
		$address=$_POST['address'];
		$landmark=$_POST['landmark'];
		$city=$_POST['city'];
		$pincode=$_POST['pincode'];
		$state=$_POST['state'];
		$phone=$_POST['phone'];
		/**$m=$_POST['month'];
		$d=$_POST['date'];
		$y=$_POST['year'];**/
		$gender=$_POST['gender'];
	
		/**echo $name;
		echo '<br>';
		echo $email;
		echo '<br>';
		echo $company;
		echo '<br>';
		echo $address;
		echo '<br>';
		echo $landmark;
		echo '<br>';
		echo $city;
		echo '<br>';
		echo	 $state;
		echo '<br>';
		echo $phone;
		echo '<br>';
		echo $m;
		echo '<br>';
		echo $d;
		echo '<br>';
		echo $y;
		echo '<br>';
		echo $gender;
		echo '<br>';**/
		$uid=$_SESSION['uid'];
		$string="select userid from samkush_profile where userid='$uid'";
		//echo $string;
		$res=mysqli_query($con,$string);
		//$row1=mysqli_fetch_array($res);
		if(mysqli_num_rows($res)=='0')
		{
			$str="insert into samkush_profile(userid,name,company,address,landmark,city,state,pincode,phone,gender) values('$uid','$name','$company','$address','$landmark','$city','$state','$pincode','$phone','$gender')";
			mysqli_query($con,$str);
			//echo 'hello';
		}
		else if(mysqli_num_rows($res)=='1')
		{
			$str1="update samkush_profile set name='$name',address='$address',landmark='$landmark',city='$city',state='$state',pincode='$pincode',phone='$phone' where userid='$uid'";
			//echo $str1;
			$res=mysqli_query($con,$str1);
		}
			$str2="select name,address,landmark,city,state,pincode,phone from samkush_profile where userid='$uid'";
			$result=mysqli_query($con,$str2);
			$row=mysqli_fetch_array($result);
			echo
				'<center>
				<table width="300">
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>NAME&nbsp;&nbsp;</td>
						<td>'.$row[0].'</td>
					</tr>
					<tr>
						<td>ADDRESS&nbsp;&nbsp;</td>
						<td>'.$row[1].'</td>
					</tr>
					<tr>
						<td>LANDMARK&nbsp;&nbsp;</td>
						<td>'.$row[2].'</td>
					</tr>
					<tr>
						<td>PINCODE&nbsp;&nbsp;</td>
						<td>'.$row[5].'</td>
					</tr>	
					<tr>
						<td>CITY&nbsp;&nbsp;</td>
						<td>'.$row[3].'</td>
					</tr>
					<tr>	
						<td>STATE&nbsp;&nbsp;</td>
						<td>'.$row[4].'</td>
					</tr>
					<tr>
						<td>PHONE&nbsp;&nbsp;</td>
						<td>'.$row[6].'</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<form 
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="payment2.php" title="Forgot Something? Lol!">Go Back</a></td>
							<td><a href="payment4.php" title="Continue to the next step">Continue</a></td>
						</tr>					
					</form>
					</table>';
		}
		else
			heaader("location:index.php");
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