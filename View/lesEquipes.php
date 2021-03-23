<h1>LES ÉQUIPES</h1>
<br>
<br>
<?php
$requeteListEquipe = "SELECT * FROM `equipes`"; // Récupere la liste des équipes
$executeListEquipe = $dbh->query($requeteListEquipe); // Execute la requête

while ($resultListEquipe = $executeListEquipe->fetch()) { // Parcours les résultats de la requête
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
                <!--Récupère l'image de chaque équipe-->
            </div>
            <hr id="separation">
            <div class="col-md-5 col-lg-5">
                <h3 class="mt-4"><?php echo $resultListEquipe['EquipeNom']; //Récupère le nom de chaque équipe 
                        ?></h3>
                <?php
                $idEquipe = $resultListEquipe['idEquipe']; // récupère l'id de l'equipe

                // Requête pour la liste des membres de l'équipe par rapport à l'id de l'équipe
                $requeteMembreEquipe = "SELECT membres.nomMembre, membres.prenomMembre,joue.isCapitaine,membres.photo FROM `membres` INNER JOIN joue ON joue.Membres_idMembres = membres.idMembres INNER JOIN equipes ON equipes.idEquipe = joue.Equipes_idEquipe WHERE joue.Equipes_idEquipe =" . $idEquipe;

                $executeMembreEquipe = $dbh->query($requeteMembreEquipe);

                while ($resultMembreEquipe = $executeMembreEquipe->fetch()) { ?>

                    
                        <div class ="row mt-3">
                        <img style="width:50px;height:30px;border-radius:50%" src="<?php echo $resultMembreEquipe['photo']; ?>" alt="photo">
                            <div id="nomMembre" class="col-md-5"><?php
                            echo $resultMembreEquipe['nomMembre'] . " " . $resultMembreEquipe['prenomMembre'];?> </div>
                           <?php  if ($resultMembreEquipe['isCapitaine'] === "1") { ?>
                                <div id="capt" class ="col-md-1">C</div>
                            <?php } ?>
                        </div>
                   
                <?php } ?>
            </div>
        </div>
    </div>
    <br>
<?php } ?>