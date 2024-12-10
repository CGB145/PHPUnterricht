<?php // <- Processing instruction
# Variablendeklaration
$title = 'Datentypen';

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
    <div>
        <h2>String</h2>
        <p><?php 
            $text = 'Hallo Welt';    
            echo gettype($text) ?>
        </p>
        
        <h2>Integer / Ganzzahl</h2>
        <p><?php 
            $zahl = 10;    
            echo gettype($zahl) ?>
        </p>   
        
        <h2>Float / Fließkommazahl</h2>
        <p><?php 
            $zahl = 10.5;    
            echo gettype($zahl) ?>
        </p>   
        
        <h2>Boolean</h2>
        <p><?php 
            $bool = true;    
            echo gettype($bool) ?>
        </p>    
        
        <h2>Null</h2>
         <p><?php 
            $lust = null;    
            echo gettype($lust) ?>
        </p>       
        
        
        <h2>Array / Liste</h2>
         <p><?php 
            $array = ['PHP', 'HTML'];    
            echo gettype($array) ?>
        </p>          
        
        <h2>Object</h2>
        <p><?php 
            $date = new DateTime();
            
            echo gettype($date);
            
            ?>
        </p>
        <p>
            PHP Objekte benutzen den -> Operator für Methodenaufrufe und Eigenschaften: 
            <?php echo $date->format('d.m.Y H:i:s') ?>
        </p>
        <h2>Resource</h2>
        
        <p>Resourcen sind Quellen, Streams. Das kann z.B. das Öffnen einer Datei auf der Festplatte sein</p>
        <p>
        <?php
        $file = fopen('../vorlage.php', 'r');
        echo gettype($file);    
        ?>
        </p>
        
    </div>
</body>
</html>