<?php // <- Processing instruction
# Variablendeklaration
$title = 'Vergleichs-Logische Operatoren';

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
    <h2>Vergleichsoperatoren</h2>
    <ul>
        <li>== Einfache Gleichheit, Datentyp wird nicht verglichen</li>
        <li>=== Strikte Gleichheit, Datentyp wird mit verglichen</li>
        <li>!= Einfache Ungleichheit, Datentyp wird nicht verglichen</li>
        <li>!== Strikte Ungleichheit, Datentyp wird mit verglichen</li>
        <li> > Größer als </li>
        <li> &lt; Kleiner als </li>
        <li>&lt;= >= Kleiner, Größer gleich</li>
        <li>&lt;=> Spaceship-Operator liefert -1 bei kleiner 1 bei größer und 0 bei Gleichheit</li>
    </ul>
    <h2>Negationsoperator (NOT)</h2>
    <p>! dreht eine Aussage um: !isset() dreht die Aussage um: Ist NICHT gesetzt</p>
    
    <h2>Logische Operatoren</h2>
    
    <dl>
        <dt>Logisches UND: &amp;&amp; oder and </dt>
        <dd>Verknüpft zwei Bedingungen so, dass beide Seiten als true ausgewertet werden müssen</dd>
        
        <dt>Logisches ODER: || oder or</dt>
        <dd>Es reicht wenn eine der beiden Seiten als true ausgewertet wird. Ist die linke Bedingung schon true, wird die rechte Bedingung gar nicht mehr betrachtet</dd>
        
        <dt>Exkluviv ODER: xor</dt>
        <dd>Eine der beiden Seiten muss zu true ausgewertet werden, aber nicht beide Seiten dürfen true ergeben</dd>
    </dl>
    
</body>
</html>