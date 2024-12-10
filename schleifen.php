<?php // <- Processing instruction
# Variablendeklaration
$title = 'Schleifen';

/* ENDE Processing 
instruction */ ?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>

<body>
    <h1><?php print $title; ?></h1>
    <h2>For-Schleife (Zählschleife)</h2>
    <table border="1">
    
<?php
// Äußere Schleife         
// Initialisierung 1x    Abbruchbedingung     Verändern des Zählers
for($i = 1;             $i <= 10;               $i++) {
    
    echo '<tr>';
    // Innere Schleife verschachtelt: Anderer Zähler!
    for($j = 1; $j <= 10; $j++) {
        
        echo '<td>' . ($i * $j) . '</td>';
        
    }
    
    echo '</tr>';
}        
        
?>     
    
    </table>
    
    <h2>While-Schleife</h2>
    <?php
    $kenntnisse = ['PHP', 'HTML', 'CSS'];
    
    $anzahlKenntnisse = count($kenntnisse);
      
    $i = 0; // Initialiserung des Zählers
                # Abbruchbedingung
    while($i < $anzahlKenntnisse) { // Kopfgesteuert
        
        echo "<p>$i. $kenntnisse[$i]</p>";
        
        $i++; // Veränderung des Zählers
    }    
      
    // Alternative:
    for($i = 0; $i < $anzahlKenntnisse; $i++) { // Kopfgesteuert
        
         echo "<p>$i. $kenntnisse[$i]</p>";
        
    }
    
    ?>
    <h3>Do-while Schleife</h3>
    <?php
    // Ziehung der Lottozahlen 6 Zahlen
    $lottoZahlen = []; // Sammelbecken für die Gewinnzahlen
    
    do {
        
        // Zufallszahl ermitteln
        $zahl = rand(1, 49);
        
        // Test, ob die Zufallszahl nicht! in $lottoZahlen vorkommt
        if(!in_array($zahl, $lottoZahlen)) {
            
            // Speichern in $lottoZahlen
            $lottoZahlen[] = $zahl;            
            
        }
        
    } while(count($lottoZahlen) < 6); // Fußgesteuerte Schleife
    
    // Ausgabe:
    echo '<p>Glückszahlen: ' . implode(', ', $lottoZahlen) . '</p>';
    
    ?>
    
    <h2>Foreach-Schleife</h2>
    <?php
   $person = array(
        'vorname' => 'Ludwig',
        'nachname' => 'Zwo',
        'wohnort' => 'Neuschwanstein'
    );
    
    /* Funzt nicht!
    for($i = 0; $i < count($person); $i++) {
        
        echo "<p>$person[$i]</p>";
        
    }*/
    
    // foreach ist geeignet assoziative (aber auch numerische!) Arrays zu durchlaufen
    
    //     Array   alias Wert des Elements (frei wählbarer Name)
    foreach($person as $wert) {
        
        echo "<p>$wert</p>";
        
    }
    
    //      Array  alias  Index        Wert des Elements 
    foreach($person as $schluessel => $wert) {
        
        echo "<p>$wert($schluessel)</p>";
        
    }
    ?>
    <h2>Mehrdimensionale Arrays ausgeben</h2>
    <?php
    $personen = array(
        // 0
        [
            'vorname' => 'James',
            'nachname' => 'Blonde',
            'wohnort' => 'London'
        ],
        // 1
        [
            'vorname' => 'Karl',
            'nachname' => 'Marx',
            'wohnort' => 'Trier'
        ],
        // 2
        $person
    
    );
    ?>
    <table border="1">
        <thead>
            <tr>
<?php
    foreach($personen[0] as $key => $value) {
            #  Ersten Buchstaben Großbuchstabe
        echo '<th>' . ucfirst($key) . '</th>';
        
    }            
?>                
            </tr>
        </thead>
        
        <tfoot>
            <tr>
            <?php
            $anzahlSpalten = count($personen[0]);  
            ?>    
                <td colspan="<?php echo $anzahlSpalten ?>">&copy; Die Medienfuzzis</td>
            
            </tr>
        
        </tfoot>
        
        <tbody>
    <?php
    $anzahlPersonen = count($personen);
        
    for($i = 0; $i < $anzahlPersonen; $i++) {
        
        echo '<tr>';
        
        foreach($personen[$i] as $data) {
            
            echo "<td>$data</td>";
            
        }       
        
        echo '</tr>';
        
    }    
        
    // Alternative:
    foreach($personen as $datensatz) {
        
        echo '<tr>';
        
        foreach($datensatz as $data) {
            
            echo "<td>$data</td>";
            
        }
        
        echo '</tr>';
        
    }                 
                    
        
    ?>    
        </tbody>    
    </table>
    
</body>
</html>