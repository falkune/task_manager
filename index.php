<?php
session_start();
require_once "controllers/userController.php";
// $url = null;
// if(isset($_GET['url'])){
//     $url =  $_GET['url'];
// }else{
//     $url =  "login";
// }
$url = isset($_GET['url']) ? $_GET['url'] : "login";

switch($url){
    case "register":
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $lastName = $_POST['nom'];
            $firstName = $_POST['prenom'];
            $email = $_POST['email'];
            $password = $_POST['mdp'];

            $user = new UserController($lastName,$firstName,$email,$password);
            $user->register();
        }else{
            require_once "views/register.php";
        }
        break;
    case "login":
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $email = $_POST['email'];
            $password = $_POST['mdp'];
            UserController::login($email, $password);
        }else{
            // si l'utilisateur demande a afficher la page de connexion alors que il y a deja une session active il faut le rediriger vers le dashboard
            if(isset($_SESSION["user_info"])){
                require_once "views/dashboard.php";
            }else{
                require_once "views/login.php";
            }
        }
        break;
    case "dashboard": # affichage du dashboard
        require_once "views/dashboard.php";
        break;
    case "logout": # la deconnexion
        UserController::logout();
        break;
    default:
        echo "404 cette page n'existe pas!";
}