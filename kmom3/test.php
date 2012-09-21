<?php 
  include("incl/config.php"); 

  $title = "Min Me-sida om mig själv"; 
  $pageId = "test";

  // Define style thats specific for this page
  $pageStyle = '
    nav#left-menu { 
     width: 30%;
     float: left;
    }
    article {
     width: 65%;
     padding: 10px;
     float: left;
    }
  ';

  include("incl/header.php"); 
?>

<div id="content">
  <nav id="left-menu">
    <h3>kmom2</h3>
      <ul>
        <li></li>
      </ul>

    <h3>kmom3</h3>
    <ul>
        <li></li>
    </ul>

  </nav>
  <article>
    <h1>Testfall för kursen</h1>
    
    <p>Detta är min testsida. </p>

  </article> 
  <?php include("incl/byline.php"); ?>
</div> <!-- end content -->



<?php include("incl/footer.php"); ?>