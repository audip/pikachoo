<?php
	ob_start();
?>


<html>
	<head>
		<title>Select Item</title>
		
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
<body bgcolor="#D8D8D8">
	<br><br>
	<center>
	<form action="viewp.php" method="POST">
		<select name="s">
			<option value="gift">Gift</option>
			<option value="cakes">Cakes</option>
			<option value="flower">Flower</option>
			<option value="bags">Bags</option>
		</select>
		<input type="submit" value="Go">
			</form>			
		<br><br>
			<div id="tab">
			<a href ="admin.php">back </a>
			<a href ="logout.php">Logout</a></div>
</body>
</html>
<?php
	ob_flush();
?>