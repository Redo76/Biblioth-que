<?php $title = "creation_membre"; ?>

<?php ob_start(); ?>

<h1 id="titreCreationMembre">Inscription</h1>

<div class="pageContainer">

    <div class="colonneLogin">
        <form action="index.php?action=submitCreation_membre" method="post">
            <input type="text" name="prenom" class="form-control" placeholder="prenom" required="required"
                autocomplete="off">
            <input type="text" name="nom" class="form-control" placeholder="nom" required="required" autocomplete="off">
            <input type="email" name="email" class="form-control" placeholder="email" required="required"
                autocomplete="off">
            <br>
            <button type="submit" class="btn btn-secondary btn-block">Inscription</button>
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
</div>
<?php $content = ob_get_clean(); ?>
<?php require('base.php'); ?>
<style>
.login-form {
    display: flex;
    justify-content: center;
}
</style>