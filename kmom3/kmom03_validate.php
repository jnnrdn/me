<?php 
  include("incl/config.php"); 

  $title = "Formulär och post-metoden"; 
  $pageId = "form_post";

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
  
  <h1>Formulär och post-metoden</h1>
  <form method="post" action="?">
    <fieldset>
      <legend>Exempel på formulär med post-metoden</legend>
      <p>
        <label for="input1">Användarkonto:</label><br>
        <input id="input1" class="text" type="text" name="account">
      </p>
      <p>
        <label for="input2">Lösenord:</label><br>
        <input id="input2" class="text" type="password" name="password">
      </p>
      <p>
        <input type="submit" name="doLogin" value="Login">
      </p>

      
    </fieldset>

  </form>

  <h1>Visa innehållet i <code>$_POST</code></h1>
  <p>Du anropade sidan med följande querystring:
    <code><?php echo htmlentities($_SERVER['QUERY_STRING']); ?></code>
  </p>
  <p>
    <code>$_POST</code> innehåller följande:
  </p>
  <pre><?php print_r($_POST); ?></pre>

  <?php
    if(isset($_POST['account'])) {
        echo "<p>Kontot är definerat.</p>";
    } else {
        echo "<p>Kontot är EJ definerat.</p>";
    }
    if(empty($_POST['account'])) {
        echo "<p>Variabeln <code>\$_POST</code> är tom.</p>";
    }
    else {
        echo "<p>Variabeln <code>$_POST</code> är inte tom.</p>";
    }
    if(is_numeric($_POST['password'])) {
        echo "<p>Lösenordet är numeriskt.</p>";
    }
    else {
        echo "<p>Lösenordet är inte numeriskt.</p>";
    }
    echo "Kontot ser ut så här: '" . strip_tags($_POST['account']) . "' utan taggar";
  ?>
</div>

<?php include("incl/footer.php"); ?>