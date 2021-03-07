<h1>LES ÉQUIPES</h1>
<br>
<br>
<?php

$requeteListEquipe = "SELECT * FROM `equipes`";

$executeListEquipe = $dbh->query($requeteListEquipe);

while ($resultListEquipe = $executeListEquipe->fetch()) {
?>

    <div class="sous-titre">
        <div class="cercle"></div>
        <h2><?php echo $resultListEquipe['categories'] ?></h2>
    </div>
    <br>
    <div id="support" class="container col-md-12 col-lg-12">
        <div class="row">
            <div class="col-md-5 col-lg-5">
                <img id="photoGroup" src="<?php echo $resultListEquipe['imageEquipe']; ?>" alt="photo Groupe">
            </div>
            <hr id="separation">
            <div class="col-md-5 col-lg-5">
                <div><?php echo $resultListEquipe['EquipeNom']; ?></div>

                <?php
                
                $idEquipe = $resultListEquipe['idEquipe'];

                $requeteMembreEquipe = "SELECT membres.nomMembre, membres.prenomMembre FROM `membres` INNER JOIN joue ON joue.Membres_idMembres = membres.idMembres INNER JOIN equipes ON equipes.idEquipe = joue.Equipes_idEquipe WHERE joue.Equipes_idEquipe =".$idEquipe;

                $executeMembreEquipe = $dbh->query($requeteMembreEquipe);

                while ($resultMembreEquipe = $executeMembreEquipe->fetch()) { ?>
                        
                        <div><?php echo $resultMembreEquipe['nomMembre']." ".$resultMembreEquipe['prenomMembre']; ?> </div>
                <?php
                } ?>
            </div>
        </div>
    </div>
    <br>
<?php } ?>