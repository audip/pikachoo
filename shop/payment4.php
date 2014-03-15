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
		 <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
 <script>
  $(function() {
    $( "#datepicker" ).datepicker({ minDate: +3, maxDate: "+1M +10D" });
  });
  </script>


		<title>Pikachoo | Order Summary</title>
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
							<td>Shipping Address</td>
							<td>|&raquo;|</td>
							<td  bgcolor="grey">Order Summary</td>
							<td>|&raquo;|</td>
							<td>Payment</td>
						</tr>
					</table>
				<br><br>';
					$str4="select billno,item_name,quantity,total from samkush_bill where userid='$uid'";
					$result3=mysqli_query($con,$str4);
					$count=mysqli_num_rows($result3);
					echo '<center>';
					if(mysqli_num_rows($result3)!=0)
					{
						echo '<table width="800" border="0">
						<tr align="center"><td colspan="4"><font size="5"><h4><b>Your Order Summary</b><h4></font><hr width="900"></td>
						<tr align="center"><td>&nbsp;</td>
						<td><font size="4"><b>QUANTITY</b></font></td>
						<td><font size="4"><b>SUBTOTAL</b></font></td>
						<td>&nbsp;</td></tr>';
						while($row3=mysqli_fetch_array($result3))
						{			
							echo '<tr align="center">
								<td>'.$row3['1'].'</td><td>'.$row3['2'].'</td><td>Rs. '.$row3['3'].'</td><td><a href="delete_1.php?billno='.$row3[0].'"><img src="img/Erase.png" title="Remove"></a></td></tr>';
						}
	
	
						echo '</table><br>';
						$str="select total from samkush_bill where userid='$uid'";
						$result=mysqli_query($con,$str);
						$total=0;
						while($row=mysqli_fetch_array($result))
						{
							$total=$total+$row[0];
						}
						echo '<table width="900" border="0"><tr align="right"><td><b>ESTIMATED TOTAL: &nbsp;&nbsp;&nbsp;</b></td><td width="80">Rs. '.$total.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr><table>';
						
						echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>';
					//	echo '<p>ESTIMATED DELIVERY DATE: <input type="text" name="c3" id="datepicker" placeholder="MM/DD/YEAR"> (<i>We will deliver within 3-4 days</i>) </p>';
						echo '<br><br><a href="payment3.php" title="Forgot Something ? Lol!">Go Back</a> &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;';
						echo '<a href="index.php" title="Add more items to cart">Update Cart</a>&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;';
						echo '<a href="payment5.php">Proceed to Payment</a>
						</center>';
					}
					else
						echo '<br><br><br><br><br><br><p align="center"><font size="6">Your cart is EMPTY :( </p></font>
								<a href="index.php">KEEP SHOPPING</a>';


				echo '<br><br>';
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