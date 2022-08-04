<?php


class creationMembre {

    public function displayForm(){
        require("../templates/fiche_vierge_membre.php");
        unset($_SESSION['creation_error']);
    }


    public function creation(){
    require('../src/pdo/PDO.php');

    if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['adresse'])&& !empty($_POST['telephone'])) {
        $firstName = htmlspecialchars($_POST['prenom']);
        $lastName = htmlspecialchars($_POST['nom']);
        $adress = htmlspecialchars($_POST['adresse']);
        $phone = htmlspecialchars($_POST['telephone']);
        $email = htmlspecialchars($_POST['email']);


        $check = $db->prepare('SELECT first_name,last_name,address,phone, email FROM customer WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule ..

        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if ($row == 0) {

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // Si l'email est de la bonne forme

                // On insère dans la base de données
                $insert = $db->prepare('INSERT INTO customer(first_name,last_name,address,phone, email) VALUES(:prenom,:nom,:adresse,:telephone,:email)');
                $insert->execute(array(
                    'prenom' => $firstName,
                    'nom' => $lastName,
                    'adresse' => $adress,
                    'telephone' => $phone,
                    'email' => $email,

                ));
                header('Location:  ../index.php?action=membres');
            }
            else {
                header('Location:  ../index.php?action=creation_membre');
                $_SESSION['creation_error'] = 2;
            }
        } 
        else {
            header('Location:  ../index.php?action=creation_membre');
            $_SESSION['creation_error'] = 1;
        }
    } 

    }
}

