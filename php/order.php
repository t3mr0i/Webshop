<!doctype html>
<?php

require('setupDB.php');
include('setupDB.php');

	$nname = $_POST['nutzername'];
	$aname = $_POST['name'];
	$anzahl = $_POST['anzahl'];
	$bestelltan = $_POST['bestelldatum'];
	

	$sql = "INSERT INTO bestellung (nname, aname, anzahl, bestelltan) VALUES ('$nname', '$aname', '$anzahl', '$bestelltan'  );";
	mysqli_query($con, $sql);
	
?>
?>