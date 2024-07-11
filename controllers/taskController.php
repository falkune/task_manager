<?php
require_once "models/taskModel.php";
class TaskController{
    // methode pour recuperer la liste des taches d'un user
    public static function getUserTaskList($idUser){
        $tasks = TaskModel::userTasks($idUser);
        return $tasks;
    }
}