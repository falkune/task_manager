<?php
require_once "models/teamModel.php";
class TeamController{
    public static function addTeam($name, $members){
        TeamModel::createTeam($name, $members);
    }
}