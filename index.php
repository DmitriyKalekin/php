<?php
function vd($s)
{
  echo "<pre>";
  var_dump($s); 
  echo "</pre>";
}

//vd($_SERVER["REQUEST_URI"]);

require_once("core/FactoryRouting.class.php");
$ctl = FactoryRouting::getController($_SERVER["REQUEST_URI"]);

$ctl->getPage();
?>
