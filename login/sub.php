<?php
/*ob_start();

session_start();
require "samkush.php";



$to="info@pikachoo.in";
$headers="From:" . $from;
mail($to,$subject,$message,$headers);
echo "<center><h2>Mail Sent.</h2></center>";
ob_flush();

?>

*/
 if(isset($_POST['pass']))
	   {
	    require "samkush.php";
		
		
		
		
       $t=$_POST['email'];
	   $str1="select password,username from samkush_login where email='$t'";
	   $res=mysqli_query($con,$str1);
	   $row=mysqli_fetch_array($res);
	   
	 $message="Hello ".$row[1]."...!! Your Passoword is ".$row[0]."..!!";


$to="$t";
$headers="From:info@pikachoo.in";
mail($to,$subject,$message,$headers);
echo '<br><br><font face="comic sans ms" color="red"><h2><u>MAIL SENT..!!Please Check your INBOX to LOGIN AGAIN..!!</u></h2></font><br><br>';
}
echo '<a href="index.php"><font face="comic sans ms"><h3><u>Click here to LOGIN..!!</u></h3></font></a>';
ob_flush();

?>