<!-- REGISTRACE -->
<div class="modal fade" id="registrModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Registrace nového účtu:</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="index.php" class="" method="POST">
                Křestní jméno: <br><input type="text" class="form-control" name="inp_jmeno"><br>
                Příjmení: <br><input type="text" name="inp_prijmeni" class="form-control"><br>
                Příhlašovací jméno: <br><input type="text" name="inp_prihl" class="form-control "><br>
                Heslo: <br><input type="password" name="inp_heslo" class="form-control"><br>
                Ověření hesla: <br><input type="password" name="inp_heslo2" class="form-control"><br>
                <div class="text-center">
                <input type="submit" class="btn btn-primary mt-2" value="Registrovat uživatele">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- PRIHLASENI -->
      <div class="modal fade" id="prihlModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Přihlášení k účtu:</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="index.php" method="POST">
                Příhlašovací jméno: <br><input type="text" name="log_prihl" class="form-control"><br>
                Heslo:              <br><input type="password" name="loh_heslo" class="form-control"><br>
                <div class="text-center">
                <input type="submit" value="Přihlásit se" class="btn btn-primary mt-2">
                </div>
            </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>