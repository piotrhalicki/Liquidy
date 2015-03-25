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

require_once 'connection.php';

$sql = "CREATE TABLE Producent (
			id int AUTO_INCREMENT NOT NULL,
 			name varchar(50) NOT NULL,
 			PRIMARY KEY (id))";

$result = $conn->query($sql);

if ($result === TRUE) {
	echo "Tabela Producent została utworzona";
}
else {
	echo '<strong>', "Coś poszło nie tak: ", '</strong>', '<br>' .$conn->error;
	echo '<br>';
};

echo '<br>';


$sql = "CREATE TABLE Smak (
			id int AUTO_INCREMENT NOT NULL,
 			name varchar(50) NOT NULL,
 			PRIMARY KEY (id))";

$result = $conn->query($sql);

if ($result === TRUE) {
	echo "Tabela Smak została utworzona";
}
else {
	echo '<strong>', "Coś poszło nie tak: ", '</strong>', '<br>' .$conn->error;
	echo '<br>';
};

echo '<br>';


$sql = "CREATE TABLE Pojemnosc (
			id int AUTO_INCREMENT NOT NULL,
 			ml tinyint NOT NULL,
 			PRIMARY KEY (id))";

$result = $conn->query($sql);

if ($result === TRUE) {
	echo "Tabela Pojemnosc została utworzona";
}
else {
	echo '<strong>', "Coś poszło nie tak: ", '</strong>', '<br>' .$conn->error;
	echo '<br>';
};

echo '<br>';


$sql = "CREATE TABLE Moc (
			id int AUTO_INCREMENT NOT NULL,
 			mg tinyint NOT NULL,
 			PRIMARY KEY (id))";

$result = $conn->query($sql);

if ($result === TRUE) {
	echo "Tabela Moc została utworzona";
}
else {
	echo '<strong>', "Coś poszło nie tak: ", '</strong>', '<br>' .$conn->error;
	echo '<br>';
};

echo '<br>';

$sql = "CREATE TABLE Termin_waznosci (
			id int AUTO_INCREMENT NOT NULL,
 			data date NOT NULL,
 			PRIMARY KEY (id))";

$result = $conn->query($sql);

if ($result === TRUE) {
	echo "Tabela Termin waznosci została utworzona";
}
else {
	echo '<strong>', "Coś poszło nie tak: ", '</strong>', '<br>' .$conn->error;
	echo '<br>';
};

echo '<br>';

$sql = "CREATE TABLE Opinia (
			id int AUTO_INCREMENT NOT NULL,
 			opinia varchar(255) NOT NULL,
 			PRIMARY KEY (id))";

$result = $conn->query($sql);

if ($result === TRUE) {
	echo "Tabela Opinia została utworzona";
}
else {
	echo '<strong>', "Coś poszło nie tak: ", '</strong>', '<br>' .$conn->error;
	echo '<br>';
};

$conn->close(); // zamykanie tabeli ZAWSZE na końcu - to logiczne!
$conn = null; 	// zamykanie tabeli ZAWSZE na końcu - to logiczne!

?>

</body>
</html>