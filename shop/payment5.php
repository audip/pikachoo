<?php
ob_start();
session_start();
require "../samkush.php";
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
       		 <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  		body{
	  		background-color: #e74c3c;
	  		color: white;
  		}
  		input[type="submit"]{
	  		border: 2px solid #3498db;
	  		background-color: #3498db;
	  		font-weight: 700;
	  		color: white; 
	  		padding: 10px 15px;
	  		margin-top: 10px;
	  		font-size: 18px;
  		}
  		input[type="submit"]:hover{
	  		border: 2px solid white;
	  		background-color: #2980b9;
	  		color: white; 
	  		-webkit-transition: border 4s ease-out;
  		}
  		table{
	  		padding: 10px 10px;
	  		background-color: white;
	  		color: #526163;
	  		border-color: #dddddd;

  		}
  		table:hover{
	  		background-color: #eff6fa;
  		}
  		.bold{
	  		font-weight: bold;
	  		padding: 5px 5px;
	  		border-bottom-right-radius: 20px;
	  		border-top-right-radius: 20px;
  		}
  </style>

	<script>
  $(function() {
    $( "#datepicker" ).datepicker({ minDate: +3, maxDate: "+1M +10D" });
  });
  </script>
		<title>Pikachoo | Payment</title>
	</head>
<body>

<?php

//$_SESSION['s_var']=1;

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
								<td>Shipping Address</td>
								<td>|&raquo;|</td>
								<td >Order Summary</td>
								<td>|&raquo;|</td>
								<td bgcolor="#3498db" class="bold">Payment</td>
							</tr>
						</table><br><br><br>';

		$str="select * from samkush_login where userid='$uid'";
		$result=mysqli_query($con,$str);
		$row=mysqli_fetch_array($result);
		echo '<center>';

		/* Solvemedia Code Start- Updated by Aditya 15/03/2014 1400 */
		if($_POST)
		{
			require('solvemedialib.php');
			//echo 'h1';
			$privkey="-qIHJN-1fHZoUcM0sBtpwOGAyjWt7J8m";
			$hashkey="M4VSK3uEb-5kvyOvD.G.daSTLfQV158K";
			$solvemedia_response = solvemedia_check_answer($privkey,
				$_SERVER["REMOTE_ADDR"],
				$_POST["adcopy_challenge"],
				$_POST["adcopy_response"],
				$hashkey);
			if (!$solvemedia_response->is_valid) {
				//To handle incorrect answer
				print "Error: ".$solvemedia_response->error;
			}
			else{
				//Processing form here
				header('location:temppayment.php');
			}
		}
		/* Solvemedia Check Ends here*/

		$str="select userid,billno,total from samkush_bill where userid='$uid'";
		$res=mysqli_query($con,$str);
		$total=0;
		while($row=mysqli_fetch_array($res))
		{
			$total=$total+$row[2];
		}
		echo '<p><font size="5">YOUR FINAL BILL</p></font><br><br>';
		echo '<p><font size="5">TOTAL AMOUNT: <b>&#8377 '.$total.'</b></p></font><br><br>';
		echo '<p><font size="5">Shipping Method: <b>Cash on Delivery (COD)</b></p></font><br><br>';
		echo '<form action="payment5.php" method="POST">
					<p>ESTIMATED DELIVERY DATE: <input type="text" name="c3" id="datepicker" placeholder="MM/DD/YEAR"> (<i>We will deliver within 3-4 days</i>) </p>';
		require('solvemedialib.php');
		echo solvemedia_get_html("DS2CB83-GNP4qGfRF7vWm0nFAH9vJ1aa");
		echo '<input type="submit" value="Place Order" name="placeorder"></form>';
		//echo '<a href="temppayment.php">Place Order</a>';
	}
else
	header("location:index.php");
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