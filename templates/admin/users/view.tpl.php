<h3 class="mb-5">Administração de usuários</h3>

<dl class="row"></dl>
    <dt class="col-sm-3">E-mail</dt>
    <dd class="col-sm-9"><?php echo $data['user']['email'];?></dd>

    <dt class="col-sm-3">Criado em</dt>
    <dd class="col-sm-9"><?php echo $data['user']['created'];?></dd>

    <dt class="col-sm-3">Atualizado em</dt>
    <dd class="col-sm-9"><?php echo $data['user']['updated'];?></dd>

</dl>

<p>
    <a href="/admin/users/<?php echo $data['user']['idusers'];?>/edit" class="btn btn-primary">Editar</a>
    <a href="/admin/users/<?php echo $data['user']['idusers'];?>/delete" class="btn btn-danger confirm">Remover</a>
</p>

<a href="/admin/users" class="btn btn-secondary">Voltar</a>
