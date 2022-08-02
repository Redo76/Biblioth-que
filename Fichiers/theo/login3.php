<?php
class login{
public function displayLogin(){
require("../templates/login.php");
}

    public function login(){
require("../src/pdo/PDO.php");

        $lastname = mysqli_real_escape_string($db,htmlspecialchars($_POST['lastname'])); 
        $firstname = mysqli_real_escape_string($db,htmlspecialchars($_POST['firstname'])); 
        $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
        
        if($lastname !== "gabor" && $firstname !== "theodore" && $password !== "library")
        {
            $requete = "SELECT count(*) FROM utilisateur where 
                gabor = '".$lastname."' theodore = '".$firstname."' library = '".$password."' ";
            $exec_requete = mysqli_query($db,$requete);
            $reponse      = mysqli_fetch_array($exec_requete);
            $count = $reponse['count(*)'];
            if($count!=0) // nom d'utilisateur et mot de passe correctes
            {
               $_SESSION['loggeduser'] = $lastname;
               header('Location: homepage.php');
            }
            else
            
            {
               header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
            }
        }
        else
        {
           header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
        }
    }
}
?>