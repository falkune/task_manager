<?php
require_once "models/taskModel.php";
class TaskController{
    // methode pour recuperer la liste des taches d'un user
    public static function getUserTaskList($idUser){
        $tasks = TaskModel::userTasks($idUser);
        return $tasks;
    }
    // methode pour enregistrer une nouvelle tache
    public static function addTask($takName, $taskDescription, $taskDate,$taskUserId){
        if(TaskModel::saveTask($takName, $taskDescription, $taskDate,$taskUserId)){
            header("Location: http://localhost/task_manager/?url=task_list");
        }
    }
}