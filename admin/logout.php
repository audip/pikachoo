<?php
	ob_start();
?>

<?php
	session_start();
	session_destroy();
	header("location:../index3.php");
?>

<?php
	ob_flush();
?>