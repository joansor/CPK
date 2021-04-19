<h1 id="titreEquipe">LES ÉQUIPES</h1>
<br>
<br>
<?php
$requeteListEquipe = "SELECT * FROM  equipes"; // Récupere la liste des équipes
$executeListEquipe = $dbh->query($requeteListEquipe); // Execute la requête

while ($resultListEquipe = $executeListEquipe->fetch()) { // Parcours les résultats de la requête
?>
    <div class="sous-titre">
        <div class="cercle"></div>
        <h2><?php echo $resultListEquipe['categories'] ?></h2>
    </div>
    <br>
    <div id="support" class="container col-md-12 col-lg-12 col-md-12 col-sd-12 col-12">
        <div class="row">
            <div class="col-md-5 col-lg-5 col-sd-12 col-12 d-flex justify-content-center">
                <img id="photoGroup" src="<?php echo $resultListEquipe['imageEquipe']; ?>" alt="photo Groupe">
                <!--Récupère l'image de chaque équipe-->
            </div>
            <hr id="separation">
            <div class="col-md-5 col-lg-5 col-sd-12 col-12">
                <h3 class="nomEquipe"><?php echo $resultListEquipe['EquipeNom']; //Récupère le nom de chaque équipe 
                        ?></h3>
                <?php
                $idEquipe = $resultListEquipe['idEquipe']; // récupère l'id de l'equipe

                // Requête pour la liste des membres de l'équipe par rapport à l'id de l'équipe
                $requeteMembreEquipe = "SELECT membres.nomMembre, membres.prenomMembre,membres.photo,joue.isCapitaine FROM `membres` INNER JOIN joue ON joue.Membres_idMembres = membres.idMembres INNER JOIN equipes ON equipes.idEquipe = joue.Equipes_idEquipe WHERE joue.Equipes_idEquipe =" . $idEquipe;

                $executeMembreEquipe = $dbh->query($requeteMembreEquipe);

                while ($resultMembreEquipe = $executeMembreEquipe->fetch()) { ?>

                    
                        <div class ="row mt-3">
                        <div class="col-md-2 col-lg-2 col-sd-1 col-1 containerMembre">
                            <img class="photoMembre" src="<?php echo "http://localhost/CPK/assets/images/".$resultMembreEquipe['photo']?>" alt="photo">
                        </div>
                            <div id="nomMembre" class="col-md-6 col-lg-6 col-sd-6 col-6 pl-0"><?php
                            echo $resultMembreEquipe['nomMembre'] . " " . $resultMembreEquipe['prenomMembre'];?></div>
                           <?php  if ($resultMembreEquipe['isCapitaine'] === "1") { ?>
                                <div id="capt" class ="col-md-1 col-1 col-sd-1 col-lg-1">C</div>
                            <?php } ?>
                        </div>
        
                <?php } ?>
            </div>
        </div>
    </div>
    <br>
<?php } ?>