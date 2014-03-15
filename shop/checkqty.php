<?php
	ob_start();
	session_start();
?>

<html>
	<head>
		<title>Quantity Check | Pikachoo</title>
	</head>
<body>
	<center>
		<p>Quantity is either less than 0 or its greater than 0. Please enter valid quantity ranging between 1-20.</p>
		<?php
			header("Refresh:3;index.php");
		?>
	</center>
</body>

</html>
<?php
	ob_flush();
?>