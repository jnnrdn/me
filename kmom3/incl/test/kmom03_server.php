<h1>Formulär och post-metoden</h1>
 <p>Länken till denna sida:</p>
 <a href="<?php echo getCurrentUrl();?>"><?php echo getCurrentUrl();?></a>
 <pre>
  <table>
    <?php 
      foreach ($_SERVER as $key => $value) {
        echo('<tr><td>'. $key . ':</td><td> ' . $value . '</td><tr>'); 
      }
    ?>
  </table>

 </pre>