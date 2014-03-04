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
       
        <meta name="description" content="Pikachoo is a complete online gift store located in Kolkata." />
        <meta name="keywords" content="Pikachoo,Pikachoo Store, gifts, flower, cupcakes, cakes, Online Gift Store, gift store, samip jain, kaushal bajaj" />
        <meta name="author" content="Samip Jain & Kaushal Bajaj" />
        <meta name="language" content="english">
		
		<meta property="og:title" content="Pikachoo | The Online Gift Store: Pikachoo is a complete online gift store for your entire family" />
		<meta property="og:type" content="website" />	
		<meta property="og:url" content="www.pikachoo.in" />
		<meta property="og:image" content="www.pikachoo.in/pikachoo_185.jpg" />
		<meta property="og:admins" content="100001460800375">
		<meta property="og:admins" content="100000658551655">
		<meta property="og:description" content="Pikachoo is a complete online gift store located in Kolkata.">
		
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="../css/style3.css" />
		<link rel="stylesheet" type="text/css" href="../css/common.css" />
		
		<title>Pikachoo | MyCart</title>
    </head>
    <body>
		<div class="container">
			<div class="codrops-top">
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="prism"><font color="deep grey">P</font>ikachoo</font>
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/">Home</a>
				  <a href="../video/index.html">Video</a>
				  <a href="../about/">About</a>
				  <a href="../shop/index.php">Shop</a>
				  <a href="../contact/index.html">Contact Us</a>
		<?php
					$uid=$_SESSION['uid'];
					$str="select username,type,code from samkush_login where userid='$uid'";
					$result=mysqli_query($con,$str);
					$row=mysqli_fetch_array($result);
					if(!isset($_SESSION['s_var']))
					{
						echo '<span class="right">
								<a href="/login/index.php" class="codrops-demos">
									<strong class="codrops-demos">My Account</strong>
								</a>
								<a href="cart.php">
									<img src="img/cart.png" alt="pikachoo-cart">
								</a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</span>';
					}
					else if($_SESSION['s_var']=='1' && $row[2]=='1')
					{
						echo '<span class="right">
								
								<a href="/login/profile.php" class="codrops-demos">
									<strong class="codrops-demos">Hi, '.$row[0].'</strong>									
								</a>
								<a href="cart.php">
									<img src="img/cart.png" alt="pikachoo-cart" title="My Cart">
								</a>
								<a href="/login/logout.php" class="codrops-demos">
									<img src="img/logout.png" alt="pikachoo-cart" title="Logout">
								</a>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</span>';
					}
					else if($_SESSION['s_var']=='0')
					{
						echo '<span class="right">
								<a href="/login/profile.php" class="codrops-demos">
									<strong class="codrops-demos">Hi, '.$row[0].'</strong>
								</a>
								
								<a href="cart.php">
									<img src="img/cart.png" alt="pikachoo-cart" title="My Cart">
								</a>
								<a href="/login/logout.php" class="codrops-demos">
									<img src="img/logout.png" alt="pikachoo-cart" title="Logout">
								</a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</span>';
					}
					else
						header("location:/login");
				  ?>
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
				<a href="bags/bags.php" class="title">Bags</a>
				<ul class="span2">
					<li>
                         <a href="/shop/bags/envelope.php" class="title">Envelope</a>                    </li>
					<li>
                        <a href="/shop/bags/potli.php" class="title">Potli Bags</a>                    </li>
		
				</ul>
			</li>
			</ul>
		</div>
		</nav>

<?php
	session_start();
	if(isset($_SESSION['s_var']))
	{
		$uid=$_SESSION['uid'];
		$cid=$_SESSION['cid'];
		$string="update samkush_bill set userid='$uid' where userid='$cid'";
		mysqli_query($con,$string);
		$str="select username from samkush_login where userid='$uid'";
		$res=mysqli_query($con,$str);
		$r=mysqli_fetch_array($res);
		
	}
	else
	{
		$str="select name,code from samkush_guest where code=(select max(code) from samkush_guest)";
		$res=mysqli_query($con,$str);
		$r=mysqli_fetch_array($res);
		$uid=$r[1];
		echo $uid;
	}
	//echo $str;
	//echo $r[0];
	$str4="select billno,item_name,quantity,total from samkush_bill where userid='$uid'";
	//echo $str4;
	$result3=mysqli_query($con,$str4);
	$count=mysqli_num_rows($result3);
	echo '<center><a href="/"><img src="img/cart_logo.jpg" alt="Pikachoo Cart"></a>';
	if(mysqli_num_rows($result3)!=0)
	{
		echo '<table width="800" height="400" border="0">
			<hr width="900"><tr align="center"><td colspan="4"><font size="6"><b><i>HELLO '.$r[0].'</b></i></font><hr width="900"></td></tr>
			<tr align="center"><td colspan="4"><font size="5"><h4><b>MY CARTON('.$count.')</b><h4><p><font size="4">You currently have '.$count.' item(s) in your cart</font></p></font><hr width="900"></td>
			<tr align="center"><td><font size="4"><b>ITEM PURCHASED</b></font></td>
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
		echo '<hr width="900"><table width="700" border="0"><tr align="right"><td>ESTIMATED TOTAL: </td><td width="80">Rs. '.$total.'</td></tr><table>';
		echo '<hr width="900"><br><br><a href="index.php">Continue Shopping</a>';
		echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo '<a href="payment2.php?value=confirm&cid='.$uid.'">Proceed to Payment</a>
		</center>';
	}
	else
		echo '<br><br><br><br><br><br><p align="center"><font size="6">Your cart is EMPTY :( </p></font>
			<a href="index.php">KEEP SHOPPING</a>';

?>
	<br><br><br><br><br>
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
                            <a href="about/" title="About us" class="title">About us</a>
                        </li>
                        <li>
                            <a href="/" title="Elements" class="title">Careers</a>
                        </li>
                        <li>
                            <a href="/" title="Grids" class="title">Grids</a>
                        </li>
                        <li>
                            <a href="/" title="Store locator" class="title">Store locator</a>
                        </li>
                        <li>
                            <a href="contact/index.html" title="Contact us" class="title">Contact us</a>
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
                            <a href="login/index.php" title="Login / Register">Login / Register</a>									
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
