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
        
        // recuperer l'identifiant de la derniere insertion
        $lastInsertedId = $dbConnect->lastInsertId();
        // pour chaque element du tableau members il faut faire une insertion dans la table user_teams
        foreach($members as $member){
            // preparer la requete
            $request = $dbConnect->prepare("INSERT INTO user_teams (user_id, team_id) VALUES(:user, :team)");
            $request->bindParam(':user', $member);
            $request->bindParam(':team', $lastInsertedId);
            try{
                $request->execute();
            }catch(PDOException $e){
                return "Internal error ";
            }
        }
        return true;
    }
}