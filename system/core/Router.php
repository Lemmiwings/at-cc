<?php
/**
 *
 */
require_once(_BASEPATH."app/config/routes.php");
final class Router
{
  
  function __construct($args)
  {

  }
  function route(){
    echo "routeado papa: ".$routes['home'];
  }
}

 ?>
