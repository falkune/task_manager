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

    // methode pour sauvegarder une tache dans la bd
    public static function saveTask($taskName, $taskDescription, $taskDate, $taskUserId){
        // etablir la connexion avec la bd
        $dbConnect = DbConnexion::dbLog();
        // preparer la requete
        $request = $dbConnect->prepare("INSERT INTO tasks (task_name, description, end_date, user_id) VALUES (:nom, :task_description, :task_date, :user)");
        $request->bindParam(':nom', $taskName);
        $request->bindParam(':task_description', $taskDescription);
        $request->bindParam(':task_date', $taskDate);
        $request->bindParam(':user', $taskUserId);

        // executer la requete
        $request->execute();

        return true;
    }

    // methode pour marquer une task comme terminee
    public static function markTaskEnd($taskId){
        // etablir la connexion avec la bd
        $dbConnect = DbConnexion::dbLog();
        // preparer la requete
        $request = $dbConnect->prepare("UPDATE tasks SET statut = ? WHERE id = ?");
        // $request->bindParam(':statut_value', "expired");
        // $request->bindParam(':task_id', $taskId);

        // executer la requete
        $request->execute(["expired", $taskId]);
        return true;
    }

    // methode pour supprimer une tache de la table
    public static function removeTask($taskId){
        // etablir la connexion avec la bd
        $dbConnect = DbConnexion::dbLog();
        // preparer la requete
        $request = $dbConnect->prepare("DELETE FROM tasks WHERE id = ?");
        // executer la requete
        $request->execute([$taskId]);
        return true;
    }

    // methode pour recuperer les informations d'une tache 
    public static function getInfoTask($taskId){
        // etablir la connexion avec la bd
        $dbConnect = DbConnexion::dbLog();
        // preparer la requete
        $request = $dbConnect->prepare("SELECT * FROM tasks WHERE id = ?");
        // executer la requete
        $request->execute([$taskId]);
        // recuperer le resultat dans un tableau
        $tastInfos = $request->fetch();
        return $tastInfos;
    }
}