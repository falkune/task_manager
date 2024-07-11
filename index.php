<?php
session_start();
require_once "controllers/userController.php";
require_once "controllers/teamController.php";
require_once "controllers/taskController.php";

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

            if(isset($_POST['remember']) && $_POST['remember'] == "remember me"){
                $exprireTime = time() + (2 * 24 * 60 * 60);
                $domaine = "http://localhost/task_manager/";
                setcookie("login", $email, $exprireTime, $domaine);
                setcookie("mdp", $password, $exprireTime, $domaine);
            }

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
    case "task_list":
        if(isset($_SESSION['user_info'])){
            $idUser = $_SESSION['user_info']['id'];
            $tasks = TaskController::getUserTaskList($idUser);
            require_once "views/task_list.php";
        }else{
            header("Location: http://localhost/task_manager/?url=login");
        }
        break;
    case "add_task":
        if(isset($_SESSION['user_info'])){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $taskName = $_POST["nom"];
                $taskDescription = $_POST["description"];
                $taskDate = $_POST["date"];
                $taskUserId = $_SESSION['user_info']['id'];
                TaskController::addTask($taskName, $taskDescription, $taskDate, $taskUserId);
            }else{
                require_once "views/add_task.php";
            }
        }else{
            header("Location: http://localhost/task_manager/?url=login");
        }
        break;
    case "end_task":
        $taskId = $_GET['task_id'];
        TaskController::endTask($taskId);
        break;
    case "delete_task":
        $taskId = $_GET['task_id'];
        TaskController::deleteTask($taskId);
        break;
    case "update_task":
        if(isset($_SESSION['user_info'])){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $taskName = $_POST["nom"];
                $taskDescription = $_POST["description"];
                $taskDate = $_POST["date"];
                $taskUserId = $_SESSION['user_info']['id'];
                TaskController::addTask($taskName, $taskDescription, $taskDate, $taskUserId);
            }else{
                $taskId = $_GET['task_id'];
                $task = TaskController::getTaskInfos($taskId);
                require_once "views/update_task.php";
            }
        }else{
            header("Location: http://localhost/task_manager/?url=login");
        }
        break;
    default:
        echo "404 cette page n'existe pas!";
}