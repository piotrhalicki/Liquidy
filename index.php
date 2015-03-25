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

?>

	<br>
<hr>
	<br>

<p>Jeśli powyższy komunikat wskazuje błąd, być może należy utworzyć bazę danych, aby to zrobić kliknij: 	
<a href="newDataBase.php">Stwórz bazę danych "liquidy"</a></p>

	<br>
<hr>
	<br>
		
		<p>Stwórz tabele: Producent, Smak, Pojemnosc, Moc, Data, Opinia
	<a href="newTables.php">Stwórz tabele w bazie "liquidy"</a></p>
		
	<br>
<hr>
	<br>

<fieldset>
	<legend><strong><em>Dodawanie danych do bazy "liquidy"</em></strong></legend>
		<form action="index.php" method="POST">
			<p><label>Producent:</label><br>
				<input type="text" name="producent"></p> 	
			<p><label>Smak:</label><br>	
				<input type="text" name="smak"></p>
			<p><label>Pojemność:</label><br>	
				<input type="text" name="pojemnosc"></p>
			<p><label>Moc:</label><br>	
				<input type="text" name="moc"></p>
			<p><label>Termin ważności:</label><br>	
				<input type="text" name="data" placeholder="RRRR-MM-DD"></p>
			<p><label>Opinia:</label><br>
			<textarea name="opinia" cols="50" rows="10" placeholder="Napisz parę słów o liquidzie..."></textarea></p>
			<p><button type="submit" name="submit" value="liquidy">Wyślij</button></p>
		</form>
</fieldset>	


</body>
</html>