<?php
require_once "models/teamModel.php";
class TeamController{
    public static function addTeam($name, $members){
        if(TeamModel::createTeam($name, $members)){
            header("Location: http://localhost/task_manager/?url=dashboard");
        }
    }
}