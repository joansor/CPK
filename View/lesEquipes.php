<?php// include("pdo.php") ?>
<h1>LES ÉQUIPES</h1>
<br>
<br>
<div class="sous-titre">
    <div class="cercle"></div>
    <h2>Séniors</h2>
</div>
<br>
<?php

$requete = "SELECT * FROM equipes";
//$requete = "SELECT equipes.EquipeNom, equipes.imageEquipe, membres.nomMembre,membres.prenomMembre,joue.isCapitaine FROM `equipes` INNER JOIN joue ON joue.Equipes_idEquipe = equipes.idEquipe INNER JOIN membres ON membres.idMembres = joue.Membres_idMembres WHERE equipes.EquipeNom = senior";

$result = $dbh->query($requete);


// faire requête pour récuperer les données et les affichers dans une boucle pour chaque équipe seniors

// faire requête pour récuperer les données et les affichers dans une boucle pour chaque équipe benjamin

// faire requête pour récuperer les données et les affichers dans une boucle pour chaque équipe cadet

// faire requête pour récuperer les données et les affichers dans une boucle pour chaque équipe minime
while ($ligne = $result->fetch()) {

?>
    <td><?php echo $ligne['idEquipe']; ?></td>
    <td><?php echo $ligne['EquipeNom']; ?></td>
    <td><?php echo $ligne['imageEquipe']; ?></td>

    <!--<div id="support" class="container">
    <div class="rows">
    <?php } ?>

        <?php echo $result; ?>
    </div>
</div>-->