<!DOCTYPE html>
<html>
<head>
<title>Dental Polyclinic Smile </title>
<link rel="stylesheet" type="text/css" href="logStyle.css">
<meta charset="UTF-8">
</head>


	<?php

session_start();

?>
<body>
	<div id="contentF">
	<div id="content">
		<form action="checklogin.php" method="post">
		<label>USERNAME:</label>
			<input type="text" name="username" />
		<label>PASSWORD:</label>
			<input type="password" name="password"  />
			<input type="submit" value="SUBMIT" name="submit" class="submit" />
	</form>
	<?php
if (isset($_SESSION['isValidLogin']) && $_SESSION['isValidLogin'] == false) 
{
	?>
	
    <div id="badLogin">Invalid username or password!</div>
    
	<?php $_SESSION['isValidLogin'] = NULL;
} ?>

	</div>
</div>
</body>
</html>