<?php


class creationMembre {
    public function creation(){
        require('../src/pdo/PDO.php');

if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['email'])) {
    $firstName = htmlspecialchars($_POST['prenom']);
    $lastName = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);


    $check = $db->prepare('SELECT first_name,last_name, email FROM customer WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule ..

    // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
    if ($row == 0) {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // Si l'email est de la bonne forme

            // On insère dans la base de données
            $insert = $db->prepare('INSERT INTO customer(first_name,last_name, email) VALUES(:prenom,:nom,:email)');
            $insert->execute(array(
                'prenom' => $firstName,
                'nom' => $lastName,
                'email' => $email,

            ));
            // On redirige avec le message de succès
            header('Location:/');
        }
        //  else header('Location: fiche_vierge_membre.php?reg_err=password');
    } 
    // else header('Location: fiche_vierge_membre.php?reg_err=email');
} 
// else header('Location: homepage.php?reg_err=already');
require("../templates/fiche_vierge_membre.php");
}
}

