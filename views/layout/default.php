<!DOCTYPE html>
<html>
   <head>
      <title><?= APP_NAME?></title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">   </head>
   <body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

      <header class="p-3 text-bg-dark">
         <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
               <img src="public/img/logo.png" alt="IPleiria logo">
               <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li>
                     <a href="index.php?c=auth&a=index" class="nav-link px-2 text-secondary">Home</a>
                  </li>
               </ul>
            </div>
         </div>
      </header>

      <?php
         //Aqui já teremos a variável $viewPath definida no Controller - linha 36
         require_once($viewPath);
      ?>

   </body>
</html>