<?php
session_start();
ob_start();
require "samkush.php";
?>
<html>
 <head>
  <title>Track My Order | Pikachoo</title>
         <link rel="stylesheet" type="text/css" href="/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="/shop/css/style.css" />
        <link rel="stylesheet" type="text/css" href="/css/style3.css" />
		<link rel="stylesheet" type="text/css" href="/css/common.css" />
		<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	</head>
<body>
		  <div class="container">		
			<div class="codrops-top">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="prism"><font color="deep grey">P</font>ikachoo</font>
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/">Home</a>
				  <a href="/video/index.html">Video</a>
				  <a href="/about">About</a>
				  <a href="/shop">Shop</a>
				  <a href="/contact">Contact Us</a>
				  
					 <?php
					if(!isset($_SESSION['s_var']))
					{
						echo '<span class="right">
								<a href="../login/index.php" class="codrops-demos">
									<strong class="codrops-demos">My Account</strong>
								</a>
								<a href="/shop/cart.php">
									<img src="/shop/img/cart.png" alt="pikachoo-cart">
								</a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</span>';
					}
					else if($_SESSION['s_var']=='1')
					{
						$uid=$_SESSION['uid'];
						//echo $uid;
						$str="select username,type from samkush_login where userid='$uid'";
						//echo $str;
						$result=mysqli_query($con,$str);
						$row=mysqli_fetch_array($result);
						echo '<span class="right">
								<a href="/profile/profile.php" class="codrops-demos">
									<strong class="codrops-demos">Hi, '.$row[0].'</strong>
								</a>
								<a href="/shop/cart.php">
									<img src="/images/cart.png" alt="pikachoo-cart" title="My Cart">
								</a>
								<a href="../login/logout.php" class="codrops-demos">
								  <img src="/images/logout.png" alt="pikachoo-logout" title="Logout">
								</a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</span>';
					}
					else if($_SESSION['s_var']=='0')
					{
						$uid=$_SESSION['uid'];
						$str="select username,type from samkush_login where userid='$uid'";
						$result=mysqli_query($con,$str);
						$row=mysqli_fetch_array($result);
						echo '<span class="right">
								<a href="/profile/profile.php" class="codrops-demos">
									<strong class="codrops-demos">Hi, '.$row[0].'</strong>
								</a>
								<a href="/shop/cart.php">
									<img src="../images/cart.png" alt="pikachoo-cart" title="My Cart">
								<a href="../login/logout.php" class="codrops-demos">
								  <img src="../images/logout.png" alt="pikachoo-logout" title="Logout">
								</a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</span>';
					}
					else
						header("location:../login");
				  ?>
				  
                
                    <!--<a href="login.php" class="codrops-demos">
                        <strong class="codrops-demos">Log In</strong>
					<a href="signup.php" class="codrops-demos">
						<strong class="codrops-demos">Sign Up</strong>
                    </a>-->
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
		</div>
				 

<center>
        <?php
		if(!isset($_SESSION['uid']))
		{

		echo '<table width="400">
		<form action="track.php" method="POST">
		
			<font face="comic sans ms"><h2>Enter Your Order ID:</h2></font><br><br>
			<input type="text" required name="track" > &nbsp;
			<br> <font face="comic sans ms" color="red">(eg :201548252)</font><br><br>
			<input type="submit" name="submit" value="Track">
			<br><br>
			</form>			
			
		</center>';
if(isset($_POST['submit']))
{
	$trackid=$_POST['track'];
	$str="select * from samkush_finalbill where orderno='$trackid'";
	//echo $str;
	echo '<center>';
	echo '<br><br>';
	
	$res=mysqli_query($con,$str);
	$row=mysqli_fetch_array($res);
	if(mysqli_num_rows($res)!=1)
		echo "<font color='red'><b><u>Wrong Order ID!! Please type it correctly</u></b></font>";
	else
	{
		echo '<table border="2" width="600" height="150">
			<tr align="center"><font color="green">
				<th>Order ID</th><th>Total Amount</th><th>Status</th><th>Order Date</th><th>Delivery Date</th></font>
			</tr>
			<tr align="center">
				<td>'.$row[0].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[7].'</td><td>'.$row[8].'</td>
			</tr></table></center>';
			
	}
 echo '<br><br><br>';
}
}
else
   {
    	echo '<table width="600">
		<tr><th><h2><a href="pass.php">Change Password</a></h2></td><td><h2><a href="profile.php">View Profile</a></h2></td><td><h2><a href="order.php">MyOrder</a></h2></td></tr></table>
		<hr color="white">
		<br><br>
		<table width="400">
		<form action="track.php" method="POST">
		
			<font face="comic sans ms"><h2>Enter Your Order ID:</h2></font><br><br>
			<input type="text" required name="track" > &nbsp;
			<br> <font face="comic sans ms" color="red">(eg :201548252)</font><br><br>
			<input type="submit" name="submit" value="Track">
			<br><br>
			</form>			
			
		</center>';
if(isset($_POST['submit']))
{
	$trackid=$_POST['track'];
	$str="select * from samkush_finalbill where orderno='$trackid'";
	//echo $str;
	echo '<center>';
	echo '<br><br>';
	
	$res=mysqli_query($con,$str);
	$row=mysqli_fetch_array($res);
	if(mysqli_num_rows($res)!=1)
		echo "<font color='red'><b><u>Wrong Order ID!! Please type it correctly</u></b></font>";
	else
	{
		echo '<table border="2" width="600" height="150">
			<tr align="center"><font color="green">
				<th>Order ID</th><th>Total Amount</th><th>Status</th><th>Order Date</th><th>Delivery Date</th></font>
			</tr>
			<tr align="center">
				<td>'.$row[0].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[7].'</td><td>'.$row[8].'</td>
			</tr></table></center>';
			
	}
 echo '<br><br><br>';
}
}
?>





















