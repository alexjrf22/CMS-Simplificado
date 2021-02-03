<h3 class="mb-5">Edição de página</h3>

<form action="" method="post">
    <div class="form-group">
        <label class="mb-2" for="pagestitle">Título</label>
            <input name="title" id="pagestitle" type="text" class="form-control mb-2" placeholder="Digite o título da página..." required value="<?php echo $data['page']['title']; ?>">    
    </div>

    <div class="form-group">
        <label for="pagesUrl" class="mb-2">URL</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">/</span>
            </div>
            <input name="url" id="pagesUrl" type="text" class="form-control mb-2" placeholder="Digite o endereço da página ou deixe em branco para informar a página inicial..." value="<?php echo $data['page']['url']; ?>">    
        </div>
    </div>

    <div class="form-group">
        <!-- htmlentities escapa o texto evitando erros de impressão no html -->
        <input type="hidden" id="pagesBody" name="body" value="<?php echo htmlentities($data['page']['body']); ?>">
        <trix-editor class="mb-2" input="pagesBody"></trix-editor>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>

</form>
<hr>

<a href="/admin/pages/<?php echo $data['page']['idpages']; ?>" class="btn btn-secondary">Voltar</a>