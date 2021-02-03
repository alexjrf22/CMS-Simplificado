<h3 class="mb-5">Detalhes da página</h3>

<div class="row">
    <div class="col-3">
        <dl class="row">
            <dt class="col-sm-4">Título</dt>
            <dd class="col-sm-8"><?php echo $data['page']['title'];?></dd>

            <dt class="col-sm-4">URL</dt>
            <dd class="col-sm-8">/<?php echo $data['page']['url'];?> - <a href="/<?php echo $data['page']['url'];?>" target="blank">abrir</a></dd>

            <dt class="col-sm-4">Criado em</dt>
            <dd class="col-sm-8"><?php echo $data['page']['created'];?></dd>

            <dt class="col-sm-4">Última atualização</dt>
            <dd class="col-sm-8"><?php echo $data['page']['updated'];?></dd>
        </dl>
        <p>
            <a href="/admin/pages/<?php echo $data['page']['idpages']; ?>/edit" class="btn btn-primary">Editar</a>
            <a href="/admin/pages/<?php echo $data['page']['idpages']; ?>/delete" class="btn btn-danger confirm">Remover</a>
        </p>
    </div>
    <div class="col bg-light">
        <?php echo $data['page']['body'];?>
    </div>

</div>
<a href="/admin/pages" class="btn btn-secondary">Voltar</a>