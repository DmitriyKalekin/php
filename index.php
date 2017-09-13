<?php
function vd($s)
{
  echo "<pre>";
  var_dump($s); 
  echo "</pre>";
}

vd($_SERVER["REQUEST_URI"]);


$parts = explode("/", $_SERVER["REQUEST_URI"]);
vd($parts);








?>
