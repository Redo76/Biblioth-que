<?php $title = "creation_membre"; ?>

<?php ob_start(); ?>
<div class="login-form">
    <?php
    if (isset($_GET['reg_err'])) {
        $err = htmlspecialchars($_GET['reg_err']);

        switch ($err) {
            case 'success':
    ?>
                <div class="alert alert-success">
                    <strong>Succès</strong> inscription réussie !
                </div>
            <?php
                break;

            case 'email':
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> email non valide
                </div>
                <?php
                break;
                ?>
            <?php
            case 'already':
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> compte deja existant
                </div>
    <?php

        }
    }
    ?>
    <form action="index.php?action=creation_membre" method="post">
        <h2 class="text-center,mt-5" id="titreCreationMembre" >Inscription</h2>
        <div class="form-group">
            <div class="form-group">
                <input type="text" name="prenom" class="form-control" placeholder="prenom" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <div class="form-group">
                    <input type="text" name="nom" class="form-control" placeholder="nom" required="required" autocomplete="off">
                </div>
                <input type="email" name="email" class="form-control" placeholder="email" required="required" autocomplete="off">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-secondary btn-block">Inscription</button>
            </div>
    </form>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('base.php');?>
<style>
    .login-form {
        display: flex;
        justify-content: center;
    }
</style>