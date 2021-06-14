<?php include 'menu.php'; 
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odhlásit se</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7e2b1f55c5.js" crossorigin="anonymous"></script>
    <link rel="icon" href="php_color2.png">
</head>
<body>
<div class="container">
    <h1 class="text-center mt-4">Odhlásit</h1>
    <?php menu();
    include_once 'modaly.php'; 

    if(!empty($_SESSION['uzivatel'])){
        unset($_SESSION['uzivatel']);
        ?>
        <div class="d-flex justify-content-center">
          <div class="alert alert-danger alert-dismissible fade show w-50 text-center w-50 text-center" role="alert">
            <strong>Byl jste odhlášen!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
          <?php
    }else{
        ?>
        <div class="d-flex justify-content-center">
          <div class="alert alert-danger alert-dismissible fade show w-50 text-center w-50 text-center" role="alert">
            <strong>Odhlášení neproběhlo protože jste nebyl přihlášený!</strong> Zde se můžete <a href="" data-toggle="modal" data-target="#prihlModal"> přihlásit.</a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
          <?php
    }
?>
    <?php
    include_once 'reg_prihl_odhl.php';
    ?>
    <?php include_once 'scripty.php'; ?>
</div>
</body>
</html>