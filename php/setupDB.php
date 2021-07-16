<!DOCTYPE html>
<html>
<body>
<?php
    $servername = "localhost";
	$user = "root";
	$pw = "";
	$db = "Webshop";

	
	$con = new mysqli($servername, $user, $pw, $db );
	
	if($con->connect_error) {
		die("Tja, da ist etwas schioef gelaufen.".$con->connect_error);
	}
	echo "connected";
	
?>
	
</body>
</html>