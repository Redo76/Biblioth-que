<?php
class Login{

    public function displayLogin(){
        session_start();

        var_dump($_SESSION);
        require("../templates/login.php");
        unset($_SESSION['login_error']);
    }

    public function submitLogin(){
        session_start();

        require("../src/pdo/PDO.php");

        $adminDB = $db -> prepare("SELECT * FROM admin");
        $adminDB -> execute();
        $admin = $adminDB -> fetchAll();
        

        $lastname = $_POST['lastname']; 
        $firstname = $_POST['firstname']; 
        $password = $_POST['password'];

        if (isset($lastname) && isset($firstname) && isset($password)) {
            // if (password_verify($password, $admin['password'])) {
                
            // }
            if($lastname == "gabor" && $firstname == "theodore" && $password == "library"){
                $_SESSION['loggedUser'] = 3;
                header('Location: /');
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