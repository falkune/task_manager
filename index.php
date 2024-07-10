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
            // 
            UserController::login($email, $password);
        }else{
            require_once "views/login.php";
        }
        break;
    default:
        echo "404 cette page n'existe pas!";
}