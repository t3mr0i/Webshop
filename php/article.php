<!doctype html>
<?php
require('setupDB.php');
include('setupDB.php');

	$aname = $_POST['name'];
	$preis = $_POST['preis'];
	$beschreibung = $_POST['beschreibung'];
	$bild = $_POST['bild'];
	

	$sql = "INSERT INTO artikel (aname, preis, beschreibung, bild) VALUES ('$aname', '$preis', '$beschreibung', '$bild');";
	mysqli_query($con, $sql);
	
?>