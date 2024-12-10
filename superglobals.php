<?php 
$title = "Superglobale Arrays"; 
setcookie('nachname', 'Huber');

?>
<!DOCTYPE html>
<html lang="en">
	
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> <?php echo $title ?>  </title>
</head>
	
<body>

<h1><?php echo $title?></h1>
<h2>sind überall sichtbar, in globalen Scope (Gültigskeitbereich) und im lokalen Scope. <br>
Sie werden vom System erzeugt und zur Verfügung gestellt.</h2>
<h3>GET Variable (Steuerungsvariablen)</h3>
<p>URLs können mit einem Querystring erweitert werden, damit können Variablen und Werte <br>
mitgesendet werden, diese werden mit &amp; von einander getrennt. Die max. Datenmenge ist ca. 2kB.</p>

<?php 
echo "<pre>";
print_r($_GET);
echo "</pre>";
?>
<ul>
<li> <a href="./superglobals.php?page=home&name=Nick&age=24">Home </a></li>
<li> <a href="./superglobals.php?page=produkt">Produkt</a></li>
<li> <a href="./superglobals.php?page=impressum">Impressum</a></li>
</ul>

<h3>Post Variable</h3>
<p>Die Daten werden in einer eigenen Zeile der Anfrage verpackt und sind eben nicht sichtbar <br>
in der Adressleiste. Abhängig vom Server ist die Menge der Nutzlast (payload)2MB - 8MB gängig </p>

<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
 ?>

<form action="./superglobals.php" method="post"> 
<fieldset>
<input type"text" name="nachname" id="nn">
<label for="nn"> Nachname </label>
<br>
<input type="submit" name="ok" value="Abschicken">
</fieldset>
</form>

<?php
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
 ?>
<h3>COOKIE Daten</h3>
<p>Sind erfunden worden, damit man Daten auf dem Client speichern kann (je nach Broswer per Cookie 2-4kb). <br>
Sie sind Flachtext, damit nicht ausführbar. Gefärhlich werden sie im Kontext von Data-Mining. </p>

<h3>Server Informationen</h3>
<p>In $_SERVER stehen Informationen zum Request und zur Server-Konfiguration</p>
<pre>
<?php 
print_r($_SERVER);
?>
</pre>

<h3>FILES</h3>
<p>$_FILES mit Dateianhängen bei POST Anfrage mitschickt</p>

<h3>GLOBLAS</h3>
<p>$GLOBLAS speichert alle global definierten Variablen</p>
<p>
$text = "Hallo"; <br>
echo $GLOBLAS['text'];
</p>

<h3>SESSION</h3>
<p>$_SESSION gehört zum Session-Mechanismus, der besteht aus Cookies und Dateisystem. Auf dem Server können Daten <br>
zum User gespeichert werden. Gefunden werden diese Daten über den Session-Cookie.</p>

</body>
</html>
