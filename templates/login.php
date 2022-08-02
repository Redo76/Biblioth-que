<?php $title = "Membres"; ?>

<?php ob_start(); ?>

<!-- Recuperation du mot de passe en bdd -->
<?php
$userFirstName = "Mathieu";
$userLastName = "FALEZ";
$userPassword = "2421";
?>

<h1>Connexion</h1>

<div class="pageContainer">

    <!-- formulaire -->
    <div class="colonneLogin">
        <form method="post" action="">
            <br>
            <label for="firstName">Prénom</label>
            <input type="text" name="firstName">
            <br>
            <label for="lastName">Nom</label>
            <input type="text" name="lastName">
            <br>
            <label for="password">Mot de passe</label>
            <input type="text" name="password">
            <br><br>
            <input type="submit">
            <br><br>
        </form>
    </div>
    <!-- FIN -->


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $fName = $_POST['firstName'];
        $lName = $_POST['lastName'];
        $Password = $_POST['password'];
        // if (empty($fName) || empty($lName) || empty($password)) {
        if (empty($fName)) {
            // echo "Name is empty";
            header("Location: index.php?action=login");
        } else {
            if ($fName == $userFirstName && $lName == $userLastName && $Password == $userPassword) {
                // echo "Success";
                header("Location: index.php?action=membres");
            }
        }
    }
    ?>

    <?php $content = ob_get_clean(); ?>

    <?php require("base.php");