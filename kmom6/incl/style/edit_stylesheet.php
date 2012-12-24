<?php

  /**
  * Set up the path and read the directory, store all files in the array $stylesheets
  */
  $pathToStyles = dirname(__FILE__) . "/../../style/";
  $stylesheets = readDirectory($pathToStyles);

  /**
  * Check that the file name is valid by checking that it's in the stylesheet array.
  * http://php.net/manual/en/function.in-array.php
  */
  $filename = null;
  $isWritable = null;
  if(isset($_POST['stylesheet']) && in_array($_POST['stylesheet'], $stylesheets)) {
    $filename = $pathToStyles . $_POST['stylesheet'];
    if(is_writable($filename)) {
      $isWritable = TRUE;
    }
    else {
      $isWritable = FALSE;
    }
  }

  /**
  * Check if Save-button was pressed, save the file if true.
  */
  if(isset($_POST['doSave'])) {
    $resFromSave = putFileContents($filename, strip_tags($_POST['styleContent']));
  }

  /**
  * Create a select/option-list based on the content of the array $stylesheets
  *
  * http://php.net/manual/en/control-structures.foreach.php
  * Look up select/option in Cheatsheet
  */
  $select = "<select id='input1' name='stylesheet' onchange='form.submit();'>";
  $select .= "<option value='-1'>Välj Stylesheet</option>";
  foreach($stylesheets as $val)
  {
    $selected = "";
    if(isset($_POST['stylesheet']) && $_POST['stylesheet'] == $val)
    {
      $selected = "selected";
    }
    $select .= "<option value='{$val}' {$selected}>{$val}</option>";
  }
  $select .= "</select>";
?>


<h1>Redigera stylesheet</h1>

<p>
  Välj den stylesheet som du vill redigera. Du kan välja bland de stylesheets som ligger
  i katalogen <code>style/</code>.
</p>

<form method="post" action="">

  <fieldset>
    <!-- <legend>Editera Stylesheet</legend> -->
    <p>
      <label for="input1">Stylesheet:</label><br>
      <?php echo $select; ?>
    </p>

    <textarea style="width:100%;" name="styleContent">
      <?php if($filename) echo getFileContents($filename); ?>
    </textarea>

    <p>
      <input type="submit" name="doSave" value="Spara" <?php if(!$isWritable) echo "disabled";  ?>>
      <input type="reset" value="Ångra">
    </p>

    <?php if($isWritable === FALSE): ?>
    <p class="info">Filen är inte skrivbar. Gör den skrivbar med chmod 666  för att
      göra det möjligt att editera filen och spara dina ändringar.</p>
    <?php endif; ?>

    <?php if(isset($resFromSave)): ?>
    <p>
      <output class="success"><?php echo $resFromSave ?></output>
    </p>
    <?php endif; ?>

    <p class="quiet small"><em>
      <?php
      if(isset($_SESSION['stylesheet']))
      {
        echo "Din nuvarande [aktiva] stylesheet är '{$_SESSION['stylesheet']}'.";
      }
      else
      {
        echo "Du använder webbplatsens standard stylesheet.";
      }
      ?>
    </em></p>

  </fieldset>
</form>

<p>
  Detta formulär använder en funktion i <code>src/common.php</code>, funktionen, <code>readDirectory()</code>, läser
  innehållet i en katalog på disk och returnerar en array med de filer som ligger i katalogen.
  <a href="viewsource.php?dir=src&amp;file=common.php#file">Källkoden hittar du här</a>.
</p>

<p>
  När formuläret postas så är det en speciell processing-sida som tar hand om det.
  <a href="viewsource.php?dir=incl/style&amp;file=choose_stylesheet_process.php#file">Studera källkoden för processing-sidan</a>.
</p>
