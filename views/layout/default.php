<!DOCTYPE html>
<html>
   <head>
      <title><?= APP_NAME?></title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   </head>
   <body>
      <nav class="main-header navbar navbar-expand navbar-light" style="background-color: darkcyan;">
         <ul class="navbar-nav">
            <li class="nav-item">
                  <img src="../public/img/logo.png" alt="IPLeiria Logo" class="brand-image">
            </li>
            <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                     <i class="fas fa-bars"></i>
                  </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                  <a class="nav-link" href="index.php?c=auth&a=index">Home</a>
            </li>
         </ul>
      </nav>
      <?php
         //Aqui já teremos a variável $viewPath definida no Controller - linha 36
         require_once($viewPath);
      ?>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

   </body>
</html>