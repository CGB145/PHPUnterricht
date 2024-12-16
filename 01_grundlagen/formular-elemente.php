<?php
$title = "Formulare";
$anreden = ['frau' => 'Frau', 'herr' => 'Herr', ];

$userData = [];
$userData['anrede'] = $_POST['anrede'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> <?php echo $title ?>  </title>
	</head>
	
	<body>
		<h1>  <?php echo $title ?> </h1>
		<form action="formular-elemente.php" method="post">
			<fieldset>
				<legend>Persönliche Angaben</legend>
				<div>
					<p>Anrede auswählen</p>
					<div>
					<?php 
					foreach ($anreden as $key => $value) {
					echo <<<ANREDE
						<input type="radio" name="anrede" value="$value" id="$key">
						<label for="$key">$value</label>
					ANREDE;
					}
					?>

					</div>
				</div>
			</fieldset>
		</form>
	</body>	

</html>
