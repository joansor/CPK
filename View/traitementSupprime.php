<?php 
if(isset($_GET['idMembres'])){

    $requeteDeleteMembre = "DELETE FROM membres WHERE idMembres ='".$_GET['idMembres']."'";
    $dbh->query($requeteDeleteMembre);

    echo"La suppression c'est déroulée avec succès !";
     
    header('Location: http://localhost/CPK/index.php?page=BDDMembre');
}