<?php 
  include("incl/config.php"); 

  $title = "Min Me-sida om mig själv"; 
  $pageId = "me";

  // Define style thats specific for this page
  $pageStyle = '
  div#content article figure { 
   -webkit-border-radius: 10px;
   -moz-border-radius: 10px;
   border-radius: 10px;
   border-color:silver;
   -moz-box-shadow: 10px 10px 5px silver;
   -webkit-box-shadow: 10px 10px 5px silver;
   box-shadow: 5px 5px 10px silver;
  }
  ';

  include("incl/header.php"); 
?>
<div id="content">
  <h1>Visa innehållet i <code>$_GET</code></h1>
  <p>Du anropade sidan med följande querystring:
    <code><?php echo htmlentities($_SERVER['QUERY_STRING']); ?></code>
  </p>
  <p>
    <code>$_GET</code> innehåller följande:
  </p>
  <pre><?php print_r($_GET); ?></pre>
</div>
<?php include("incl/footer.php"); ?>