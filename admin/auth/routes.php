<?php

require __DIR__ . '/db.php';

if(resolve('/admin/auth/login')){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if($login()){
            flash('Autenticado', 'success');
            return header('location: /admin');
        }
        flash('Dados incorretos', 'error');
    }
    render ('admin/auth/login', 'admin/login');
}elseif(resolve('/admin/auth/logout')){
    logout();
}
