<?php include 'menu.php'; 
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stranka pro vsechny</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7e2b1f55c5.js" crossorigin="anonymous"></script>
    <link rel="icon" href="php_color2.png">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-4">Pro všechny</h1>
        <?php menu(); 
        include_once 'modaly.php';
        include_once 'reg_prihl_odhl.php'; ?>
    <h2 class="text-center">Tento text vidí přihlášení i nepřihlášení uživatelé:</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad eum ipsum assumenda quo cupiditate, animi fugit impedit sint eaque doloribus aperiam officiis alias quisquam laborum saepe illum velit iure dignissimos id enim ipsam! Similique fugit, repudiandae itaque reiciendis impedit, id commodi corporis iure voluptas unde nulla. Sequi ab culpa ratione, recusandae, cum ipsa fuga iste quibusdam ipsam quod doloremque ullam adipisci temporibus dolore quos ut cumque, perspiciatis similique nobis numquam pariatur quidem molestiae. Incidunt blanditiis iure fuga voluptatibus commodi maxime, quaerat facere minus accusantium cupiditate deleniti quis quasi facilis culpa voluptate eum esse possimus vel vero ipsam reiciendis? Nihil, veritatis.</p>

    </div>
    <?php include_once 'scripty.php'; ?>
</body>
</html>