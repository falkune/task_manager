<?php
session_start();
require_once "controllers/userController.php";
require_once "controllers/teamController.php";
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
        if(!isset($_SESSION["user_info"])){
            header("Location: http://localhost/task_manager/?url=login");
        }
        require_once "views/dashboard.php";
        break;
    case "logout": # la deconnexion
        UserController::logout();
        break;
    case "add_team":
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $teamName = $_POST['nom'];
            $teamMembers = $_POST['members'];
            TeamController::addTeam($teamName, $teamMembers);
        }else{
            $listUser = UserController::getUserList();
            require_once "views/add_team.php";
        }
        break;
    default:
        echo "404 cette page n'existe pas!";
}