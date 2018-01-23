<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dental Clinic Register page</title>
<link href="styles/registerpagestyle.css" rel="stylesheet" type="text/css" />
</head>						

<?php session_start(); ?>

<body>

	<div id="registerBox">
    <h1><a href="registerprocess.php">Dental Clinic</a></h1>
    </div>
	<form action="registerprocess.php" method="post">
		<label>USERNAME:</label>
			<input type="text" name="regUsername" />
		<label>PASSWORD:</label>
			<input type="password" name="regPassword"  />
        <label>FIRST NAME:</label>   
            <input type="text" name="regFname"  />
        <label>LAST NAME:</label>
        	<input type="text" name="regLname" />
        <label>ADDRESS:</label>
        	<input type="text" name="regAddress" />
        <label>PHONE NUMBER:</label>
        	<input type="text" name="regPhone" />            
			<input type="submit" value="SUBMIT" name="submit" class="submit" />
	</form>
    
<?php 

if (isset($_SESSION['message']) && !empty($_SESSION['message']))
{
	echo $_SESSION['message'];
	
	$_SESSION['message'] = NULL;
}
?>

</body>
</html>
