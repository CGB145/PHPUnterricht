<?php
$title = "Selam";
?>

<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> <?php echo $title ?>  </title>
	</head>
	
	<body>
		<h1><?php echo $title ?></h1>
		<h2>Numerisch indizierte Arrays</h2>

		<?php 
		$kenntnisse = array('php','HTML');
		$kenntnisse = ['PHP', 'HTML'];
		$kenntnisse[]='JS';
		$kenntnisse[]='CSS';
		$kenntnisse[2] = 'SQL';
		echo $kenntnisse[0]. '<br>';
		#echo $kenntnisse;
		echo '<pre>';
		print_r($kenntnisse);
		var_dump($kenntnisse);
		echo '</pre>';
		$anzahl = count($kenntnisse);
		$anzahl = sizeof($kenntnisse);
		echo "<p>$anzahl Elemente \$kenntnisse vorhanden</p>";
	       	?>
		
		<h2>Assoziativ indizierte Arrays</h2>
		<p>Habeen einen Index der aus einem String besteht. Diese Bezeichner sind <br>
		nicht einfach nur A,B oder C, sondern sagen etwas aus, deswegen nennt man size <br>
		assoziativ(begrifflich, ich kann mir ein Bild davon machen). </p>

		<p>Beispiel: Ein Index 0 sagt mir gar nichts. Ein Index vorname sagt mir, <br>
       		was da gespeichert wurde</p>
		<?php 
		$person = array(
			'vorname' => 'Ludwig',
			'nachname' => 'Zwo',
		);

		$person['wohnort'] = 'Neuschwanstein';
		$person['nachname'] = 'Da narrische Kini';
		echo '<pre>';
		print_r($person);
		echo '</pre>';
		?>

		
		
	</body>	

</html>
