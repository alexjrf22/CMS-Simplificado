<?php

auth_protection();

if(resolve('/admin')){
    render ('admin/home', 'admin');

}elseif(resolve('/admin/auth.*')){
        include __DIR__ . '/auth/routes.php';
        
}elseif(resolve('/admin/pages.*')){
    include __DIR__ . '/pages/routes.php';

}elseif(resolve('/admin/users.*')){
    include __DIR__ . '/users/routes.php';

}elseif(resolve('/admin/upload/image')){
    $file = $_FILES['file'] ?? null;

    if (!$file){
        http_response_code(422);
        echo 'Nenhum arquivo enviado';    
        exit;   
    }

    $allowedTypes = [
        'image/gif',
        'image/jpg',
        'image/jpeg',
        'image/png'
    ];

    if(!in_array($file['type'], $allowedTypes)){
        http_response_code(422);
        echo 'Arquivo não permitido';   
        exit;
    }
    /** UNIQID PEGA UM VALOR UNICO NO PHP
     * RAND GERA UM VALOR RANDOMICO
     * OU SEJA OBJETIVO Ẽ GERAR NOME UNICO COM VALOR RANDOMICO E APLICAR A AO NOME E EXTENSÃO DO ARQUIVO SALVANDO ASSIM ELE NO BD SEM REPETIR NOMES.
    */
    $name = uniqid(rand(), true) . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);
    //movendo o arquivo para pasta onde ficará salvo com o nome criado na variavel name
    move_uploaded_file($file['tmp_name'], __DIR__ . '/../public/upload/' . $name);
    echo '/upload/' . $name;

}else{
    http_response_code(404);
    echo 'pag nao encontrada';
}
