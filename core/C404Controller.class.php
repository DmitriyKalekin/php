<?php
require_once("Controller.class.php");
class C404Controller extends Controller {
  public function getPage()
  {
    echo "<h1>404 Not Found</h1>";
  }
  
}

?>