<!--footer starts here-->					
			<div class="footer">
    <div class="container">
        <div class="row">	
                        
            <div class="span2">
                <!-- Support -->
                <div class="support">
                    <h6>Support</h6>

                    <ul class="links">
                        <li>
                            <a href="/about/" title="About us" class="title">About us</a>
                        </li>
                        <!--<li>
                            <a href="/" title="Elements" class="title">Careers</a>
                        </li>-->
                        <li>
                            <a href="/faq" title="Grids" class="title">FAQ</a>
                        </li>
                        <li>
                            <a href="/shop/track.php" title="Store locator" class="title">Trace My Order</a>
                        </li>
                        <li>
                            <a href="/contact/index.php" title="Contact us" class="title">Contact us</a>
                        </li>											
                    </ul>
                </div>
                <!-- End class="support" -->

                <hr />

                <!-- My account -->
                <div class="account">
                    <h6>My account</h6>

                    <ul class="links">								
                        <li>
                            <a href="/login/index.php" title="Login / Register">Login / Register</a>									
                        </li>
                    </ul>
                </div>
                <!-- End class="account"-->
                
            </div>

            <div class="span2">
                
                <!-- Categories -->
                <div class="categories">
                    <h6>Categories</h6>

                    <ul class="links">
                        <li>
                            <a href="/shop/gift/gift.php" title="Gifts">Gifts</a>
                        </li>
                        <li>
                            <a href="/shop/flower/flower.php" title="Flower">Flower</a>
                        </li>
						<li>
                            <a href="/shop/cakes/cakes.php" title="Cakes">Cakes</a>
                        </li>
						<li>
                            <a href="/shop/bags/bags.php" title="Cakes">Bags</a>
                        </li>
                    </ul>
                </div>
                <!-- End class="categories" -->

                <hr />
            </div>

            <div class="span4">
                <h6>Youtube Gallery</h6>

                <ul class="list-chevron links">
                    <li>
                        <a href="https://www.youtube.com/watch?v=yFZDltqVLwE">Official Teaser</a>
                        <small>27/02/2014</small>
                    </li>
					
                    <li>
                        <a href="http://youtu.be/MO6OcXyhObM">Official Promotional Video</a>
                        <small>01/03/2014</small>
                    </li>
                </ul>
            </div>

            <div class="span4">	                

                <hr />
                
                <!-- Social icons -->
                <div class="social">
                    <h6>Socialize with us</h6>

                    <ul class="social-icons">

                        <li>
                            <a class="twitter" href="https://twitter.com/pikachoo_in" title="Twitter">Twitter</a>								
                        </li>

                        <li>
                            <a class="facebook" href="https://www.facebook.com/pikachoogiftstore" title="Facebook">Facebook</a>								
                        </li>

                        <li>
                            <a class="pinterest" href="http://www.pinterest.com/pikachooin/" title="Pinterest">Pinterest</a>								
                        </li>

                        <li>
                            <a class="youtube" href="http://goo.gl/c8mZQ3" title="YouTube">YouTube</a>								
                        </li>
						
						<li>
                            <a class="vimeo" href="https://vimeo.com/user25537878" title="Vimeo">Vimeo</a>								
                        </li>

                        <li>
                            <a class="googleplus" href="https://plus.google.com/u/0/100947361654640107748" title="Google+">Google+</a>								
                        </li>

                        <li>
                            <a class="linkedin" href="http://www.linkedin.com/pub/pikachoo-pikachoo/91/845/123" title="LinkedIn">LinkedIn</a>								
                        </li>

                    </ul>
					<br>
					<hr />
                </div>
                <!-- End class="social" -->

            </div>
        </div>
    </div>
</div>

		
		<!--Credits starts here-->	
		<div class="credits">
			<div class="container_footer">
				<div class="row">
					<div class="span8">
						<p>&copy; 2014 <a href="#" title="Pikachoo">Pikachoo</a> &middot; <a href="#" title="Terms &amp; Conditions">Terms &amp; Conditions</a> &middot; <a href="#" title="Privacy policy">Privacy policy</a> &middot; All Rights Reserved. </p>
					</div>
					<div class="span4 text-right hidden-phone">
						<p><a href="#" title="Responsive eCommerce template">Presented by Samip Jain &amp; Kaushal Bajaj</a></p>
					</div>	
				</div>
			</div>
		</div>
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