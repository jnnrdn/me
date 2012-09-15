<?php 
  include("incl/config.php"); 

  $title = "Min Me-sida om mig själv"; 
  $pageId = "me";

  // Define style thats specific for this page
  $pageStyle = '
  figure { 
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
  <article>
    <h1>htmlphp-me</h1>
    
    <figure class="left top">
      <img src="img/me.jpg" alt="Bild på Jenny Ryden" class="me">
      <figcaption>
        <p>Bild: En bild på mej.</p>
      </figcaption>
    </figure>
    
    <p>Jag heter Jenny Rydén och är 37 år. Bor med min sambo i Göteborg och jobbar som webbutvecklare. </p>
    <p>Idag är jag mest hemma på frontend-sidan men jag har lite kunskaper i PHP sedan innan och tycker det är jättekul, 
      så med det här kurspaketet hoppas jag bredda och fördjupa dessa. Är även mycket intresserad av design och användbarhet.</p>
  
    <p>Älskar att lära mig nya saker så vidareutbildning (helst inom ovanstående områden) kan nog sägas vara min största hobby. 
      I övrigt är jag nog som de flesta andra: gillar att läsa, djur och natur samt att umgås med nära och kära.</p>
  </article> 
  <?php include("incl/byline.php"); ?>
</div> <!-- end content -->



<?php include("incl/footer.php"); ?>