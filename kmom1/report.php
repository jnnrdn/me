<?php include("incl/config.php"); ?>

<?php
  $title = "Mina redovisningar av kursmomenten";
?>

<?php include("incl/header.php"); ?>

  <h1>Kmom01: Kom igång med HTML, CSS och PHP</h1>

  <h2>Reflektioner</h2>
  <p>Hade inga större problem med denna första uppgift. Den var tydlig, pedagogisk och lätt att följa. Lite meckigt var det att
    behöva chmod:a varje gång man för över en ny fil eller mapp, men så hittade jag ett
    <a href="http://db-o-webb.blogspot.se/2009/09/sshstudentbthse-editera-initfilen-vid.html" target="_blank">inlägg</a> om just detta här på bloggen och vips
    så var det problemet löst.
    </p>
  <p>Det var också lite trixigt att hitta inställningarna för Unix-radbrytningar i den editor jag använder, men till slut gick det.
    Den var redan inställd på UTF-8, så det behövde jag inte ändra.</p>
  <p>Valideringen gick bra, fick grön skylt med några varningar för CSS:en. Främst gällde de färgerna men fick även en om att
    type-attributet saknades i länken till CSS:en från me.php så lade till det då det kändes som en simpel åtgärd.</p>

  <h2>Min miljö</h2>
  <p>Den editor jag använder i första hand är Sublime Text 2, men det händer även att jag jobbar i NetBeans.
    Sitter i första hand på Mac (OS X 10.6.8) när jag jobbar med uppgifterna i den här kursen, men det kommer nog även hända att jag
    jobbar från en Linux-dator (Ubuntu). Min lokala webbserver (båda datorerna) är en LAMP-stack som jag kör via VirtualBox.</p>
  <p>Webbläsare är vanligtvis i första hand Chrome, men FF funkar också. Har även de övriga vanliga installerade för test
    (FF, Opera, Safari). Min gamla windows-dator (Win 7) får tjänstgöra som IE-testmiljö. Som filöverföringsprogram använder jag
    FileZilla eller Cyberduck. </p>
  <p>Kan inte klara mig utan versionshantering nu för tiden så Git har också en given plats i min verktygslåda.</p>
  <hr>

<?php include("incl/footer.php"); ?>
