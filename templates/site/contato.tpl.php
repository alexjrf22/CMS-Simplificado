<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/site.css">
    <link rel="stylesheet" href = "/resources/pnotify/pnotify.css"/>
</head>
<body>
   
    <main id="content">
        <h3>Preencha o formulário a seguir</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae turpis velit. Nam suscipit ut lacus sed maximus. Nam gravida malesuada est, gravida volutpat mi aliquet quis. Nam hendrerit placerat ipsum vitae lobortis.</p>

        <div class="row">
            <div class="col-1">
                <h4>Site</h4>

                <p>R. Fulano de Tal, 999</p>
                <p>CEP 11999-000</p>
                <p>Brasilia - DF</p>
                <P><a href="phone:61988887777">(61) 98888-7777</a></P>
            </div>
            <div class="col-2">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input name="from" type="email" class="form-control" placeholder="Seu email...">
                    </div>
                    <div class="form-group">
                        <label for="">Assunto</label>
                        <input name="subject" type="text" class="form-control" placeholder="Sua mensagem...">
                    </div>
                    <div class="form-group">
                        <label for="">Mensagem</label>
                        <textarea name="message" class="form-control" rows="5" placeholder="Sua mensagem"></textarea>
                    </div>
                    <input type="submit" value="Enviar" class="btn">
                </form>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="/resources/pnotify/pnotify.js"></script>
    <script> <?php echo flash(); ?></script>

</body>
</html>