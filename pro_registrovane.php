<?php include 'menu.php';
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pro registrované</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7e2b1f55c5.js" crossorigin="anonymous"></script>
    <link rel="icon" href="php_color2.png">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-4">Pro registrované</h1>
        <?php menu(); 
        include_once 'modaly.php';
        include_once 'reg_prihl_odhl.php';
        if(!empty($_SESSION['uzivatel'])){ //pokud je neco v session klic uzivatel
            echo "<div class='text-center d-flex flex-column bg-light'>";
            echo "<h2>Tento text vidí pouze přihlášení uživatelé:</h2>";
            echo "<p>Vaše přihlašovací jméno a heslo je:</p>";
            echo "<table border=1>
                    <tr>
                    <th>Uživatelské jméno:</th>
                    <td>".$_SESSION['uzivatel']."</td>
                    </tr>
                    <tr><th>Heslo:</th>
                    <td>".$_SESSION['heslo']."</td>
                    </tr>
                    </table>";
            echo "</div>";
        }else{      //prazdna session uzivatel
            ?>
        <div class="d-flex justify-content-center">
          <div class="alert alert-success alert-dismissible fade show w-50 text-center w-50 text-center" role="alert">
            <strong>Nejste přihlášen!</strong> Pouze pro přihlášené uživatele. Zde se můžete <a href="" data-toggle="modal" data-target="#prihlModal"> přihlásit.</a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
          <?php
        }
        
        include_once 'scripty.php'; ?>
    </div>
</body>
</html>