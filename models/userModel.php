<?php
require_once "database.php";
class User
{
    // methode pour s'inscrire
    public static function inscription($name, $email, $password)
    {
        // connexion bd
        $db = Database::dbConnect();

        // preparation de la requete 
        $request = $db->prepare("INSERT INTO users (name, email, password)VALUES (?, ?, ?)");
        // excuteee la requette 
        try {
            $request->execute(array($name, $email, $password));
            // rediriger vers la page login.php
            header("location: http://localhost/bliblio_POO/views/login");

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // methode pour se connecter
    public static function connexion()
    {

    }
    // methode pour se deconnecter
    public static function logout()
    {

    }
    // methode pour emprunter un livre
    public static function borrow()
    {

    }
    // methode pour se desinscrire
    public static function deleteAccount()
    {

    }
}