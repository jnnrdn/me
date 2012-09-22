<?php 
  include("incl/config.php"); 

  // Is the page known?
  $path = "incl/test";
  $file = null;
  // Check if the url contains a querystring with a page-part.
  $p = null;
  if(isset($_GET["p"])) 
  {
    $p = $_GET["p"];
  }

  if($p == "kmom03_get") 
  {
    $title = "Tester kmom03: Visa \$_GET";
    $file = "kmom03_get.php";
  }
  else if ($p == "kmom03_getform") 
  {
    $title = "Tester kmom03: Visa \$_GET form";
    $file = "kmom03_getform.php";
  } 
  else if ($p == "kmom03_postform") 
  {
    $title = "Tester kmom03: Visa \$_POST";
    $file = "kmom03_postform.php";
  } 
  else if ($p == "kmom03_validate") 
  {
    $title = "Tester kmom03: Visa \$_GET";
    $file = "kmom03_validate.php";
  } 
  else
  {
    $title = "Tester";
    $file = "default.php";
  }

  $pageId = "test";

  include("incl/header.php");
?>

<div id="content"> 
  <?php include("incl/test/aside.php"); ?>
  <article class="left">
    <?php include("$path/$file"); ?>
    <?php include("incl/byline.php"); ?>
  </article>
</div> <!-- end content -->

<?php include("incl/footer.php"); ?>