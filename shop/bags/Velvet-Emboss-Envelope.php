<?php
	session_start();
	require "samkush.php";
?>

<!DOCTYPE html>
 <html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Pikachoo | Velvet-Emboss-Envelope</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
        <link rel="stylesheet" type="text/css" href="../../css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../../css/style3.css" />
		<link rel="stylesheet" type="text/css" href="../../css/common.css" />
		<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="/resources/demos/external/jquery.mousewheel.js"></script>
  <script src="/resources/demos/external/globalize.js"></script>
  <script src="/resources/demos/external/globalize.culture.de-DE.js"></script>
  <script src="/resources/demos/external/globalize.culture.ja-JP.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {

    $( "#spinner" ).spinner({
      min: 1,
      max: 20,
      step: 1,
      start: 1000,
      numberFormat: "C"
    });
  });
  </script>
    </head>
    <body>
        <div class="container">		
			<div class="codrops-top">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="prism"><font color="deep grey">P</font>ikachoo</font>
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/">Home</a>
				  <a href="../video/index.html">Video</a>
				  <a href="#about">About</a>
				  <a href="shop.html">Shop</a>
				  <a href="../contact/index.html">Contact Us</a>
				  
					
				  <?php
					if(!isset($_SESSION['s_var']))
					{
						echo '<span class="right">
								<a href="../login/index.php" class="codrops-demos">
									<strong class="codrops-demos">My Account</strong>
								</a>
								<a href="/shop/cart.php">
									<img src="../img/cart.png" alt="pikachoo-cart" title="My Cart">
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
								<a href="../login/profile.php" class="codrops-demos">
									<strong class="codrops-demos">Hi, '.$row[0].'</strong>
								</a>
								<a href="/shop/cart.php">
									<img src="img/cart.png" alt="pikachoo-cart">
								</a>
								<a href="../login/logout.php" class="codrops-demos">
									<strong class="codrops-demos">Logout</strong>
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
								<a href="../login/profile.php" class="codrops-demos">
									<strong class="codrops-demos">Hi, '.$row[0].'</strong>
								</a>
								<a href="/shop/cart.php">
									<img src="img/cart.png" alt="pikachoo-cart">
								</a>
								<a href="../login/logout.php" class="codrops-demos">
									<strong class="codrops-demos">Logout</strong>
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
                    </a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="right">
					<a href="../login/index.php" class="codrops-demos">
                        <strong class="codrops-demos">My Account</strong>
					</a>
                    <!--<a href="login.php" class="codrops-demos">
                        <strong class="codrops-demos">Log In</strong>
					<a href="signup.php" class="codrops-demos">
						<strong class="codrops-demos">Sign Up</strong>
                    </a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span>-->
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
		</div>
		
		<nav id="nav">
		 <div class="container1">
			<ul class="main-menu">
			<li>
				<a href="gift.php" title="cakes" class="title">Gifts</a>
				<ul class="span2">
					<li>
                         <a href="category.php" title="type1" class="title">Type 1</a>                    </li>
					<li>
                        <a href="category.php" title="type2" class="title">Type 2</a>                    </li>
					<li>
                        <a href="category.php" title="type3" class="title">Type 3</a>                    </li>
					<li>
                        <a href="category.php" title="type4" class="title">Type 4</a>                    </li>
					<li>
                        <a href="category.php" title="type5" class="title">Type 5</a>                    </li>
				</ul>
			</li>
			<li>
                <a href="../flower/flower.php" title="type1" class="title">Flower</a>            
				<ul class="span2">
					<li>
                         <a href="../flower/natural.php" title="Natural Flower" class="title">Natural Flower</a>                    </li>
					<li>
                        <a href="../flower/artificial.php" title="Artificial Flower" class="title">Artificial Flower</a>                    </li>
				</ul>
			</li>
		
			<li>
				<a href="cakes.php" title="cakes" class="title">Cakes</a>
				<ul class="span2">
					<li>
                         <a href="../cakes/cupcakes.php" title="Cupcakes" class="title">Cupcakes</a>                    </li>
					<li>
                        <a href="../cakes/pudding.php" title="Puddings" class="title">Puddings</a>                    </li>
					<li>
                        <a href="../cakes/pies.php" title="pies & chocolates" class="title">Pies & Chocolates</a>                    </li>
				</ul>
			</li>
			<li>
				<a href="#" title="cakes" class="title">Bags</a>
				<ul class="span2">
					<li>
                         <a href="envelope.php" title="type1" class="title">Envelope</a>                    </li>
					<li>
                        <a href="potli.php" title="type1" class="title">Potli Bags</a>                    </li>
				</ul>
			</li>
			</ul>
		</div>
		</nav>
		<?php
			require "samkush.php";
			$item_id=$_GET['id'];
			//echo $item_id;
			$str="select item_name,item_type,item_price,manu_name,image from samkush_bags where item_id='$item_id'";
			$result=mysqli_query($con,$str);
			$row=mysqli_fetch_array($result);
			echo '<center><table width="900" height="400" border="0">
				<tr>
					<td rowspan="7" width="400"><img class="primary" src="../../admin/photos/'.$row[4].'" width="400px" height="400px" alt="'.$row[0].'" /></td>
					<td>&nbsp;</td>
					<td align="center" height="70"><h1>'.$row[0].'</h1></td>
				</tr>
				<tr>
					<td width="40">&nbsp;</td>
					<td height="60"><h2>Price:'.$row[2].'<h2></td>
				</tr>
				<tr>
					<td width="40">&nbsp;</td>
					<td><h2>Description</h2>The <b>BROCADE ( JAMAWAR )</b> enhances the traditional look of this envelope.<br>
Suitable for giving MONEY GIFTS on wedding and on other occassions.<h3><u>Set of 6 pieces in 1 pack.</u></h3></td>
				</tr>
				<tr>
					<td width="40">&nbsp;</td>
					<td><form action="../temp.php" method="POST"><h2>Quantity</h2><input id="spinner" type="text" name="qty" value="1" size="5"></td>
				</tr>
				<tr>
					<td width="40">&nbsp;</td>
					<td><input type="hidden" name="itemid" size="5" readonly value="'.$item_id.'"></td>
				</tr>
				<tr>
					<td width="40">&nbsp;</td>
					<td align="center"><input type="submit" class="addtocart" name="addtocart" value="Add To Cart"></td>
				</tr>
				<tr>
					<td width="40">&nbsp;</td>
					<td>Delivery within 5 days</td>
				</tr>
				</table>';
				
		?>
		
		
		
		
		
		
		<br><br><br><br>
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
                            <a href="about-us.html" title="About us" class="title">About us</a>
                        </li>
                        <li>
                            <a href="elements.html" title="Elements" class="title">Careers</a>
                        </li>
                        <li>
                            <a href="grids.html" title="Grids" class="title">Grids</a>
                        </li>
                        <li>
                            <a href="store-locator.html" title="Store locator" class="title">Store locator</a>
                        </li>
                        <li>
                            <a href="contact-us.html" title="Contact us" class="title">Contact us</a>
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
                            <a href="login-register.html" title="Login / Register">Login / Register</a>									
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
                            <a href="category.html" title="Mens">Gifts</a>
                        </li>
                        <li>
                            <a href="category.html" title="Womens">Flower</a>
                        </li>
						<li>
                            <a href="category.html" title="Womens">Cakes</a>
                        </li>
                    </ul>
                </div>
                <!-- End class="categories" -->

                <hr />
            </div>

            <div class="span4">
                <h6>From the blog</h6>

                <ul class="list-chevron links">
                    <li>
                        <a href="blog-post.html">Article with video</a>
                        <small>05/01/2013</small>
                    </li>
                    <li>
                        <a href="blog-post.html">Article with images</a>
                        <small>03/14/2013</small>
                    </li>
                    <li>
                        <a href="blog-post.html">Article with style!</a>
                        <small>08/31/2013</small>
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
                            <a class="twitter" href="#" title="Twitter">Twitter</a>								
                        </li>

                        <li>
                            <a class="facebook" href="#" title="Facebook">Facebook</a>								
                        </li>

                        <li>
                            <a class="pinterest" href="#" title="Pinterest">Pinterest</a>								
                        </li>

                        <li>
                            <a class="youtube" href="#" title="YouTube">YouTube</a>								
                        </li>

                        <li>
                            <a class="vimeo" href="#" title="Vimeo">Vimeo</a>								
                        </li>

                        <li>
                            <a class="flickr" href="#" title="Flickr">Flickr</a>								
                        </li>

                        <li>
                            <a class="googleplus" href="#" title="Google+">Google+</a>								
                        </li>

                        <li>
                            <a class="dribbble" href="#" title="Dribbble">Dribbble</a>								
                        </li>

                        <li>
                            <a class="tumblr" href="#" title="Tumblr">Tumblr</a>								
                        </li>

                        <li>
                            <a class="digg" href="#" title="Digg">Digg</a>								
                        </li>

                        <li>
                            <a class="linkedin" href="#" title="LinkedIn">LinkedIn</a>								
                        </li>

                        <li>
                            <a class="instagram" href="#" title="Instagram">Instagram</a>								
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
	<!--credits starts here-->
				
			<div class="credits">
			<div class="container_footer">
				<div class="row">
					<div class="span8">
						<p>&copy; 2014 <a href="http://themeforest.net/item/la-boutique-responsive-ecommerce-template/5573130?ref=Tfingi" title="Pikachoo">Pikachoo</a> &middot; <a href="#" title="Terms &amp; Conditions">Terms &amp; Conditions</a> &middot; <a href="#" title="Privacy policy">Privacy policy</a> &middot; All Rights Reserved. </p>
					</div>
					<div class="span4 text-right hidden-phone">
						<p><a href="http://themeforest.net/item/la-boutique-responsive-ecommerce-template/5573130?ref=Tfingi" title="Responsive eCommerce template">Presented by Samip Jain &amp; Kaushal Bajaj</a></p>
					</div>	
				</div>
			</div>
		</div>
	</body>
</html>