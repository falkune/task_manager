<?php
require_once "includes/dbConnexion.php";
class TeamModel{
    public static function createTeam($name, $members){
        // connexion a la bd
        $dbConnect = DbConnexion::dbLog();
        // preparer la requete
        $request = $dbConnect->prepare("INSERT INTO teams (team_name) VALUES(:nom)");
        $request->bindParam(':nom', $name);
        $request->execute();
        
    }
}