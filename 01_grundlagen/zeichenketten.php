<?php

$title = "Strings";

?>

<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> <?php echo $title ?>  </title>
	</head>
	
	<body>

		<h1> <?php echo $title ?> </h1>	

		<?php
		$name = 'Nick'; // Statische Zeichenketten
		echo '<h2> Hallo $name </h2>';
		print "<h2> Hallo $name </h2>";
		$name = "yoa";
		echo '<h2> Hallo ' . $name . '</h2>';
	
		define ("NACHNAME", "Friedl");

		echo "<h2> Hallo $name NACHNAME </h2>\n";
		echo "<h2> Hallo $name ". NACHNAME ."</h2>";

		echo "<table> <td> $title </td> </table>";

		echo <<<TABELLE
		 <table> <td> $title </td> </table>

		TABELLE;


		?>

		<h2> Funktionen </h2>
		<dl>
			<dt>Trim</dt>
			<dd>Entfernt Leerzeichen(Whitespaces, Umbruch, Tab, auch "\0" Null byte Zeichen );
			<?php
				$testVar = '  Hallo Welt';
			?>;
				<pre>
					|Aus<?php echo $testVar ?>|wird|<?php echo trim($testVar)?>|
				</pre>
			</dd>
			<dt>strip_tags</dt>
			<dd>
				Entfernt alle HTML-Tags aus einer Zeichenkette 
				<?php
					$testVar = '<h1>Ich brauche einen Filter</h1>';
					echo $testVar;
				?>
				wird zu
				<pre><?php echo strip_tags($testVar);?></pre>

			</dd>
			<dt>Htmlentities</dt>
			<dd>
				Wandelt alle geeigneten Zeichen in HTML-Entitäten um <br>
				<?php 
					$testVar = "Ein 'Anführungszeichen ist <b>Fett</b>";
				?> 
				<?php echo $testVar; ?>
				<br>
				<?php echo htmlentities($testVar); ?>
				
			</dd>
			<dt>Htmlspecialchars</dt>
			<dd>
				Wandelt " ' & < > um <br>
				<?php echo htmlspecialchars($testVar); ?>
			</dd>
			<dt>Zeichenkettenlänge</dt>
			<dd>
				<?php 
					$testVar = "Führungspersönlichkeit";
					echo strlen($testVar) . ' Zeichen <br>';
					echo mb_strlen($testVar) . ' Zeichen';
				?>
			</dd>
		</dl>

	</body>

</html>
