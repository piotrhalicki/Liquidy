<!DOCTYPE html>

<html lang="pl-PL">
<meta charset="UTF-8">

<head>
	<meta charset="UTF-8">
	<meta name="Baza Liquidów" content="ćwiczenia, mySQL, baza liqidów">	
	<title>						
	Baza liquidów
	</title>
</head>

<body>

	<h1>
	<strong><em>Baza liquidów</em></strong>
	</h1>
	
	<br>
<hr>
	<br>

<?php

$servername = "localhost";
$username = "root";
$password = "cwiczenia";


$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
	die("Połączenie nieudane. Błąd: " . $conn->connect_error);
	echo '<br>'; // to chyba nie zostanie wyświetlone...
}
else {
	echo '<p>', "Połączenie nawiązane :)", '</p>';
};

$conn -> query ('CREATE database liquidy');
$conn -> query ('SET NAMES utf8');

$baseName = "liquidy";

$sql = "CREATE DATABASE liquidy";
if ($conn->query($sql) === TRUE) {
	echo "Baza danych " .$baseName. "utworzona :)", '<br>';
} else {
	echo '<p>', "Coś poszło nie tak podczas tworzenia bazy :( ", '<br>' .$conn->error, '</p>';
};

$conn -> query ('SET NAMES utf8');


$conn = new mysqli($servername, $username, $password, $baseName);
if ($conn->connect_error) {
	die("Połączenie nieudane. Błąd: " . $conn->connect_error);
	echo '<br>'; // to chyba nie zostanie wyświetlone...
}
else {
	echo '<p>', "Połączenie z bazą ", '<strong>', $baseName, '</strong>', " udane :)", '</p>';
};

?>
	
	<br>
<hr>
	<br>
	
	</body>
	</html>