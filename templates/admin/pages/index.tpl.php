<h3 class="mb-5">Administração De Páginas</h3>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Título</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data['pages'] as $page): ?>
        <tr>
            <td><?php echo $page['idpages']; ?></td>
            <td><a href="/admin/pages/<?php echo $page['idpages']; ?>"><?php echo $page['title']; ?></a></td>
            <td>
                <a href="/admin/pages/<?php echo $page['idpages']; ?>" class="btn btn-primary btn-sm">Ver</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="/admin/pages/create" class="btn btn-secondary">Novo</a>