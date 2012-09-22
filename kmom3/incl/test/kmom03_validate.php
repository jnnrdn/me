<h1>Formulär och post-metoden</h1>
  <form method="post" action="?p=kmom03_validate">
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
        echo "<p>Variabeln <code>$_POST</code> är tom.</p>";
    }
    else {
        echo "<p>Variabeln <code>$_POST</code> är inte tom.</p>";
    }

    if(isset($_POST['password'])) {
      if(is_numeric($_POST['password'])) {
        echo "<p>Lösenordet är numeriskt.</p>";
      }
      else {
          echo "<p>Lösenordet är inte numeriskt.</p>";
      }
    }

    if (isset($_POST['account'])) {
      echo "Kontot ser ut så här: '" . strip_tags($_POST['account']) . "' utan taggar";
    }
  ?>