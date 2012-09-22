<h1>Formulär och post-metoden</h1>
 <pre>

  <table>
    <?php 
      foreach ($_SERVER as $key => $value) {
        echo('<tr><td>'. $key . ':</td><td> ' . $value . '</td><tr>'); 
      }
    ?>
  </table>

 </pre>