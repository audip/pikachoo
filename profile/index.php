<?php
	ob_start();
	session_start();
	require "samkush.php";
?>

<!DOCTYPE html>
 <html lang="en" class="no-js">
   
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="content-language" content="en" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
        <meta name="author" content="Kaushal Bajaj & Samip Jain" />
        <meta name="language" content="english">		
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
        <link rel="stylesheet" type="text/css" href="../../css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../../css/style3.css" />
		<link rel="stylesheet" type="text/css" href="../../css/common.css" />
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
									<img src="../img/cart.png" alt="pikachoo-cart" title="My Cart">
								</a>
								<a href="../login/logout.php" class="codrops-demos">
								  <img src="../img/logout.png" alt="pikachoo-logout" title="Logout">
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
									<img src="../img/cart.png" alt="pikachoo-cart" title="My Cart">
								<a href="../login/logout.php" class="codrops-demos">
								  <img src="../img/logout.png" alt="pikachoo-logout" title="Logout">
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
		<table width="600">
		<tr><th><h2><a href="pass.php">Change Password</a></h2></td><td><h2><a href="/shop/track.php">Track My Order</a></h2></td><td><h2><a href="order.php">MyOrder</a></h2></td></tr></table>
		<hr color="white">
		<br><br>
		<?php
		
		 require"samkush.php";
		 $k=$_SESSION['uid'];
		 
		 
		 $str="select * from samkush_profile where userid='$k'";
		 
		 $result=mysqli_query($con,$str);
		 $row=mysqli_fetch_array($result);
		 echo "<h2><u>".$row[1]."'s &nbsp; Profile</u></h2><br><br>";
		 echo "<center><table width='400'>
		 <form action='' method='post'>
		 <tr align='center'><td align='left'><b>NAME : </b></td><td><input type='text' name='p1' autofocus value='".$row[1]."'></td></tr>
		 <tr align='center'><td align='left'><b>ADDRESS : </b></td><td><input type='text' name='p2' autofocus value='".$row[3]."'></td></tr>
		 <tr align='center'><td align='left'><b>LANDMARK : </b></td><td><input type='text' name='p3' autofocus value='".$row[4]."'></td></tr>
		 <tr align='center'><td align='left'><b>CITY : </b></td><td><input type='text' name='p4' autofocus value='".$row[5]."'></td></tr>
		 <tr align='center'><td align='left'><b>STATE : </b></td><td><input type='text' name='p5' autofocus value='".$row[6]."'></td></tr>
		 <tr align='center'><td align='left'><b>PINCODE : </b></td><td><input type='text' name='p6' autofocus value='".$row[7]."'></td></tr>
		 <tr align='center'><td align='left'><b>PHONE NO : </b></td><td><input type='text' name='p7' autofocus value='".$row[8]."'></td></tr>
		 <tr><td colspan='2' align='center'><br><br><input type='submit' name='p8' value='SAVE CHANGES'></td></tr>
		 </form></table></center><br><br><br>";
		 if(isset($_POST['p8']))
		 {
		  $k1=$_POST['p1'];
		  $k2=$_POST['p2'];
		  $k3=$_POST['p3'];
		  $k4=$_POST['p4'];
		  $k5=$_POST['p5'];
		  $k6=$_POST['p6'];
		  $k7=$_POST['p7'];
		  $k8=$_SESSION['uid'];
		  $str="update samkush_profile set name='".$k1."',address='".$k2."',landmark='".$k3."',city='".$k4."',state='".$k5."',pincode='".$k6."',phone='".$k7."' where userid='".$k8."'";
		  mysqli_query($con,$str);
		  echo "<font color='red'><h2> YOUR PROFILE HAS BEEN UPDATED </h2></font>";
		  
		  header("Refresh:3;index.php");
		  
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