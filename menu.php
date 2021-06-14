<?php
    function menu(){
    echo "<div class='text-left d-flex flex-column align-items-center mt-3'>";
    echo "<div class='list-group'><h4>Menu:</h4><a class='text-decoration-none' href='index.php'><button class='list-group-item list-group-item-action'>Úvod</button></a>";
    echo "<a class='text-decoration-none' href='pro_registrovane.php'><button class='list-group-item list-group-item-action'>Pro registrované 1#</button></a>";
    echo "<a class='text-decoration-none' href='dalsi_pro_reg.php'><button class='list-group-item list-group-item-action'>Pro registrované 2#</button></a>";
    echo "<a class='text-decoration-none' href='dalsi_pro_vsechny.php'><button class='list-group-item list-group-item-action'>Stranka pro vsechny i neregistrovane uzivatele</button></a>";
    echo '<div class="row my-4 d-flex flex-row justify-content-around">
    <div class="col-12 text-light mb-2">
        <button class="btn btn-info" href="" data-toggle="modal" data-target="#prihlModal"><i class="fas fa-sign-in-alt"></i>
        Přihlásit se</button>
    </div>
    <div class="col-12 text-light mb-2">
        <a class="text-decoration-none" href="odhlasit.php"><button class="btn btn-secondary"><i class="fas fa-sign-out-alt"></i>
    Odhlásit se</button></a></div>
    <div class="col-12 text-light mb-2">
        <button class="btn btn-success" href="" data-toggle="modal" data-target="#registrModal"><i class="fas fa-users"></i>
    Registrovat nový účet</button></div></div>';
    echo "</div>";


    echo "</div>";
  
    }
?>
