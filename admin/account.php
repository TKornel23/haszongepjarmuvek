<?php 
    $_PAGE = "Account";
    include "header.php"; 
?>
<div class="container mt-2 card p-4">
    <h3 class="text-center">---- Jelszó megváltoztatása ----</h3>
    <hr/>
    <form id="update-password" method="POST">
        <div class="row">
            <div class="col-md-4 mt-3">
                Írja be a jelenlegi jelszót*
                <input type="text" class="form-control" placeholder="Jelenlegi jelszó" name="curr_pass" id="curr_pass" required>
            </div>
            <div class="col-md-4 mt-3">
                Írja be az új jelszót *
                <input type="text" class="form-control" placeholder="Új jelszó" name="new_pass" id="new_pass" required>
            </div>

            <div class="col-md-4 mt-3">
                Erősítse meg az új jelszót *
                <input type="text" class="form-control" placeholder="Új jelszó megerősítése" name="confirm_pass" id="confirm_pass" required>
            </div>
        </div>
        <div class="form-group text-right mt-2">
            <button class="btn btn-md btn-success" type='submit'>Jelszó megváltoztatása</button>
        </div>
    </form>
</div>
<?php include "footer.php"; ?>
<script src="assets/js/login.js"></script>
