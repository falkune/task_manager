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

    // fonction pour supprimer une task
    public static function deleteTask($taskId){
        if(TaskModel::removeTask($taskId)){
            header("Location: http://localhost/task_manager/?url=task_list");
        }
    }

    // methode pour recuperer les infos d'une task
    public static function getTaskInfos($taskId){
        $taskInfos = TaskModel::getInfoTask($taskId);
        return $taskInfos;
    }
}