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
		<link rel="shortcut icon" href="http://pikachoo.in/favicon.ico" type="image/x-icon" >	
		<meta name="google-site-verification" content="gM2QaflSX7Gc4v5R8AHXNNkCn6rUa9FwdV_8TtnF9kY" />
       
        <meta name="description" content="Pikachoo is a Online Company started by Samip Jain and Kaushal Bajaj with an aim to open new doors for Private Testers." />
        <meta name="keywords" content="Pikachoo,Pikachoo Store, Online Gift Store,gifts,flower,cupcakes,cakes,gift store,Samip Jain,Kaushal Bajaj" />
        <meta name="author" content="Samip Jain & Kaushal Bajaj" />
        <meta name="language" content="english">
		
		<meta property="og:title" content="Pikachoo | The Online Gift Store: Pikachoo is a complete online gift store for your entire family" />
		<meta property="og:type" content="website" />	
		<meta property="og:url" content="www.pikachoo.in" />
		<meta property="og:image" content="www.pikachoo.in/pikachoo_185.jpg" />
		<meta property="og:admins" content="100001460800375">
		<meta property="og:admins" content="100000658551655">
		<meta property="og:description" content="Pikachoo is a Online Company started by Samip Jain and Kaushal Bajaj with an aim to open new doors for Private Testers.">
			
		
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<!--<link rel="stylesheet" type="text/css" href="css/demo_shop.css" />
		<!--<link rel="stylesheet" type="text/css" href="component.css" />-->
		<link rel="stylesheet" type="text/css" href="../css/common.css" />
        <link rel="stylesheet" type="text/css" href="../css/style3.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
		<!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		
		<title>Pikachoo | Shop</title>
    </head>
    <body>
        <div class="container">
			<!--<div class="pikachoo-af-header">
				<div class="pikachoo-af-inner">
					<p><font face="prism"><font color="deep grey">P</font>ikachoo</font></p>
					<nav>
						<a href="#">Home</a>
						<a href="#">Video</a>
						<a href="#">About Us</a>						
						<a href="#">Shop</a>
						<a href="#">Contact Us</a>
					</nav>
				</div>
			</div>-->
			
			<div class="codrops-top">
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="prism"><font color="deep grey">P</font>ikachoo</font>
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/">Home</a>
				  <a href="/video/">Video</a>
				  <a href="/about/">About</a>
				  <a href="/shop/index.php">Shop</a>
				  <a href="/contact/">Contact Us</a>
				  <?php
					$uid=$_SESSION['uid'];
					$str="select username,type from samkush_login where userid='$uid'";
					$result=mysqli_query($con,$str);
					$row=mysqli_fetch_array($result);
					if(!isset($_SESSION['s_var']))
					{
						echo '<span class="right">
								<a href="../login/index.php" class="codrops-demos">
									<strong class="codrops-demos">My Account</strong>
								</a>
								<a href="cart.php">
									<img src="img/cart.png" alt="pikachoo-cart">
								</a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</span>';
					}
					else if($_SESSION['s_var']=='1')
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
				  <!--<a href="../login/profile.php">
						<img src="img/cart.png" alt="pikachoo-cart">
				  </a>-->
				
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
		</div>
		<?php
			require "samkush.php";
			$str="select item_id,item_name,item_type from samkush_item";
			$result=mysqli_query($con,$str);
			
		?>
		<nav id="nav">
		 <div class="container1">
			<ul class="main-menu">
			<li>
				<a href="gift/gift.php" title="cakes" class="title">Gifts</a>
			</li>
			<li>
                <a href="flower/flower.php" title="type1" class="title">Flower</a>            
				<ul class="span2">
					<li>
                         <a href="flower/natural.php" title="Natural Flower" class="title">Natural Flower</a>                    </li>
					<li>
                        <a href="flower/artificial.php" title="Artificial Flower" class="title">Artificial Flower</a>                    </li>
				</ul>
			</li>
		
			<li>
				<a href="cakes/cakes.php" title="cakes" class="title">Cakes</a>
				<ul class="span2">
					<li>
                         <a href="cakes/cupcakes.php" title="Cupcakes" class="title">Cupcakes</a>                    </li>
					<li>
                        <a href="cakes/puddings.php" title="Puddings" class="title">Puddings</a>                    </li>
					<li>
                        <a href="cakes/pies.php" title="Pies & Chocolates" class="title">Pies & Chocolates</a>                    </li>
				</ul>
			</li>
			<li>
				<a href="bags/bags.php" title="cakes" class="title">Bags</a>
				<ul class="span2">
					<li>
                         <a href="bags/envelope.php" title="Envelope" class="title">Envelope</a>                    </li>
					<li>
                        <a href="bags/polti.php" title="Potli Bags" class="title">Potli Bags</a>                    </li>
				</ul>
			</li>
			</ul>
		</div>
		</nav>
		<table align="center">
			<tr><td width="400">
				<img src="1.jpg" name="slide" height="400" alt="pikachoo" style="border-bottom:5px solid #2e4add">
				<script language="javascript" src="slide.js"></script></td></tr>
		</table>
		<section class="promos">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="free-shipping">
                    <div class="box border-top">
                        <img src="img/free-shipping.png" alt="" />
                        <div class="hgroup title">
                            <h3>Free Kolkata shipping!</h3>
                            <h5>Pikachoo</h5>
                        </div>
                        <p>Free delivery to Kolkatans</p>
                    </div>
                </div>
            </div>

            <div class="span4">
                <div class="world-shipping">
                    <div class="box border-top">
                        <img src="img/world-shipping.png" alt="" />
                        <div class="hgroup title">
                            <h3>Best Quality guarantee</h3>
                            <h5>YO yo</h5>
                        </div>
                        <p>Pikachoo</p>
                    </div>
                </div>
            </div>

            <div class="span4">
                <div class="low-price">
                    <div class="box border-top">
                        <img src="img/low-price.png" alt="" />
                        <div class="hgroup title">
                            <h3>Lowest price guarantee!</h3>
                            <h5>YO Yo</h5>
                        </div>
                        <p>Pikachoo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
							<div class="span3">
								<div class="widget Categories">
                                        <h3 class="widget-title widget-title">Categories</h3>
                                        <ul>
                                            <li>
                                                <a href="gift/gift.php" class="title">Gifts</a>
                                            </li>
											<li>
												<a href="flower/flower.php" class="title">Flower</a>
												<ul>
												<li>
                                                        <a href='natural.php' class="title">Natural Bouquet</a>
                                                </li>
                                                <li>
                                                        <a href='artificial.php' class="title">Artificial Bouquet</a>
                                                </li>
												</ul>
											</li>
                                            <li>
                                                <a href="cakes/cakes.php" class="title">Cakes</a>
                                                <ul>
                                                    <li>
                                                        <a href='cakes/cupcakes.php' class="title">Cupcakes</a>
                                                    </li>
                                                    <li>
                                                        <a href='cakes/puddings.php' class="title">Puddings</a>
                                                    </li>
                                                    <li>
                                                        <a href='cakes/pies.php' class="title">Pies &amp; Chocolates</a>
                                                    </li>
                                                </ul>
                                            </li>
											<li>
                                                <a href="bags/bags.php" class="title">Bags</a>
                                                <ul>
                                                    <li>
                                                        <a href='bags/envelope.php' class="title">Envelopes</a>
                                                    </li>
                                                    <li>
                                                        <a href='bags/potli.php' class="title">Potli Bags</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul> 
									</div>                               
								</div>
					<!--End of Category-->
					<!--Item Display starts here-->
			<section class="featured">
                <div class="container">         
                    <div class="row">
                        <div class="span9">                                                                        
                                   <!-- Products list -->
							<ul class="product-list isotope">
								<li class="standard" data-price="58">
									<a href="product.html" title="Lisette Dress">
										<div class="image">
											<img class="primary" src="img/thumbnails/db_file_img_137_640xauto.jpg" width="200px" height="400px" alt="" />
										</div>
										<div class="title">
											<div class="prices">
												<span class="price">£58.00</span>
											</div>
											<h3>Lisette Dress</h3>
										</div>
									</a>
								</li>
								
								<li class="standard" data-price="58">
									<a href="product.html" title="Lisette Dress">
										<div class="image">
											<img class="primary" src="img/thumbnails/db_file_img_137_640xauto.jpg" width="200px" height="400px" alt="" />
										</div>
										<div class="title">
											<div class="prices">
												<span class="price">£58.00</span>
											</div>
											<h3>Lisette Dress</h3>
										</div>
									</a>
								</li>
								
								<li class="standard" data-price="58">
									<a href="product.html" title="Lisette Dress">
										<div class="image">
											<img class="primary" src="img/thumbnails/db_file_img_137_640xauto.jpg" width="200px" height="400px" alt="" />
										</div>
										<div class="title">
											<div class="prices">
												<span class="price">£58.00</span>
											</div>
											<h3>Lisette Dress</h3>
										</div>
									</a>
								</li>
								
								<li class="standard" data-price="58">
									<a href="product.html" title="Lisette Dress">
										<div class="image">
											<img class="primary" src="img/thumbnails/db_file_img_137_640xauto.jpg" width="200px" height="400px" alt="" />
										</div>
										<div class="title">
											<div class="prices">
												<span class="price">£58.00</span>
											</div>
											<h3>Lisette Dress</h3>
										</div>
									</a>
								</li>
								
								<li class="standard" data-price="58">
									<a href="product.html" title="Lisette Dress">
										<div class="image">
											<img class="primary" src="img/thumbnails/db_file_img_137_640xauto.jpg" width="200px" height="400px" alt="" />
										</div>
										<div class="title">
											<div class="prices">
												<span class="price">£58.00</span>
											</div>
											<h3>Lisette Dress</h3>
										</div>
									</a>
								</li>
								
								<li class="standard" data-price="58">
									<a href="product.html" title="Lisette Dress">
										<div class="image">
											<img class="primary" src="img/thumbnails/db_file_img_137_640xauto.jpg" width="200px" height="400px" alt="" />
										</div>
										<div class="title">
											<div class="prices">
												<span class="price">£58.00</span>
											</div>
											<h3>Lisette Dress</h3>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
					
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
                            <a href="shop/gift/gift.php" title="Gifts">Gifts</a>
                        </li>
                        <li>
                            <a href="shop/flower/flower.php" title="Flower">Flower</a>
                        </li>
						<li>
                            <a href="shop/cakes/cakes.php" title="Cakes">Cakes</a>
                        </li>
						<li>
                            <a href="shop/bags/bags.php" title="Cakes">Bags</a>
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
		</div>		<script>
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