<h3 class="mb-5">Administração de usuários</h3>

<form method="post">
    <div class="form-group">
        <label for="usersEmail">E-mail</label>
        <input type="text" id="usersEmail" name="email" class="form-control" placeholder="Digite o e-mail do usuário..." value="<?php echo  $data['user']['email']; ?>">
    </div>
    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" id="password"  name="password" class="form-control mb-2" placeholder="Escolha uma senha..">
    </div>
    <button class="btn btn-primary">Salvar</button>
</form>
<hr>
<a href="/admin/users/<?php echo  $data['user']['idusers']; ?>" class="btn btn-secondary">Voltar</a>