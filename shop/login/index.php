<?php
ob_start();
session_start();
require "samkush.php";
?>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="content-language" content="en" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="google-site-verification" content="gM2QaflSX7Gc4v5R8AHXNNkCn6rUa9FwdV_8TtnF9kY" />
		<link rel="shortcut icon" href="http://pikachoo.in/favicon.ico" type="image/x-icon" >
       
        <meta name="description" content="Pikachoo is a Online Company started by Samip Jain and Kaushal Bajaj with an aim to open new doors for Private Testers." />
        <meta name="keywords" content="Pikachoo,Pikachoo Store, gifts, flower, cupcakes, cakes, Online Gift Store, gift store, samip jain, kaushal bajaj" />
        <meta name="author" content="Samip Jain & Kaushal Bajaj" />
        <meta name="language" content="english">
		
		<meta property="og:title" content="Pikachoo | The Online Gift Store: Pikachoo is a complete online gift store for your entire family" />
		<meta property="og:type" content="website" />	
		<meta property="og:url" content="www.pikachoo.in" />
		<meta property="og:image" content="www.pikachoo.in/pikachoo_185.jpg" />
		<meta property="og:admins" content="100001460800375">
		<meta property="og:admins" content="100000658551655">
		<meta property="og:description" content="Pikachoo is a Online Company started by Samip Jain and Kaushal Bajaj with an aim to open new doors for Private Testers.">
		
		
		<noscript>
			<meta http-equiv="refresh" content="0; URL=nojava.html">
		</noscript>
		<script language="JavaScript" src="java/right-click.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		
		<title>Pikachoo | Log In / Sign Up</title>
    </head>
    <body oncontextmenu="return false;">
        <div class="container">		
			<div class="codrops-top">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="prism"><font color="deep grey">P</font>ikachoo</font>
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/">Home</a>
				  <a href="/video/">Video</a>
				  <a href="/about/">About</a>
				  <a href="/shop/">Shop</a>
				  <a href="/contact/">Contact Us</a>
				  
                
                    <!--<a href="login.php" class="codrops-demos">
                        <strong class="codrops-demos">Log In</strong>
					<a href="signup.php" class="codrops-demos">
						<strong class="codrops-demos">Sign Up</strong>
                    </a>-->
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
			<br><br><br>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="index.php" method="POST" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Email </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
								<p class="forgot">
									<a href="forgot_password.php" rel="forgot_password" class="forgot linkform">Forgot your password?</a>
								</p>
                                <p class="login button"> 
                                    <input type="submit" name="log1" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
                                <br>
								<br>
							<?php
if(isset($_POST['log1']))
{
	$user=$_POST['username'];
	$pass=$_POST['password'];
	require "samkush.php";
	$flag=1;
	$str="select * from samkush_login";
	$result=mysqli_query($con,$str);
	while($row=mysqli_fetch_array($result))
	{
		if($row['email']==$user && $row['password']==$pass)
		{
			if($row['code']=='0')
			{
				$_SESSION['s_var']=0;                 //0 for admin
				$_SESSION['uid']=$row[0];
				$flag=0;
				header("location:../admin/admin.php");
			}
			else if($row['code']=='1')              //1 for user
			{
				$_SESSION['s_var']=1;
				$flag=0;
				$_SESSION['uid']=$row[0];
				header("location:../cart.php");
			}
		}
	}
	if($flag==1)
	{
		echo '<font color="red"><u>INVALID USER</u></font>';
	}
}
?>
</p>
</form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="index.php" method="post" autocomplete="on"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Full Name</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordconfirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
								<p> 
                                    <input id="code" name="code" readonly type="hidden" value="1">
                                </p>
                                <p class="signin button"> 
									<input type="submit" name="sign1" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
									<br>
									<br>
							    <?php
if(isset($_POST['sign1']))
{
	$user=$_POST['usernamesignup'];
	$email=$_POST['emailsignup'];
	$pass=$_POST['passwordsignup'];
	$repass=$_POST['passwordconfirm'];
	$code=$_POST['code'];
	$cid=$_SESSION['cid'];
	require "samkush.php";
	$flag=1;
	if($pass==$repass)
	{
		$str="insert into samkush_login values('','$user','$email','$pass','guest','$code','77',CURDATE(),CURTIME(),NOW())";
		mysqli_query($con,$str);
		//echo $str;
	}
	else
		echo '<font color="red"><u>PLEASE CHECK YOUR PASSWORD</u></font>';
}
?>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
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