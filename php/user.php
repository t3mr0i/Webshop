<!doctype html>
<?php
require('setupDB.php');

include('setupDB.php');

	$nname = $_POST['name'];
	$vorname = $_POST['vorname'];
	$email = $_POST['email'];
	$passwort = $_POST['passwort'];
	
	echo 'console.log("HI")';

	$sql = "INSERT INTO nutzer (nname, vorname, email, passwort) VALUES ('$nname', '$vorname', '$email', '$passwort');";
	mysqli_query($con, $sql);

?>