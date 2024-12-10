<?php // <- Processing instruction
# Variablendeklaration

$title = 'Bedingungen if-else switch-case';

// Verkettung des Null-coalesce Operators
$name = $_POST['nachname'] ?? $_COOKIE['name'] ?? 'Anonymus';

// In Langschrift:
if(isset($_POST['nachname']) && !is_null($_POST['nachname'])) {
    
    $name = $_POST['nachname'];
    
} else if(isset($_COOKIE['name']) && !is_null($_COOKIE['name'])) {
    
    $name = $_COOKIE['name'];
    
} else {
    
    $name = 'Anonymus';
    
}

setcookie('name', $name);

if(isset($_COOKIE['counter']) && !is_null($_COOKIE['counter'])) {
    
    $counter = $_COOKIE['counter'];
    
} else {
    $counter = 0;
    
}

// Alternative: Ternärer (triple) Operator
        //    Bedingung                         TRUE        FALSE    
$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0; 

// Seit PHP 7 gibt es den Null-coalesce Operator
# ist $_COOKIE['counter'] gesetzt und nicht NULL?
$counter = $_COOKIE['counter'] ?? 0;

$counter++;

setcookie('counter', $counter);
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
    <h2>
        <?php
        if($name != '') {
            echo 'Hallo ' . $name . ', ';
        }
        ?>
        <?php
        echo 'Ihr ' . $counter . '. Aufruf dieser Seite';
        ?>
    </h2>
    
    <form action="bedingungen.php" method="post">
    
        <fieldset>
            <legend>Namen erinnern?</legend>
            <input type="text" name="nachname" value="" id="nachname">
            <label for="nachname">Ihr Nachname</label>
            <input type="submit" name="ok" value="OK">    
        </fieldset>
    
    </form>
    
    <h2>
    <?php
    // Die Funktion isset($var) prüft ob eine Variable oder ein Index in einem Array gesetzt ist    
    if(isset($_GET['size'])) {
        
        echo 'Sie haben Größe ' . $_GET['size'] . ' gewählt';
        
    } else {
        
        echo 'Bitte wählen Sie eine Größe aus';
        
    }   
    ?>        
    </h2>
    
    <nav>
        <ul>
        
<?php
   $sizes = array(
   'XS', 'S', 'M', 'L', 'XL'
   );         
    foreach($sizes as $size) {
        
        echo "<li><a href=\"bedingungen.php?size=$size\">$size</a></li>";
        
    }
            
?>            
        
        </ul>
    
    </nav>
    <h3>Switch-Case Bedinungen bei einfachen Vergleichen einsetzen!<br>
<?php
// Ist der Index size überhaupt in $_GET vorhanden
if(isset($_GET['size'])) {
    
    switch($_GET['size']) {
            
        case 'XS':
            echo 'Der ganz schmale Typ';
         break;   
        
        case 'S':
            echo 'Das schmale Hemd gibt es im 1. Stock';
        break;
            
        case 'M':
            
        case 'L':
            echo 'Die Normalgrößen sind wie immer ausverkauft';
        break;    
        
        case 'XL':
            echo 'Ein bisschen runder um die Hüfte?';
        break;    
            
        default:
            echo 'Unbekannte Größe';
        break;
    }
    
    
}        

?>        
    </h3>
</body>
</html>