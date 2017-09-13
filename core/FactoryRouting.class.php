<?php
class FactoryRouting 
{
    static function getController($uri) : Controller
    {
      $parts = explode("/", $uri);
      
      if (!empty($parts[1]) )
      {
       $cname = UCFirst($parts[1])."Controller";
       
        if (file_exists("core/".$cname.".class.php"))
        {
           require_once("core/{$cname}.class.php");
          
          if (class_exists($cname))
          {
              return new $cname();
          }
        }
        
      }
     
      
      require_once("core/C404Controller.class.php");
      return new C404Controller();
      
      
    }
}

?>
