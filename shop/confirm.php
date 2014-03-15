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
		
		
		<noscript>
			<meta http-equiv="refresh" content="0; URL=nojava.html">
		</noscript>
		<script language="JavaScript" src="java/right-click.js"></script>
      
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
		<link rel="stylesheet" type="text/css" href="../css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="../css/style3.css" />
		<link rel="stylesheet" type="text/css" href="../css/common.css" />
		
		<title>Pikachoo | Order Confirmation</title>
    </head>

<body>

	<div class="container">
			<div class="codrops-top">
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="prism"><font color="deep grey">P</font>ikachoo</font>
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/">Home</a>
				  <a href="/video/">Video</a>
				  <a href="/about/">About</a>
				  <a href="/shop/">Shop</a>
				  <a href="/contact/">Contact Us</a>
		<?php
					$uid=$_SESSION['uid'];
					$str="select username,type,code from samkush_login where userid='$uid'";
					$result=mysqli_query($con,$str);
					$row=mysqli_fetch_array($result);
					if(!isset($_SESSION['s_var']))
					{
						echo '<span class="right">
								<a href="../login/index.php" class="codrops-demos">
									<strong class="codrops-demos">My Account</strong>
								</a>
								<a href="cart.php">
									<img src="img/cart.png" alt="pikachoo-cart" title="My Cart">
								</a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</span>';
					}
					else if($_SESSION['s_var']=='1' && $row[2]=='1')
					{
						echo '<span class="right">
								
								<a href="../login/profile.php" class="codrops-demos">
									<strong class="codrops-demos">Hi, '.$row[0].'</strong>									
								</a>
								<a href="cart.php">
									<img src="img/cart.png" alt="pikachoo-cart" title="My Cart">
								</a>
								<a href="../login/logout.php" class="codrops-demos">
									<img src="img/logout.png" alt="pikachoo-cart" title="Logout">
								</a>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</span>';
					}
					else if($_SESSION['s_var']=='0')
					{
						echo '<span class="right">
								<a href="../login/profile.php" class="codrops-demos">
									<strong class="codrops-demos">Hi, '.$row[0].'</strong>
								</a>
								
								<a href="cart.php">
									<img src="img/cart.png" alt="pikachoo-cart" title="My Cart">
								</a>
								<a href="../login/logout.php" class="codrops-demos">
									<img src="img/logout.png" alt="pikachoo-cart" title="Logout">
								</a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</span>';
					}
					else
						header("location:../login");
				  ?>
			</div>
		</div>
<?php
	if(!isset($_SESSION['s_var']))
		header("location:index.php");
	else if($_SESSION['s_var']=='1')
	{
			$uid=$_SESSION['uid'];
			/**$str="select sum(total) from samkush_bill where userid='$uid'";
			$res=mysqli_query($con,$str);
			$row=mysqli_fetch_array($res);
			$str1="insert into samkush_finalbill values('','$uid','$row[0]','pending','33')";
			mysqli_query($con,$str1);
			//echo $str1;**/
			$str2="select orderno from samkush_finalbill where orderno=(select max(orderno) from samkush_finalbill where userid='$uid') and status='pending'";
			$result=mysqli_query($con,$str2);
			//echo $str2;
			$row1=mysqli_fetch_array($result);
			echo '<center>
					<img src="img/cart_logo.jpg" alt="Pikachoo-Payment"><br><br><br>';
			echo '<p><font size="6"><p>YOUR ORDER HAS BEEN RECEIVED</p></font><br><br>';
			echo '<p><font size="6"><p><b>ORDER ID: '.$row1[0].'</b></p></font>';
			echo '<p><font size="4"><p><b>Track Your Order using above mentioned ID	</b></p></font><br><br>';
			echo 'For any <b><u>CUSTOMIZATION MESSAGE</b></u>,<br><font size="4">E-MAIL US at:</font><font size="5" color="red">customize@pikachoo.in</font><br><br>';
			echo '<p>THANK &nbsp; YOU &nbsp; FOR &nbsp; YOUR &nbsp; PURCHASE</p>';
			$string="select * from samkush_finalbill where orderno='$row1[0]'";
			$result=mysqli_query($con,$string);
			$row=mysqli_fetch_array($result);
			//echo $string;
			
			$string1="select * from samkush_bill where userid='$uid'";
			$result1=mysqli_query($con,$string1);
			//echo $string1;
			while($row1=mysqli_fetch_array($result1))
			{
				$str="insert into samkush_order values('$row[0]','$row[1]','$row1[2]','$row1[3]','$row1[4]','$row1[5]')";
				mysqli_query($con,$str);
				//echo $str;
			}
			
			$str3="delete from samkush_bill where userid='$uid'";
			mysqli_query($con,$str3);
			$str4="update samkush_finalbill set counter='77'";
			mysqli_query($con,$str4);
			//echo $str2;
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