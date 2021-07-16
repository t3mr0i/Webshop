<!doctype html>
<?php
require('setupDB.php');
include('setupDB.php');

	$aname = $_POST['name'];
	$preis = $_POST['preis'];
	$beschreibung = $_POST['beschreibung'];
	$bild = $_POST['bild'];
	

	$sql = "INSERT INTO artikel (nname, vorname, email, passwort) VALUES ('name', 'preis', 'beschreibung', 'bild');";
	mysql_query($con, $sql);
	
?>