<?php
class Login{

    public function displayLogin(){

        var_dump($_SESSION);
        require("../templates/login.php");
        unset($_SESSION['login_error']);
    }

    public function submitLogin(){

        require("../src/pdo/PDO.php");

        
        var_dump($admin);
        
        $lastname = strip_tags($_POST['lastname']); 
        $firstname = strip_tags($_POST['firstname']); 
        $password = strip_tags($_POST['password']);

        $adminDB = $db -> prepare("SELECT * FROM admin WHERE first_name = :firstName");
        $adminDB -> execute(['firstName' => $firstname]);
        $admin = $adminDB -> fetchAll();

        if (isset($lastname) && isset($firstname) && isset($password)) {
            // if (password_verify($password, $admin['password'])) {
                
            // }
            if($lastname == "gabor" && $firstname == "theodore" && $password == "library"){
                $_SESSION['loggedUser'] = 3;
                header('Location: ../index.php');
            } 
            else {
                $_SESSION['login_error'] = "L";
            }  
        }

    }
}

// $requete = "SELECT count(*) FROM utilisateur where 
//                     gabor = '".$lastname."' theodore = '".$firstname."' library = '".$password."' ";
//                 $exec_requete = mysqli_query($db,$requete);
//                 $reponse      = mysqli_fetch_array($exec_requete);
//                 $count = $reponse['count(*)'];
//                 if($count!=0) // nom d'utilisateur et mot de passe correctes
//                 {
//                 $_SESSION['loggeduser'] = $lastname;
//                 header('Location: /');
//                 }
//                 else
                
//                 {
//                     echo 'Incorrect';
//                 }