<?php

function pages_get_data ($redirectOnError){
    $title = filter_input(INPUT_POST, 'title');
    $url = filter_input(INPUT_POST, 'url');
    $body = filter_input(INPUT_POST, 'body');

    if (!$title){
        flash('É necessário preencher o Titulo', 'error');
        header('location: ' . $redirectOnError);
        die();
    }

    return compact('title', 'url', 'body');
};

$pages_all = function() use ($conn){
    $result = $conn->query('SELECT * FROM pages');
    return $result->fetch_all(MYSQLI_ASSOC);
};

$pages_one = function($id) use($conn){
    $sql = "SELECT * FROM pages WHERE idpages=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
};

$pages_create = function() use ($conn){
    $data = pages_get_data('/admin/pages/create');
    $sql = 'INSERT INTO pages (title, url, body, created, updated) VALUES (?, ?, ?, NOW(), NOW())';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $data['title'], $data['url'], $data['body']);
    flash('Página criada com sucesso.', 'success');
    return $stmt->execute();
};

$pages_edit = function($id) use($conn){
    $data = pages_get_data('admin/pages/' . $id . '/edit');
    $sql = 'UPDATE pages SET title=?, url=?, body=?, updated=NOW() WHERE idpages=?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssi', $data['title'], $data['url'], $data['body'], $id);
    flash('Página atualizada com sucesso.', 'success');
    return $stmt->execute();

};

$pages_delete = function($id) use ($conn){
    $sql = 'DELETE FROM pages WHERE idpages=?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    flash('Página deletada com sucesso.', 'success');
    return $stmt->execute();
};