<?php


function app_config($target,$obj,$path){
    $path = _BASEPATH.$path.'/'.$target.'/'.$obj.'.php';
    echo "singlepath file: {$path}".BR_HTML;
    require_once($path);
    if($target == 'controllers'){
        
        echo "Controller found! :{$target}".BR_HTML;
    }
    echo "que paso ? ".BR_HTML;
    
}

function load($system_path,$application_path){
    
    require_once(_BASEPATH.$application_path."/config/autoload.php");
    
    echo "Var Dumb : ".BR_HTML;
    echo var_dump($autoload);
    // app_config($autoload['controllers'], $autoload, $application_path);
    foreach ($autoload as $target => $obj) {
        echo "foreach vardumb: ".BR_HTML;
        echo var_dump($obj);
        for ($i=0; $i < count($obj); $i++) { 
            echo BR_HTML."{$target} target count: ".count($obj).BR_HTML;
            app_config($target,$obj[$i], $application_path);

        }
        
    }
    
    $nombres = ['Home','Galeria'];
    
    $names = ['primera','segunda'];
    
    ${$names[0]} = new $nombres[0];
    ${$names[1]} = new $nombres[1];
    
    echo "intento de instancia: ";
    echo var_dump($primera);
    $primera->main();
    $segunda->main();
    
}
class Load
{
    public static function autoload($application_path,$system_path){
        load($system_path,$application_path);
    }
}

