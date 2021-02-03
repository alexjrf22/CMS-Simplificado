<?php

session_start();

require_once __DIR__ . "/config.php";
require_once __DIR__ . "/src/error_handler.php";
require_once __DIR__ . "/src/resolve-route.php";
require_once __DIR__ . "/src/render.php";
require_once __DIR__ . "/src/conn.php";
require_once __DIR__ . "/src/flash.php";
require_once __DIR__ . "/src/auth.php";

if (resolve('/admin/?(.*)')){
    require_once __DIR__ . '/admin/routes.php';
}elseif(resolve('/(.*)')){
    require_once __DIR__ . '/site/routes.php';
}else{
    http_response_code(404);
    echo 'pagina nao encontrada';
}
