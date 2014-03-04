<?php
ob_start();

session_start();
require "samkush.php";

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
ob_flush();

?>


