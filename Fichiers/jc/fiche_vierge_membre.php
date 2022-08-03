<?php $title = "creation_membre"; ?>

<?php ob_start(); ?>
<div class="login-form colonneLogin">
    <form action="index.php?action=submitCreation_membre" method="post">
        <h1 class="text-center,mt-5" id="titreCreationMembre">Inscription</h1>
        <div class="form-group">
            <div class="form-group">
                <input type="text" name="prenom" class="form-control" placeholder="prenom" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="text" name="nom" class="form-control" placeholder="nom" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="text" name="adresse" class="form-control" placeholder="adresse" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="text" name="telephone" class="form-control" placeholder="telephone" required="required" autocomplete="off">
            </div>
            <div>
                <input type="email" name="email" class="form-control" placeholder="email" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-secondary btn-block">Inscription</button>
            </div>
        </div>
        <?php
        if (isset($_SESSION['creation_error'])) {
            $err = $_SESSION['creation_error'];
            if ($err == 1) {
                echo "<p style='color:red'>L'utilisateur existe déja.</p>";
            }
            if ($err == 2) {
                echo "<p style='color:red'>Email Invalide</p>";
            }
        }
        ?>
    </form>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('base.php'); ?>