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
    public static function saveTask($takName, $taskDescription, $taskDate,$taskUserId){
        // etablir la connexion avec la bd
        $dbConnect = DbConnexion::dbLog();
        // preparer la requete
        $request = $dbConnect->prepare("INSERT INTO tasks (task_name, description, end_date, id_user) VALUES (:nom, :task_description, :task_date, :user)");
        $request->bindParam(':task_name', $takName);
        $request->bindParam(':task_description', $taskDescription);
        $request->bindParam(':task_date', $taskDate);
        $request->bindParam(':user', $taskUserId);

        // executer la requete
        $request->execute();

        return true;
    }
}