<?php
require_once "includes/dbConnexion.php";
class TaskModel{
    public static function userTasks($idUser){
        // etablir la connexion avec la bd
        $dbConnect = DbConnexion::dbLog();
        // preparer la requete
        $request = $dbConnect->prepare("SELECT * FROM tasks WHERE user_id = :user");
        $request->bindParam(':user', $idUser);
        // executer la requete
        $request->execute();
        // recuperer le resultat dans un tableau
        $tasks = $request->fetchAll();
        return $tasks;
    }
}