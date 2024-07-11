<?php
require_once "includes/dbConnexion.php";
// definition de la classe userModel
class UserModel{
    public static function inscription($lastName, $firstName, $email, $password){
        // etablir la connexion avec la base de donnees
        $dbConnect = DbConnexion::dbLog();
        // preparer la requete
        $request = $dbConnect->prepare("INSERT INTO users (lastname, firstname, email, password) VALUES (:nom, :prenom, :mail, :passwd)");
        // executer la requete
        $request->bindParam(':nom', $lastName);
        $request->bindParam(':prenom', $firstName);
        $request->bindParam(':mail', $email);
        $request->bindParam(':passwd', $password);
        try{
            $request->execute();
            return "201 ok";
        }catch(PDOException $e){
            return "500 internal error!";
        }
    }

    // definir une methode pour se connecter a l'appli
    public static function connexion($email, $password){
        // etablir la connexion avec la base de donnees
        $dbConnect = DbConnexion::dbLog();
        // preparer la requete
        $request = $dbConnect->prepare("SELECT * FROM users WHERE email = :mail");
        $request->bindParam(":mail", $email);
        // executer la requete
        $request->execute();
        // recuperer le resultat dans un tableau
        $user = $request->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    public static function userlist(){
        // etablir la connexion avec la bd
        $dbConnect = DbConnexion::dbLog();
        // preparer la requete
        $request = $dbConnect->prepare("SELECT * FROM users");
        // executer la requete
        $request->execute();
        // recuperer le resultat dans un tableau
        $user = $request->fetchAll(PDO::FETCH_ASSOC);
        return $user;
    }
}