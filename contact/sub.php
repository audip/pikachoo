<?php
ob_start();

session_start();
require "samkush.php";
?>
<html>
<body>

	<center>
		<h2>404 Error!! Sorry !! Cannot Find Any Page</h2>
		<a href="/">Continue to Home Page</a>
	</center>

<?php
	if(!isset($_POST['c5']))
		header("location:index.php");
	else
		{
                $subject=$_POST['c1'];
		$from=$_POST['c2'];
		$mobile=$_POST['c3'];
		$message=$_POST['c4'];
         
		$str="insert into samkush_info values('$subject','$from','$mobile','$message')";
		mysqli_query($con,$str);

		$to="info@pikachoo.in";
		$headers="From:" . $from;
		mail($to,$subject,$message,$headers);
		echo "<center><h2>Mail Sent.</h2></center>";
	        header("Refresh:3;index.php");
                }
?>
</body>
</html>
<?php	
ob_flush();

?>