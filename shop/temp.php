<?php
	ob_start();
	session_start();
	require "samkush.php";
?>
<html>
<body>
<?php
	
	//require "samkush.php";
	
	$item_id=$_POST['itemid'];
	$quantity=$_POST['qty'];
	$cr=$_SESSION['tuid'];
	echo $cr;
	echo '<br>';
	
	if($quantity<0 || $quantity>=20)
	{
		header("location:checkqty.php");
	}
	else
	{
	echo $item_id;
	echo $quantity;
	/**if(isset($_POST['addtocart']))
	{**/
		if(isset($_SESSION['s_var']))
		{
			$uid=$_SESSION['uid'];
			$str="select username from samkush_login where userid='$uid'";
			$res=mysqli_query($con,$str);
			$r=mysqli_fetch_array($res);
		}
		else
		{
			if(!isset($_SESSION['tuid']))
			{
				$stri="insert into samkush_guest values('guest','','$item_id')";
				mysqli_query($con,$stri);
				$string="select name,code from samkush_guest where itemid='$item_id'";
				echo $string;
				echo '<br>';
				$newresult=mysqli_query($con,$string);
				$newrow=mysqli_fetch_array($newresult);
				
				$_SESSION['tuid']=$newrow[1];
				$uid=$_SESSION['tuid'];
				$str="update samkush_guest set itemid='7777' where code='$newrow[1]'";
				echo $str;
				mysqli_query($con,$str);
				
			}
			else
			{
				$uid=$_SESSION['tuid'];
			}
			
		}	
	$str1="select item_name,item_price from samkush_item where item_id='$item_id'";
		//echo $str;
		$result=mysqli_query($con,$str1);
		$row=mysqli_fetch_array($result);
		$total=$row[1]*$quantity;
	
		/**$str2="select billno,item_name,quantity,total from samkush_bill where userid='$uid'";
		$res1=mysqli_query($con,$str);
		while($ro=mysqli_fetch_array($res1))
		{**/
	
		echo $uid;
		$str3="insert into samkush_bill values('','$uid','$item_id','$row[0]','$quantity','$total')";
		$result1=mysqli_query($con,$str3);
	       
		$str4="select billno,item_name,quantity,total from samkush_bill where userid='$uid'";
		$result3=mysqli_query($con,$str4);
		while($row3=mysqli_fetch_array($result3))
		{
			$str5="insert into samkush_billcopy values('$row3[0]','$uid','$item_id','$row[0]','$quantity','$total')";
			$result1=mysqli_query($con,$str5);
	
			/**$str5="select item_name,quantity,total from samkush_bill where userid='$uid'";
			$result5=mysqli_query($con,$str5);
			$row1=mysqli_fetch_array($result5))**/
	
			echo '<center><table width="400" border="1">
				<tr>
					<td>'.$row3['1'].'</td><td>'.$row3['2'].'</td><td>'.$row3['3'].'</td><td><a href="delete_1.php?billno='.$row3[0].'">Delete</a></td></tr></table>';
		
		}
		header("location:cart.php");
	}
	


?>
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