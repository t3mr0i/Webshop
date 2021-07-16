<!doctype html>
<?php
require('setupDB.php');
include('setupDB.php');

	$aname = $_POST['name'];
	$preis = $_POST['preis'];
	$beschreibung = $_POST['beschreibung'];
	

	$sql = "INSERT INTO artikel (aname, preis, beschreibung) VALUES ('$aname', '$preis', '$beschreibung', );";
	mysqli_query($con, $sql);
	
?>