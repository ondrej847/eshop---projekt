
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrace</title>
</head>
<body>
<h2>Registrační formulář</h2>
<form action="register.php" method="post">

<label for="jmeno">Jméno:</label><br>
<input type="text" id="jmeno" name="jmeno" required><br>

<label for="prijmeni">Příjmení:</label><br>
<input type="text" id="prijmeni" name="prijmeni" required><br>

<label for="email">E-mail:</label><br>
<input type="email" id="email" name="email" required><br>


<label for="password">Heslo:</label><br>
<input type="password" id="password" name="password" required><br>

<label for="telefon">Telefon:</label><br>
<input type="tel" id="telefon" name="telefon" required><br>


<label for="ulice">Ulice:</label><br>
<input type="text" id="ulice" name="ulice" required><br>

<label for="cislo_popisne">Číslo popisné:</label><br>
<input type="text" id="cislo_popisne" name="cislo_popisne" required><br>


<label for="mesto">Město:</label><br>
<input type="text" id="mesto" name="mesto" required><br>

<label for="psc">PSČ:</label><br>
<input type="text" id="psc" name="psc" required><br>

<br>
<input type="submit" value="Registrovat">

</form>


</body>

<?php
require_once "header.php";
?>

<?php
require_once "footer.php";
?>