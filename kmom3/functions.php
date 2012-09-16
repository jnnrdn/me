<!DOCTYPE html>
<html lang="sv"> 
<head>
  <meta charset="utf-8">
  <title>php20</title>
</head>
<body>
<h1>Olika funktioner i PHP</h1>

<?php
  error_reporting(-1);
?>
<?php
  function str_shuffle_unicode($str) {
    $tmp = preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
    shuffle($tmp);
    return join("", $tmp);
}
?>
<?php
  echo "Roten ur 9 är " . sqrt(9) . "<br />"; // 3
  echo "Pi är: " . pi() . "<br />"; // 3.1415926535898

  // Sets default timezone to use
  date_default_timezone_set('Europe/Stockholm');
  echo "<h3>date</h3>" . date('Y-m-d') . "<br />";

  echo "<h3>str_rot13</h3>" . str_rot13('Testar str_rot13') . "<br />";
  echo "<h3>md5</h3>" . md5('Testar str_rot13') . "<br />";
  echo "<h3>str_shuffle</h3>" . str_shuffle_unicode('Testar att öva på str_shuffle') . "<br />";
  echo "<h3>strlen</h3>" . strlen('Testar strlen') . "<br />";
  echo "<h3>Beräkna längden av strängen 'åäö' (mb_strlen)</h3>" . mb_strlen('åäö', 'utf-8') . "<br />";

?>

<hr>
    <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>
    <a href="viewsource.php?dir=incl/guide/php20&amp;file=mall.php">Källkod</a>
</body>
</html>