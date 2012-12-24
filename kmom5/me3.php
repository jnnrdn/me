<?php 
include("incl/config.php");

$title = "Min Me-sida om mig själv";
$pageId = "me3";

//
// Change the style depending on the $_GET
//
$pageStyle = null;
if(isset($_GET['border-radius'])) {
  $pageStyle .= '
    figure { 
     -webkit-border-radius: 10px;
     -moz-border-radius: 10px;
     border-radius: 10px;
     border-color:#5C0A0A;
    }
  ';
  }
if(isset($_GET['box-shadow'])) {
  $pageStyle .= '
    figure { 
     -moz-box-shadow: 10px 10px 5px #8A0F0F;
     -webkit-box-shadow: 10px 10px 5px #8A0F0F;
     box-shadow: 10px 10px 5px #8A0F0F;
    }
  ';
  }
if(isset($_GET['gradient'])) {
  $pageStyle .= '
    body { 
     background: -webkit-gradient(linear, left top, left bottom,     color-stop(0.0, #8A0F0F), color-stop(0.10, #F07575), color-stop(0.80, #FFF)); 
     background: -moz-linear-gradient(top,  #8A0F0F,  #F07575 10%, #FFF 80%);
    }
  ';
  }
if(isset($_GET['opaque'])) {
  $pageStyle .= '
    header#top  { background:hsla(0,0%,100%,0.20); }
    div#content { background:hsla(0,0%,100%,0.80); }
    header#top, div#content { padding:1em; }

    header#top {
     -webkit-border-top-left-radius: 10px;
     -moz-border-radius-topleft: 10px;
     border-top-left-radius: 10px;
     -webkit-border-top-right-radius: 10px;
     -moz-border-radius-topright: 10px;
     border-top-right-radius: 10px;
    }

    div#content { 
     -webkit-border-bottom-left-radius: 10px;
     -moz-border-radius-bottomleft: 10px;
     border-top-bottom-radius: 10px;
     -webkit-border-bottom-right-radius: 10px;
     -moz-border-radius-bottomright: 10px;
     border-bottom-right-radius: 10px;
     margin-top:0.2em; 
     margin-bottom:1em; 
    }
';
}

?>
<?php 
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