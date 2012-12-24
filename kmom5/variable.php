<!DOCTYPE html>
<html lang="sv"> 
<head>
  <meta charset="utf-8">
  <title>php20</title>
</head>
<body>
<h1>Variabler och typer i PHP</h1>

<?php
  error_reporting(-1);
?>

<?php
$heltal1 = 42;
$heltal2 = 1337;

$flyttal1 = 3.141592654;
$flyttal2 = 1.4142;

$text1 = "Jag kan 10 decimaler på pi: "; 
$text2 = "Roten ur 2 är: ";
$text3 = "Svaret på frågan om allting och universum?";
$text4 = "Elit ";

$sant = true;
$falskt = false;
$inget = null;

echo "<p>", $text1, $flyttal1, "</p>";    // Separated by ,
echo "<p>" . $text2 . $flyttal2 . "</p>"; // Concatinating with . 
echo "<p>$text3 $heltal1</p>";            // Print out variables within "
echo "<p>{$text4}{$heltal1}</p>";         // Separate variables within string with {}

echo "<p>", $sant, $falskt, $inget, "</p>";

echo "<pre>";
var_dump($heltal1);
var_dump($flyttal1);
var_dump($text1);
var_dump($sant);
var_dump($inget);
echo "</pre>";
?>

<hr>
    <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>
    <a href="viewsource.php?dir=incl/guide/php20&amp;file=mall.php">Källkod</a>
</body>
</html>