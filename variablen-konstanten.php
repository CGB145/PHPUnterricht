<?php // <- Processing instruction

# Interpreter befindet sich im PHP / Interpretations Mode

# Variablendeklaration im globalen Scope: $title ist nicht innerhalb einer Funktion oder Klasse deklariert (erzeugt)

// Deklaration einer Variable:
$title; // Anlegen der Variable title in der Symboltabelle angelegt

// Deklaration + Initialiserung der Variable (erste Wertzuweisung)
$title = "Variablen und Konstanten"; // PHP macht eine dynamische Speicherbereitstellung und auch eine dynamische Typisierung

// Typos sind gerne Ursache für -> Notice Undefined variable titel
// echo $titel; // Was passiert? 

// Neuzuweisung eines Werts
$title = "PHP ist klasse!";

// Neuzuweisung eines Werts
$title = "Variablen und Konstanten";

/* ENDE Processing 
instruction */ ?>
<!DOCTYPE html><!-- HTML/Text/Lese Mode -->
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>

<body>
    <h1><?php print $title; ?></h1>
    
    <h2>Variablen</h2>
    
    <p>Variablen haben einen führenden $ und folgende Zeichen sind erlaubt
    1.Stelle(min.) a-Z_ 
    2-x Stelle a-Z_0-9
        Aber kein Bindestrich!!!!
        
    </p>
    <ul>
        <li>$zwergNo.7 (ungültig)</li>
        <li>$7terzwerg (ungültig)</li>
        <li>$schnee-wittchen (ungültig)</li>
        <li>$böseSchwiegermutter (kommt drauf an, wie der Server konfiguriert ist, daher vermeiden!)</li>
        <li>§derSchoenePrinz (ungültig wg. §)</li>
        <li>$$glassarg (Gültig, da Variable-Variable)</li>
        <li>$SchlußfürHeute (Vermeiden, aber für heute Ausnahme!)</li>
    </ul>
    
    <h2>Konstanten</h2>
    
    <p>Konstanten haben keinen führenden Dollar!<br>
        Sie können nach der Erzeugung nicht mehr verändert werden, daher der Name Konstante.        
    </p>
    <p>Beispiel:</p>
    
    <p>
        <?php
        // Konstantennamen werden in GROSSBUCHSTABEN gesetzt, damit man sie besser lesen kann, keine technische Notwendigkeit
        // Bezeichner  beliebiger Datentyp als Wert hier string
        define('EMAIL', 'nf@ard.de');
        echo EMAIL;
        ?>
    
    </p>
    <p>Konstanten benutzt man dann, wenn z.B. Konfigurationen wie Datenbank-Passwörter unveränderlich zur Runtime gemacht werden sollen, also nicht andere Skripte die eingebunden werden evtl. diese Werte verändern. Konstanten haben auch das Privileg global sichtbar zu sein, d.h. diese sind im globalen Scope (Gültigkeitsbereich) aber auch im lokalen Scope (Funktionen und Klassen) sichtbar.</p>
    
    <?php
    
    
    
    // Deklaration einer Function (wie in JS)
    function doSomeOutput() {
  
        // $title ist innerhalb der Funktion (lokaler Scope) nicht sichtbar! PHP verhindert das Eindringen global definierter Variablen per default!
        $title = "Scope und Gültigkeit";
        
        // Falls ein Entwickler wirklich unbedingt auf Teufel komm raus eine globale Variable innerhalb seiner Funktion benutzen will, kann er sie sichtbar machen:
       // global $title; // Jetzt hat er die globale Variable $title quasi importiert
        
        // Allerdings kann er jetzt auch diese globale Variable verändern
        // Und das ist der Grund warum PHP den Entwickler zwingt sich
        // Gedanken zu machen, bevor er im globalen Scope rumpfuscht
        // $title = "Pfusch und Murks";
        
        return $title;
        
    }
    
    function doConstantOutput() {
        // Die Konstante hat einen globalen und einen lokalen Sichtbarkeitsbereich! Quasi überall
        // Nachdem Konstanten unveränderlich sind, sieht PHP es als gefahrlos an, diese überall sichtbar zu machen, denn sie sind ja nicht veränderbar nur lesbar!
        return EMAIL;
        
    }
    
    ?>
    
    <h3><?php
        // Aufruf der Funktion mit () <- execution
        echo doSomeOutput();
        ?></h3>
    <h3>
        <?php echo $title ?>
    </h3>
    <address>
        <?php echo doConstantOutput() ?>
    </address>
    
</body>
</html>