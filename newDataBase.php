	<meta charset="UTF-8">
	<meta name="Ćwiczenia - mySQL - Kino - 3" content="ćwiczenia, mySQL, kino">	
	<title>						
	Ćwiczenia - mySQL - Kino - 3
	</title>

<?php

$servername = "localhost";
$username = "root";
$password = "cwiczenia";


$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
	die("Połączenie nieudane. Błąd: " . $conn->connect_error);
}
else {
	echo "Połączenie nawiązane :)", '<br>', '<br>';
};

$conn -> query ('CREATE database liquidy');
$conn -> query ('SET NAMES utf8');

$baseName = "liquidy";

$sql = "CREATE DATABASE liquidy";
if ($conn->query($sql) === TRUE) {
	echo "Baza danych " .$baseName. "utworzona :)";
} else {
	echo "Coś poszło nie tak podczas tworzenia bazy :(" . $conn->error;
};

$conn -> query ('SET NAMES utf8');


$conn = new mysqli($servername, $username, $password, $baseName);
if ($conn->connect_error) {
	die("Połączenie nieudane. Błąd: " . $conn->connect_error);
}
else {
	echo "Połączenie z bazą ", '<strong>', $baseName, '</strong>', " udane :)", '<br>', '<br>';
};

?>