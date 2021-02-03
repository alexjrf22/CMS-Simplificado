<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/boots.css"/>
    <link rel="stylesheet" href="/css/style.css"/>
    <link rel="stylesheet" href = "/resources/pnotify/pnotify.css"/>


  <title>Painel Administrativo Do Site</title>
</head>

<body class="d-flex flex-column">
  <div id="header">
    <nav class="navbar navbar-dark bg-dark">
      <span>
         <a href="" class="navbar-brand">Administrador</a>
         <span class="navbar-text">Bem vindo Ao Painel Administrativo Do Site</span>
      </span>
    </nav>

  </div>

  <div id="main">
    <div class="row justify-content-center">
      <div id="content" class="col-4 align-self-center">
        <?php include $content; ?>
      </div>
    </div>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/resources/pnotify/pnotify.js"></script>

  <script>
      <?php flash(); ?>
  </script>

</body>

</html>