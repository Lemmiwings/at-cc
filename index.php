<?php
//from root filesystem to base project folder
define("_BASEPATH", $_SERVER['DOCUMENT_ROOT']."/");
//from base project folder to the requested url
define("_URIPATH", $_SERVER['REQUEST_URI']);
//Host name
define("_HOST",$_SERVER['HTTP_HOST']);
//salto de linea html
define("BR_HTML","<br>");

echo "SERVER_HOST: ".$_SERVER['HTTP_HOST'].BR_HTML;

echo "BASEPATH: ".constant("_BASEPATH").BR_HTML;
echo "URI: ".constant("_URIPATH").BR_HTML;

$stack =  str_split(constant("_URIPATH"));
array_shift($stack);
$stack = explode('/',implode('', $stack));

if($stack[0]!="index.php"){
	header("Location: http://"._HOST."/index.php"._URIPATH);
	exit;
}

echo "stack 0 : ".$stack[0].BR_HTML.$stack[1];

require_once(_BASEPATH."system/core/CashControl.php");

$_init = new CashControl();
$_init->load();

 ?>
