<?php
if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email !== "" && $password !== "") {
        $requete = "SELECT DISTINCT mail , nivResponsabilite, password FROM membres where 
              mail = '" . $email . "' and password = '" . $password . "' ";

        $exec_requete = $dbh->query($requete);
        $reponse = $exec_requete->fetch();

        if ($reponse['mail'] === $email && $reponse['password'] ===  $password) { // nom d'utilisateur et mot de passe correctes
            session_start();
            echo "connexion";
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
} else {
    echo "Erreur mot de passe ou identifiant.";
    header('Location: http://localhost/CPK/index.php?page=accueil');
}
