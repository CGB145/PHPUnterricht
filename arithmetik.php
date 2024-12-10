<?php // <- Processing instruction
# Variablendeklaration
$title = 'Arithmetik';

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

    <h2>Arithmetische Operatoren</h2>
    <ul>
        <li>+ Addition</li>
        <li>- Subtraktion</li>
        <li>* Multiplikaton</li>
        <li>/ Divison</li>
        <li>% Modulo (Restwertberechnung: 10 % 3 = 1)</li>
    </ul>
    <h2>Shortcuts</h2>

    <ul>
        <li>Postinkrement: $i++ | $i = $i + 1</li>
        <li>Postdekrement: $i-- | $i = $i - 1</li>
        <li>Präinkrement: ++$i | $i = ($i + 1)</li>
        <li>Prädekrement: --$i | $i = ($i - 1)</li>
    </ul>
    <p>Beispiele</p>

    <pre>
    <?php
        $a = 10;
        ++$a;
        echo $a;
    ?>
    </pre>
    <pre><?php
       $a = 10;
       $b = $a++;
        echo "\n\t";
        echo $b;
        echo "\n\t";
        echo $a;
    ?>
    </pre>
    
    <pre><?php
       $a = 10;
       $b = ++$a;
        echo "\n\t";
        echo $b;
        echo "\n\t";
        echo $a;
    ?>
    </pre>    
</body>

</html>
