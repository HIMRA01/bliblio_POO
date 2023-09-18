<?php
require_once "../../models/userModel.php";

if (isset($_POST['inscription'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // hasher le mot de passe
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
//  appeler la methode inscription de la class user
// la methode inscription etant static 
    User::inscription($name,$email,$passwordHash);
}
// pour ce connexion
if(isset($_POST[]))