<?php
//from root filesystem to base project folder
define("_BASEPATH", $_SERVER['DOCUMENT_ROOT']."/");
//from base project folder to the requested url
define("_URIPATH", $_SERVER['REQUEST_URI']);
//Host name
define("_HOST",$_SERVER['HTTP_HOST']);
//salto de linea html
define("BR_HTML","<br>");

$stack =  str_split(constant("_URIPATH"));
array_shift($stack);
$stack = explode('/',implode('', $stack));

if($stack[0]!="index.php"){
	header("Location: http://"._HOST."/index.php"._URIPATH,true,303);
	exit;
}



$system_path ="system";

$application_path="app";

include _BASEPATH.$system_path."/core/load.php";

load($system_path,$application_path);

Load::autoload($system_path,$application_path);