<?php
        $url = '';
        $user = '';
        $password = '';
        $db = '';
        //REGISTRACE:
        if((!empty($_POST['inp_jmeno'])) && (!empty($_POST['inp_prijmeni'])) && (!empty($_POST['inp_prihl'])) && (!empty($_POST['inp_heslo'])) && (!empty($_POST['inp_heslo2'])) && ($_POST['inp_heslo'] == $_POST['inp_heslo2'])){ 
            if (!($con = mysqli_connect($url, $user ,$password ,$db))){
              die("Nelze se připojit k databázovému serveru!</body></html>");
            }
            mysqli_query($con,"SET NAMES 'utf8'");
            if (mysqli_query($con,"INSERT INTO uzivatele(jmeno, prijmeni, prihl_jmeno, heslo) VALUES('".
            addslashes($_POST["inp_jmeno"]). "', '" .
            addslashes($_POST["inp_prijmeni"]). "', '" .
            addslashes($_POST["inp_prihl"]). "', '" .
            addslashes($_POST["inp_heslo"])."')")){?>
            <div class="d-flex justify-content-center">
              <div class="alert alert-success alert-dismissible fade show w-50 text-center" role="alert">
                <strong>Úspěšně vytvořený uživatel!</strong> Byli jste rovnou přihlášeni.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>

              <?php
              //Přihlášení uživatele po registraci
              $_SESSION['uzivatel']= htmlspecialchars($_POST['inp_prihl']);
              $_SESSION['heslo']= htmlspecialchars($_POST['inp_heslo']);
            }
            else{
              ?>
              <div class="d-flex justify-content-center">
              <div class="alert alert-danger alert-dismissible fade show w-50 text-center" role="alert">
                <strong>Registrace nebyla úspěšná!</strong> <?php mysqli_error($con)?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              </div>
              <?php
            }
            mysqli_close($con); 
        } elseif((isset($_POST['inp_jmeno'])) || (isset($_POST['inp_prijmeni'])) || (isset($_POST['inp_prihl'])) || (isset($_POST['inp_heslo'])) || (isset($_POST['inp_heslo2'])) && (!empty($_POST['inp_heslo']))) {?>
          <div class="d-flex justify-content-center">
            <div class="alert alert-danger alert-dismissible fade show w-50 text-center" role="alert">
              <strong>Všechny položky ve formuláři musí být vyplněné!</strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
          <?php
        }


        //PRIHLASENI:
        if((!empty($_POST['log_prihl'])) && (!empty($_POST['loh_heslo']))){ 
          if(!($con = mysqli_connect($url, $user ,$password ,$db))){
              die("Nelze se pripojit k databazi");
          };
          mysqli_query($con, "SET NAMES 'utf8'");
          $dotaz =  "SELECT prihl_jmeno, heslo FROM uzivatele";
          if(!($vysledek = mysqli_query($con,$dotaz))){
              die("Nelze provest vyber dat z databaze");
          }
          $prihlasen = false;
          while($radek = mysqli_fetch_array($vysledek)){
              if(($radek['prihl_jmeno'] == $_POST['log_prihl']) && ($radek['heslo'] == $_POST['loh_heslo'])){
                  $prihlasen = true;
                  $_SESSION['uzivatel']= htmlspecialchars($_POST['log_prihl']);
                  $_SESSION['heslo']= htmlspecialchars($_POST['loh_heslo']);
              }
          }
          if($prihlasen){?>
            <div class="d-flex justify-content-center">
              <div class="alert alert-success alert-dismissible fade show w-50 text-center w-50 text-center" role="alert">
                <strong>Jste přihlášen!</strong> <?php echo "Uživatelské jméno: ".$_SESSION['uzivatel'].". Nyní můžete vstoupit do sekce "?><a href="pro_registrovane.php">pro registrované uživatele</a>
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
                <strong>Zadali jste špatné přihlašovací údaje!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
              <?php
          }
          mysqli_close($con);
          mysqli_free_result($vysledek); 
        } elseif((isset($_POST['log_prihl'])) || (isset($_POST['loh_heslo']))){
          ?>
            <div class="d-flex justify-content-center">
              <div class="alert alert-danger alert-dismissible fade show w-50 text-center w-50 text-center" role="alert">
                <strong>Všechny položky ve přihlašovacím formuláři musí být vyplněné!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
              <?php
        }
    ?>

