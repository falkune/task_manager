<?php
require_once "models/taskModel.php";
class TaskController{
    // methode pour recuperer la liste des taches d'un user
    public static function getUserTaskList($idUser){
        $tasks = TaskModel::userTasks($idUser);
        return $tasks;
    }
    // methode pour enregistrer une nouvelle tache
    public static function addTask($taskName, $taskDescription, $taskDate, $taskUserId){
        if(TaskModel::saveTask($taskName, $taskDescription, $taskDate, $taskUserId)){
            header("Location: http://localhost/task_manager/?url=task_list");
        }
    }

    // methode pour terminer une task
    public static function endTask($taskId){
        if(TaskModel::markTaskEnd($taskId)){
            header("Location: http://localhost/task_manager/?url=task_list");
        }
    }
}