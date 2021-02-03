<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/boots.css"/>
    <link rel="stylesheet" href="/resources/trix/trix.css"/>
    <link rel="stylesheet" href="/css/style.css"/>
    <link rel="stylesheet" href = "/resources/pnotify/pnotify.css"/>


  <title>Painel Administrativo Do Site</title>
</head>

<body class="d-flex flex-column">
  <div id="header">
    <nav class="navbar navbar-dark bg-dark">
      <span>
         <a href="" class="navbar-brand">Administrador</a>
         <span class="navbar-text">Bem vindo <?php echo $_SESSION['auth'];?> Ao Painel Administrativo Do Site</span>
      </span>
      <a href="/admin/auth/logout" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i>

</a>

    </nav>

  </div>

  <div id="main">

    <div class="row">

      <div class="col">
        <ul id="main-menu" class="nav flex-column nav-pills bg-secondary text-write p-2">
          <li class="nav-item">
            <span class="nav-link"><strong>MENU</strong></span>
            <hr color="white">
          </li>
          <li class="nav-item">
            <a href="/admin/pages" class="nav-link <?php if(resolve('/admin/pages.*')): ?> active <?php endif;?>"><i class="far fa-file-alt"></i>

Páginas</a>
          </li>
          <li class="nav-item">
            <a href="/admin/users" class="nav-link <?php if(resolve('/admin/users.*')): ?> active <?php endif;?>"><i class="far fa-user"></i>

Úsuarios</a>
          </li>
        </ul>
      </div>

      <div id="content" class="col-10">
        <?php include $content; ?>
      </div>

    </div>

  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/resources/trix/trix.js"></script>
  <script src="/resources/pnotify/pnotify.js"></script>

  <script>

      document.addEventListener('trix-attachment-add', function(){
        const attachment = event.attachment;
        if(!attachment.file){
          return;
        }
        const form = new FormData();
        form.append('file', attachment.file);

        $.ajax({
          url: '/admin/upload/image',
          method: 'POST',
          data: form,
          contentType: false,
          processData: false,
          //XHR passa a responsabilidade para o js nativo
          xhr: function() {
            const xhr = $.ajaxSettings.xhr();
            xhr.upload.addEventListener('progress', function(e){
              let progress = e.loaded / e.total * 100;
              attachment.setUploadProgress(progress);
            });
            return xhr;
          }
        }).done(function(response){
            console.log(response);
            attachment.setAttributes({
              url: response,
              href: response
            });

        }).fail(function(){
          console.log('deu errado');
        });
      });
      <?php flash(); ?>

      const confirmE1 = document.querySelector('.confirm');
      if(confirmE1){  
          confirmE1.addEventListener('click', function(e){
            e.preventDefault(); //quando clicar nao executar a navegação esse codigo é JS.
            if(confirm('Tem certeza que deseja deletar está página?')){
              window.location = e.target.getAttribute('href');
            }  
          }); 
      }
  </script>

</body>

</html>