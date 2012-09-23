<h1>Formulär och post-metoden</h1>
  <p>Länken till denna sida:</p>
  <p><a href="<?php echo getCurrentUrl();?>"><?php echo getCurrentUrl();?></a></p>
  <div class='ofx'>
    <table>
    <?php
      foreach ($_SERVER as $key => $value) {
      echo('<tr><td>'. $key . ':</td><td> ' . $value . '</td></tr>');
    }
    ?>
    </table>
  </div>