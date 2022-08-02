<?php $title = "Membres"; ?>

<?php ob_start(); ?>

<h1>Connexion</h1>

<div class="pageContainer">

    <!-- formulaire -->
    <div class="colonneLogin">
        <!-- <form method="post" action="index.php?action=login">
            <br>
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" required>
            <br>
            <label for="lastname">Nom</label>
            <input type="text" name="lastname" required>
            <br>
            <label for="password">Mot de passe</label>
            <input type="text" name="password" required>
            <br><br>
            <input type="submit">
            <br><br>
        </form> -->
        <form action="index.php?action=submitlogin" method="POST">
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="lastname" required>

                <label><b>Prénom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le prénom d'utilisateur" name="firstname" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                // if(isset($_SESSION['erreur'])){
                //     $err = $_SESSION['erreur'];
                //     if($err==1 || $err==2)
                //         echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                // }
                ?>
            </form>
    </div>
    <!-- FIN -->


    <?php $content = ob_get_clean(); ?>

    <?php require("base.php");