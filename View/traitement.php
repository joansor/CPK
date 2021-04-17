<?php

/***************** Connexion******************************/
if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email !== "" && $password !== "") {
        // $requete = "SELECT DISTINCT mail , nivResponsabilite, password FROM membres where 
        //       mail = '" . $email . "' and password = '" . $password . "' ";

        $requete = "SELECT DISTINCT `mail`,`nivResponsabilite`,`password` FROM `membres` WHERE `mail`= '" . $email . "'";

        $exec_requete = $dbh->query($requete);
        $reponse = $exec_requete->fetch();
       
        if ($reponse['mail'] === $email && password_verify($password,$reponse['password'])) {
             // nom d'utilisateur et mot de passe correctes
            session_start();
            $_SESSION["connected"] = true;
            $_SESSION['nivResponsabilite'] = $reponse['nivResponsabilite'];
            var_dump($_SESSION['nivResponsabilite']);
            $_SESSION['mail'] = $reponse['mail'];
            var_dump($_SESSION['mail']);

            header('Location: http://localhost/CPK/index.php?page=espaceMembre');
        } else {
            echo "Utilisateur ou mot de passe incorrect.";
            // utilisateur ou mot de passe incorrect
        }
    } else {
        echo "Utilisateur ou mot de passe vide.";
        // utilisateur ou mot de passe vide
    }
} else if (isset($_POST['deco'])) { // Déconnexion 

    $_SESSION["connected"] = false;
    $_SESSION['mail'] = "";
    $_SESSION['nivResponsabilite'] = "";
    session_destroy();
    header('Location: http://localhost/CPK/index.php?page=accueil');
} else {

    echo "Erreur mot de passe ou identifiant.";
    header('Location: http://localhost/CPK/index.php?page=accueil');
}
