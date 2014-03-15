<?php
	ob_start();
	session_start();
	require "samkush.php";
?>
<?php
if(!isset($_SESSION['s_var']))
		header("location:index.php");
	else if($_SESSION['s_var']=='1')
	{
			$uid=$_SESSION['uid'];
			$ddate=$_POST['c3'];
			$str="select sum(total) from samkush_bill where userid='$uid'";
			$res=mysqli_query($con,$str);
			//echo $res;
			$row=mysqli_fetch_array($res);
			$str1="insert into samkush_finalbill values('','$uid','$row[0]','pending','33',CURDATE(),CURTIME(),NOW(),'$ddate')";
			mysqli_query($con,$str1);
			echo $str1;
			header("location:confirm.php");
	}
	else
		header("location:index.php");
		
?>
<?php
	ob_flush();
?>