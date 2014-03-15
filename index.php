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
       
        <meta name="description" content="Pikachoo is a Online Company started by Samip Jain and Kaushal Bajaj with an aim to open new doors for Private Testers." />
        <meta name="keywords" content="Pikachoo,Pikachoo Store, Online Gift Store,gifts,flower,chocolates,cupcakes,cakes,puddings,pies,gift store,Samip Jain,Kaushal Bajaj" />
        <meta name="author" content="Samip Jain & Kaushal Bajaj" />
        <meta name="language" content="english">
		
		<meta property="og:title" content="Pikachoo | The Online Gift Store: Pikachoo is a complete online gift store for your entire family" />
		<meta property="og:type" content="website" />	
		<meta property="og:url" content="www.pikachoo.in" />
		<meta property="og:image" content="www.pikachoo.in/pikachoo_185.jpg" />
		<meta property="og:admins" content="100001460800375">
		<meta property="og:admins" content="100000658551655">
		<meta property="og:description" content="Pikachoo is a Online Company started by Samip Jain and Kaushal Bajaj with an aim to open new doors for Private Testers.">


        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="shop/css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/common.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
		<!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		
		 <title>Pikachoo | The Online Gift Store</title>
    </head>
    <body>
        <div class="container">
			<div class="codrops-top">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="prism"><font color="deep grey">P</font>ikachoo</font>
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/" title="Pikachoo Home">Home</a>
				  <a href="video/" title="Video">Video</a>
				  <a href="about/" title="About Pikachoo">About</a>
				  <a href="shop/" title="Shop Online">Shop</a>
				  <a href="contact/" title="Contact Us">Contact Us</a>
				  
				  
				  <?php
					if(!isset($_SESSION['s_var']))
					{
						echo '<span class="right">
								<a href="login/" class="codrops-demos" title="Login / Register">
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
						$str="select username,type from samkush_login where userid='$uid'";
						$result=mysqli_query($con,$str);
						$row=mysqli_fetch_array($result);
						echo '<span class="right">
								<a href="login/profile.php" class="codrops-demos">
									<strong class="codrops-demos">Hi, '.$row[0].'</strong>
								</a>
								<a href="/shop/cart.php">
									<img src="images/cart.png" alt="pikachoo-cart" title="My Cart">
								</a>
								<a href="/login/logout.php" class="codrops-demos">
									<img src="images/logout.png" alt="logout" title="Logout">
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
								<a href="login/profile.php" class="codrops-demos">
									<strong class="codrops-demos">Hi, '.$row[0].'</strong>
								</a>
								<a href="/shop/cart.php">
									<img src="images/cart.png" alt="pikachoo-cart" title="My Cart">
								</a>
								<a href="/login/logout.php" class="codrops-demos">
									<img src="images/logout.png" alt="logout" title="Logout">
								</a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</span>';
					}
					else
						header("location:../login");
				  ?>
                <!--<span class="right">
					<a href="login/index.php" class="codrops-demos">
                        <strong class="codrops-demos">My Account</strong>
					</a>
                    <!--<a href="login.php" class="codrops-demos">
                        <strong class="codrops-demos">Log In</strong>
					<a href="signup.php" class="codrops-demos">
						<strong class="codrops-demos">Sign Up</strong>
                    </a>-->
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
			
			
			<section class="main">
				
			
				<ul class="ch-grid">
					<li>
						<img src="logo/pikachoo-logo.jpg" alt="pikachoo">
					</li>
					<li>					
						<div class="ch-item">	
							<div class="ch-info">
								<h3>Gifts</h3>
								<p>Gift Items & Funky Bags<a href="shop/">Shop Online</a></p>
							</div>
							<div class="ch-thumb ch-img-1"></div>
						</div>
					</li>
					<li>
						<div class="ch-item">
							<div class="ch-info">
								<h3>Cakes</h3>
								<p>Cupcakes, Pies & Puddings<a href="shop/">Shop Online</a></p>
							</div>
							<div class="ch-thumb ch-img-2"></div>
						</div>
					</li>
					<li>
						<div class="ch-item">
							<div class="ch-info">
								<h3>Florist</h3>
								<p>Natural & Artificial Flowers<a href="shop/">Shop Online</a></p>
							</div>
							<div class="ch-thumb ch-img-3"></div>
						</div>
					</li>
				</ul>
				
			</section>
			<br><br><br><br>
        </div>
		<!--<div id="video">
				<iframe width="1350" height="500"
					src="http://www.youtube.com/embed/MO6OcXyhObM" alt="pikachoo video">
				</iframe>
			</div>-->
		<br><br><br><br>
		<!--footer starts here-->
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
                            <a href="/" title="Careers" class="title">Careers</a>
                        </li>-->
                        <li>
                            <a href="/faq/" title="FAQ" class="title">FAQ</a>
                        </li>
                        <li>
                            <a href="/shop/track.php" title="Trace My Order" class="title">Trace My Order</a>
                        </li>
                        <li>
                            <a href="/contact/" title="Contact us" class="title">Contact us</a>
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
                            <a href="/login/" title="Login / Register">Login / Register</a>									
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
                            <a href="shop/gift/gift.php" title="Gifts">Gifts</a>
                        </li>
                        <li>
                            <a href="shop/flower/flower.php" title="Flower">Flower</a>
                        </li>
						<li>
                            <a href="shop/cakes/cakes.php" title="Cakes">Cakes</a>
                        </li>
						<li>
                            <a href="shop/bags/bags.php" title="Bags">Bags</a>
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
                        <a href="https://www.youtube.com/watch?v=yFZDltqVLwE" target="blank">Official Teaser</a>
                        <small>27/02/2014</small>
                    </li>
					
                    <li>
                        <a href="http://youtu.be/MO6OcXyhObM" target="blank">Official Promotional Video</a>
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
                            <a class="twitter" href="https://twitter.com/pikachoo_in" title="Twitter" target="blank">Twitter</a>								
                        </li>

                        <li>
                            <a class="facebook" href="https://www.facebook.com/pikachoogiftstore" title="Facebook" target="blank">Facebook</a>								
                        </li>

                        <li>
                            <a class="pinterest" href="http://www.pinterest.com/pikachooin/" title="Pinterest" target="blank">Pinterest</a>								
                        </li>

                        <li>
                            <a class="youtube" href="http://goo.gl/c8mZQ3" title="YouTube" target="blank">YouTube</a>								
                        </li>
						
						<li>
                            <a class="vimeo" href="https://vimeo.com/user25537878" title="Vimeo" target="blank">Vimeo</a>								
                        </li>

                        <li>
                            <a class="googleplus" href="https://plus.google.com/u/0/100947361654640107748" title="Google+" target="blank">Google+</a>								
                        </li>

                        <li>
                            <a class="linkedin" href="http://www.linkedin.com/pub/pikachoo-pikachoo/91/845/123" title="LinkedIn" target="blank">LinkedIn</a>								
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
						<p><a href="#" title="">Presented by Samip Jain &amp; Kaushal Bajaj</a></p>
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