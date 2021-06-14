<?php include 'menu.php'; 
session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Úvod</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/7e2b1f55c5.js" crossorigin="anonymous"></script>
  <link rel="icon" href="php_color2.png">
</head>

<body>
  <div class="container">
    <h1 class="text-center mt-4">Úvod - Přihlášení</h1>
    <?php menu(); 
    include_once 'modaly.php';
    include_once 'reg_prihl_odhl.php';
    ?>

    <p class="bg-light">Tento projekt slouží pro ukázku jednoduchého přihlašovacího systému. Pokud se registrujete, vytvoříte uživatele, který je přihlášen do databáze a může si zobrazit obsah stránek, který nepřihlášený uživatel neuvidí. Pro přihlášení můžete zkusit použít přihlašovací jméno <b>guest</b> a heslo <b>navsteva</b> . Poslední stránka v menu je společná pro všechny uživatele a obsah se zobrazí všem stejný.</p>

  </div>
  <?php include_once 'scripty.php'; ?>
</body>

</html>