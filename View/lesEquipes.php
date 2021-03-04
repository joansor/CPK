<?php// include("pdo.php") ?>
<h1>LES ÉQUIPES</h1>
<br>
<br>
<?php
// $requete = "SELECT equipes.EquipeNom,equipes.categories, equipes.imageEquipe, membres.nomMembre,membres.prenomMembre,joue.isCapitaine FROM `equipes` INNER JOIN joue ON joue.Equipes_idEquipe = equipes.idEquipe INNER JOIN membres ON membres.idMembres = joue.Membres_idMembres";
$requeteListEquipe = "SELECT `categories`,`EquipeNom`,`imageEquipe` FROM `equipes`";

$requeteMembreEquipe = "SELECT joue.Membres_idMembres,membres.nomMembre,membres.prenomMembre,joue.isCapitaine,joue.Equipes_idEquipe FROM `joue` INNER JOIN equipes ON joue.Equipes_idEquipe = equipes.idEquipe INNER JOIN membres ON membres.idMembres = joue.Membres_idMembres";

$executeListEquipe = $dbh->query($requeteListEquipe);
$executeMembreEquipe = $dbh->query($requeteMembreEquipe);
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
                while ($resultMembreEquipe = $executeMembreEquipe->fetch()) {
                    if ($resultMembreEquipe['Equipes_idEquipe'] === $resultMembreEquipe['Membres_idMembres']) { ?>
                        <div><?php echo $resultMembreEquipe['nomMembre'] ?> </div>
                        <div><?php echo $resultMembreEquipe['prenomMembre']; ?></div>
                <?php }
                } ?>
            </div>
        </div>
    </div>
    <br>
<?php } ?>