<?php
	ob_start();
	session_start();
	require "samkush.php";
?>

<!DOCTYPE html>
 <html>
    <head>
        
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="content-language" content="en" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="google-site-verification" content="gM2QaflSX7Gc4v5R8AHXNNkCn6rUa9FwdV_8TtnF9kY" />
		<link rel="shortcut icon" href="http://pikachoo.in/favicon.ico" type="image/x-icon" >
       
        <meta name="description" content="Pikachoo is an Online Company started by Kaushal Bajaj & Samip Jain with an aim to open new doors for Private Testers." />
        <meta name="keywords" content="Bags,Envelopes,Potli Bags,Pikachoo,Pikachoo Store, Online Gift Store,gifts,flower,cupcakes,cakes,gift 
store,Samip Jain,Kaushal Bajaj" />
        <meta name="author" content="Kaushal Bajaj & Samip Jain" />
        <meta name="language" content="english">
		
		<meta property="og:title" content="Pikachoo | The Online Gift Store: Pikachoo is a complete online gift 
store for your entire family" />
		<meta property="og:type" content="website" />	
		<meta property="og:url" content="www.pikachoo.in" />
		<meta property="og:image" content="www.pikachoo.in/pikachoo_185.jpg" />
		<meta property="og:admins" content="100001460800375">
		<meta property="og:admins" content="100000658551655">
		<meta property="og:description" content="Pikachoo is an Online Company started by Kaushal Bajaj & Samip Jain with an aim to open new doors for Private 
Testers.">

		
		
        <link rel="stylesheet" type="text/css" href="../../css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<!--<link rel="stylesheet" type="text/css" href="css/demo_shop.css" />
		<!--<link rel="stylesheet" type="text/css" href="component.css" />-->
		<link rel="stylesheet" type="text/css" href="../../css/common.css" />
        <link rel="stylesheet" type="text/css" href="../../css/style3.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
		<!--<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
		<!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		
		<title>Bags | Pikachoo</title>
    </head>
    <body>
        <div class="container">			
			<div class="codrops-top">
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="prism"><font color="deep grey">P</font>ikachoo</font>
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/">Home</a>
				  <a href="/video/index.html">Video</a>
				  <a href="/about/">About</a>
				  <a href="/shop/index.php">Shop</a>
				  <a href="/contact/index.php">Contact Us</a>
				  
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
				  
				  <!--<span class="right">
					<a href="../login/index.php" class="codrops-demos">
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
            </div>
		</div>
		
		<nav id="nav">
		 <div class="container1">
			<ul class="main-menu">
			<li>
				<a href="/shop/gift/gift.php" class="title">Gifts</a>
				
			</li>
			<li>
                <a href="/shop/flower/flower.php" class="title">Bouquet</a>       
				<ul class="span2">
					<li>
                         <a href="/shop/flower/natural.php" class="title">Natural Bouquet</a>                    </li>
					<li>
                        <a href="/shop/flower/artificial.php" class="title">Artificial Bouquet</a>                    </li>
                </ul>
			</li>
		
			<li>
				<a href="/shop/cakes/cakes.php" class="title">Cakes</a>
				<ul class="span2">
					<li>
                         <a href="/shop/cakes/cupcakes.php" class="title">Cupcakes</a>                    </li>
					<li>
                        <a href="/shop/cakes/puddings.php" class="title">Puddings</a>                    </li>
					<li>
                        <a href="/shop/cakes/pies.php" class="title">Pies &amp; Chocolates</a>                    </li>
				</ul>
			</li>
			<li>
				<a href="#" class="title">Bags</a>
				<ul class="span2">
					<li>
                         <a href="envelope.php" class="title">Envelope</a>                    </li>
					<li>
                        <a href="potli.php" class="title">Potli Bags</a>                    </li>
		
				</ul>
			</li>
			</ul>
		</div>
		</nav>
		
		
	<table align="center">
			<tr><td width="400">
				<img src="/shop/1.jpg" name="slide" height="400" alt="dominos" style="border-bottom:5px solid #2e4add">
				<script language="javascript" src="/shop/slide.js"></script></td></tr>
		</table>
		
		
		
		<div class="span3">
			<div class="widget Categories">
                <h3 class="widget-title widget-title">Categories</h3>
                    <ul>
                        <li>
                            <a href="#" class="title">Bags</a>
                                <ul>
                                    <li>
                                        <a href="envelope.php" class="title">Envelope</a>
                                    </li>
                                    <li>
                                        <a href="potli.php" class="title">Potli Bags</a>
                                    </li>
                                  
                                </ul>
                        </li>
					</ul>
			</div>
		</div>
		<?php
			require "samkush.php";
			$str="select item_id,item_name,item_price,image from samkush_bags";
			$result=mysqli_query($con,$str);
			echo '<section class="featured">
					<div class="container">         
						<div class="row">
							<div class="span9">';
								echo '<ul class="product-list isotope">';
								while($row=mysqli_fetch_array($result))
								{
		
				                                                              
                                   /** Products list**/
										
										echo '<li class="standard" data-price="'.$row[2].'">';
										echo '<a href="'.$row[1].'.php?id='.$row[0].'" title="'.$row[1].'">';
												echo '<div class="image">
													<img class="primary" src="../../admin/photos/'.$row[3].'" width="200px" height="400px" alt="'.$row[1].'" />
												</div>
												<div class="title">
													<div class="prices">
														<span class="price">Rs '.$row[2].'</span>
													</div>';
													echo '<h3>'.$row[1].'</h3>
												</div>
											</a>
										</li>';								
								}			
								echo '</ul>';
							echo '</div>
						</div>
					</div>
				</section>';
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
                            <a class="twitter" href="https://twitter.com/pikachoo_in" title="Twitter" target="blank">Twitter</a>								
                        </li>

                        <li>
                            <a class="facebook" href="https://www.facebook.com/pikachoogiftstore" title="Facebook" target="blank">Facebook</a>								
                        </li>

                        <li>
                            <a class="pinterest" href="http://www.pinterest.com/pikachooin/" title="Pinterest" traget="blank">Pinterest</a>								
                        </li>

                        <li>
                            <a class="youtube" href="http://goo.gl/c8mZQ3" title="YouTube" target="blank">YouTube</a>								
                        </li>
						
						<li>
                            <a class="vimeo" href="https://vimeo.com/user25537878" title="Vimeo" target="blank">Vimeo</a>								
                        </li>

                        <li>
                            <a class="googleplus" href="https://plus.google.com/u/0/100947361654640107748" title="Google+">Google+</a>								
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