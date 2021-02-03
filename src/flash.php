<?php 

function flash($message = null, $type = null){
    if($message){
        $_SESSION['flash'][] = compact('message', 'type'); //compact cria um array associando valores a variaveis de mesmo nome
        // $_SESSION['flash'][] => permite armazenar varias mensagens nesse array vazio.       
    }else{
        $flash = $_SESSION['flash'] ?? []; //retorna oq foi armazenado na sessão ou um array vazio. 
        if(!count($flash)){ // se o array estiver vazio apenas retona ou seja não vai exibir mensagem nenhuma.
            return;
        }

        foreach($flash as $key => $message){ //se existir mensagem faz o foreach e passa os parametros pro render.
            render('flash', 'ajax', $message);
            unset ($_SESSION['flash'][$key]);
        }

    }
}