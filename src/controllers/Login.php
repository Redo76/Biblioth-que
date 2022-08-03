<?php
class Login{

    public function displayLogin(){

        var_dump($_SESSION);
        require("../templates/login.php");
        unset($_SESSION['login_error']);
    }


    public function submitLogin(){

        require("../src/pdo/PDO.php");

        
        
        $lastname = strip_tags($_POST['lastname']); 
        $firstname = strip_tags($_POST['firstname']); 
        $password = strip_tags($_POST['password']);

        $adminDB = $db -> prepare("SELECT * FROM admin WHERE first_name = :firstName");
        $adminDB -> execute(['firstName' => $firstname]);
        $admin = $adminDB -> fetchAll();

        $currentAdmin = $admin[0];
        var_dump($currentAdmin);
        var_dump($currentAdmin['password']);


        if (isset($lastname) && isset($firstname) && isset($password)) {
            if($lastname == $currentAdmin['last_name'] && $firstname == $currentAdmin['first_name']){
                if ($password == $currentAdmin['password']) {
                    $_SESSION['loggedUser'] = $firstname;
                    header('Location: ../index.php');
                }
                else {
                    // header('Location: ../index.php');
                    $_SESSION['login_error'] = 2;
                } 
            } 
            else {
                header('Location: ../index.php');   
                $_SESSION['login_error'] = 1;
            }  
        }

        var_dump($_SESSION);

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