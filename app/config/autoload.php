<?php
/*
Configuration for autoload class
*/

//Routes only lowercase
$autoload['config']= [
    'config',
    'database',
    'routes'
];

$autoload['controllers']= [
    'Home',
    'Galeria'

];

$autoload['models']= [
    'Galeria'
];

$autoload['views']= [
    'home',
    'galeria'
];
?>