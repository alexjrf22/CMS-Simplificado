<?php 

function resolve($route){

    $path = $_SERVER['PATH_INFO'] ?? '/';
    //str_replace substirui caracteres por outros.

    if(strlen($path)>1){
        $path = rtrim($path, '/');
    }
    $route = '/^' . str_replace('/', '\/', $route) . '$/';

    //preg_match verifica uma expressao regular
    if (preg_match($route, $path, $params)){
        return $params;
    }
    return false;

}

