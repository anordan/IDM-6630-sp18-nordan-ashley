<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Check In / Loops</title>
  </head>

  <body>
   <? php
   
   // Define The Array
   $magicSchoolBus = array("Yellow", "Stars", "Bus", 22, 47.1);
   
   // Define
   function whiteDwarfs($arrayToList) {
	   echo "<ul>";
	   
	   foreach ($aarayToList as $value) {
		   echo "<li>$value</li>";
	   }
	   echo "</ul>";
   }
	whiteDwarfs($magicSchoolBus);
	?>
	
	
  </body>
</html>