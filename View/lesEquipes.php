<?php// include("pdo.php") ?>
<h1>LES ÉQUIPES</h1>
<br>
<br>
<?php
$requete = "SELECT equipes.EquipeNom, equipes.imageEquipe, membres.nomMembre,membres.prenomMembre,joue.isCapitaine FROM `equipes` INNER JOIN joue ON joue.Equipes_idEquipe = equipes.idEquipe INNER JOIN membres ON membres.idMembres = joue.Membres_idMembres";

$execute = $dbh->query($requete);

while ($result = $execute->fetch()) {
?>

    <div class="sous-titre">
        <div class="cercle"></div>
        <h2><?php echo $result['EquipeNom']; ?></h2>
    </div>
    <br>
    <div id="support" class="container col-md-12 col-lg-12">
        <div class="row">
            <div class="col-md-5 col-lg-5">
                <img id="photoGroup" src="<?php echo $result['imageEquipe']; ?>" alt="photo Groupe">
            </div>
            <hr id="separation">
            <div class="col-md-5 col-lg-5">
                <div><?php echo $result['nomMembre']; ?></div>
                <div><?php echo $result['prenomMembre']; ?></div>
            </div>
        </div>
    </div>
    <br>
<?php } ?>