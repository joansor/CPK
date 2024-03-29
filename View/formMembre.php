<?php
//$db = new PDO('mysql:host=localhost;dbname=NomBaseDeDonnee', 'root', '');
$trans = array("," => ".", " " => "");

if (isset($_POST['submbr'])) {
    // 'submbr' est généré en cliquant sur le bouton de validation
    if ($_POST['idMembres'] > 0) {
        // Si l'id du membre est supérieur à zéro, alors il existe, donc c'est une modification

        // $date = new DateTime();
        // $resultDate = $date->getTimestamp();
        // var_dump($resultDate);

        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
       

        $requeteUpdateMembre = "UPDATE membres SET NLicence ='".$_POST['NLicence']."',pointsClassement = '".intval($_POST['pointsClassement'])."', nomMembre ='".$_POST['nomMembre']."', prenomMembre = '".$_POST['prenomMembre']."', sexe = '".$_POST['sexe']."', dateNaissance ='". $_POST['dateNaissance']."', adresse ='". $_POST['adresse']."', cp ='". $_POST['cp']."', ville ='". $_POST['ville']."',telephoneMobile ='". $_POST['telephoneMobile']."', mail='". $_POST['mail']."', photo ='".$_POST['photo']."', payementAdhesion = '" . intval($_POST['payementAdhesion']) . "', dateInscription = NULL, password ='".$pass."',telFixe='". $_POST['telFixe']."',MembresComite = NULL, nivResponsabilite = '".$_POST['nivResponsabilite']."' WHERE idMembres =". $_POST['idMembres'];
    
        if(isset($_POST['idRepresentant'])){
        
            $requeteUpdateRepresentant = "UPDATE representant SET nomRepresentant='". $_POST['nomRepresentant']."', prenomRepresentant='".$_POST['prenomRepresentant']."', adresseRepresentant='".$_POST['adresseRepresentant']."', cpRepresentant='".$_POST['cpRepresentant']."', villeRepresentant='".$_POST['villeRepresentant']."', telephoneMobileRep='".$_POST['telephoneMobileRep']."', mailRepresentant='".$_POST['mailRepresentant']."' WHERE idRepresentant =".$_POST['idRepresentant'];

            $dbh->query($requeteUpdateRepresentant);
        }
        if(isset($_POST['idEquipe'])){

            $requeteUpdateEquipe = "UPDATE equipes SET categories ='".$_POST['categories']."',EquipeNom ='".$_POST['EquipeNom']."' WHERE idEquipe =".$_POST['idEquipe'];

            $dbh->query($requeteUpdateEquipe);

        }
        if(isset($_POST['idFonction'])){

           $requeteUpdateFonction = "UPDATE fonctions SET Fonction ='".$_POST['fonction']."' WHERE idFonction =".$_POST['idFonction'];
           $dbh->query($requeteUpdateFonction);
        }
        $dbh->query($requeteUpdateMembre);

        echo "Le membre a bien été modifié.<br/>";
    }else{
    
        $requetVerif = "SELECT mail  FROM `membres` WHERE mail ='".$_POST['mail']."'";
        
        $resultVerif = $dbh->query($requetVerif);

        while($resultatVerifMail = $resultVerif->fetchAll()){

            if($resultatVerifMail['mail'] === $_POST['mail']){

                return "L'email existe déja !";
            }
        };

      

            $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
          
            
       
                   
       $requetAddMembre = "INSERT INTO `membres` (`mail`, `password`, `photo`, `nomMembre`, `prenomMembre`, `dateNaissance`, `sexe`, `adresse`, `cp`, `ville`, `telephoneMobile`, `telFixe`, `NLicence`, `pointsClassement`, `nivResponsabilite`, `MembresComite`, `payementAdhesion`) VALUES ('".$_POST['mail']."','" . $pass . "','" . $_POST['photo'] . "','" . $_POST['nomMembre'] . "','" . $_POST['prenomMembre'] . "','" . $_POST['dateNaissance'] . "','" . $_POST['sexe'] . "','" . $_POST['adresse'] . "','" . $_POST['cp'] . "','" . $_POST['ville'] . "','" . $_POST['telephoneMobile'] . "','" . $_POST['telFixe'] . "','" .$_POST['NLicence'] . "','".intval($_POST['pointsClassement'])."','".$_POST['nivResponsabilite']."',NULL,'" . intval($_POST['payementAdhesion']) . "')";


       if(isset($_POST['nomRepresentant'])){

        $requetAddRepresentant = "INSERT INTO `representant`(nomRepresentant, prenomRepresentant, adresseRepresentant, cpRepresentant, villeRepresentant, telephoneMobileRep, mailRepresentant) VALUES ('".$_POST['nomRepresentant']."','".$_POST['prenomRepresentant']."','".$_POST['adresseRepresentant']."','".$_POST['cpRepresentant']."','".$_POST['villeRepresentant']."','".$_POST['telephoneMobileRep']."','".$_POST['mailRepresentant']."')";

        $dbh->query($requetAddRepresentant);

       }

        $dbh->query($requetAddMembre);
      
        echo "Le membre a bien été crée.<br/>";
    }

    echo "<a href='index.php?page=BDDMembre'>Retour à la liste.</a>";
}

/*Test si un idmembre dans l'url*/
if (isset($_GET['idMembres'])) {
    /*SELECTION des informations du membre ayant idMembres = $_GET['idMembres']*/
   // $requete = "SELECT * FROM `membres` WHERE `idMembres` = " . $_GET['idMembres'];

    $requete = "SELECT * FROM membres INNER JOIN joue ON joue.Membres_idMembres = membres.idMembres INNER JOIN equipes ON equipes.idEquipe = joue.Equipes_idEquipe INNER JOIN represente ON represente.idMembres = membres.idMembres INNER JOIN representant ON representant.idRepresentant = represente.idRepresentant INNER JOIN datesdefonctions ON datesdefonctions.idDatesDeFonctions = membres.idMembres INNER JOIN fonctions ON fonctions.idFonction = datesdefonctions.Fonctions_idFonction WHERE membres.idMembres =" . $_GET['idMembres'];

   
    $result = $dbh->query($requete);
    $tblresult = $result->fetchAll();
    
}

    // var_dump($tblresultEquipe);
/* Si j'ai un idMembres je fais un select dans la base de données des informations du membre avec cet id */

?>

<!----------------------------------------------------------------------------------------------------------------->

<h1 class="titreEspaceMembre" style="font-family: 'Exo 2', sans-serif; color: #e84339; font-weight: 700; font-size: 60; margin: 1%;">Création d'un nouveau membre</h1>

<!-- Bloc formulaire création d'un membre -->
<form method='POST' action='' class="row gy-2 gx-3 align-items-center" style="margin: 2%; padding: 1%; background-color: #DADDE8; border: 1px solid #C4C4C4; box-sizing: border-box; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px;">

    <input type="hidden" name="idMembres" value="<?php if (isset($_GET['idMembres'])) echo $_GET['idMembres']; ?>">

    
    <input type="hidden" name="idRepresentant" value="<?php if (isset($tblresult[0]['idRepresentant'])) echo $tblresult[0]['idRepresentant'];?>">

       
    <input type="hidden" name="idEquipe" value="<?php if (isset($tblresult[0]['idEquipe'])) echo $tblresult[0]['idEquipe'];?>">

    <input type="hidden" name="idFonction" value="<?php if (isset($tblresult[0]['idFonction'])) echo $tblresult[0]['idFonction'];?>">

    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="IdEmail">Identifiant/Email</label>
            <input name="mail" type="email" id="IdEmail" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['mail']); ?>" />
        </div>
    </div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="Password">Password</label>
            <input name="password" type="password" id="Password" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['password']); ?>" />
        </div>
    </div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="Photo">Photo</label>
            <input name="photo" type="file" id="Photo" class="form-control" accept="image/png, image/jpeg" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['photo']); ?>"/>
        </div>
    </div>
    <div></div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="Nom">Nom</label>
            <input name="nomMembre" type="text" id="Nom" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['nomMembre']); ?>" />
        </div>
    </div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="Prenom">Prenom</label>
            <input name="prenomMembre" type="text" id="Prenom" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['prenomMembre']); ?>" />
        </div>
    </div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="Naissance">Date de Naissance</label>
            <input name="dateNaissance" type="date" id="Naissance" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['dateNaissance']); ?>" />
        </div>
    </div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="Sexe">Sexe</label>
            <select name="sexe" id="Sexe" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['sexe']);?>">
                <option value="Homme" <?php if (isset($tblresult)) if (isset($tblresult[0]['sexe']) === "Homme") echo "selected" ?>>Homme</option>
                <option value="Femme" <?php if (isset($tblresult)) if (isset($tblresult[0]['sexe']) === "Femme") echo "selected" ?>>Femme</option>
            </select>
        </div>
    </div>
    <div></div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="Adresse">Adresse</label>
            <input name="adresse" type="text" id="Adresse" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['adresse']); ?>" />
        </div>
    </div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="CP">Code Postal</label>
            <input name="cp" type="text" id="CP" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['cp']); ?>" />
        </div>
    </div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="Ville">Ville</label>
            <input name="ville" type="text" id="Ville" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['ville']); ?>" />
        </div>
    </div>
    <div></div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="Tel">Tel</label>
            <input name="telephoneMobile" type="tel" id="Tel" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['telephoneMobile']); ?>" />
        </div>
    </div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="Telf">Tel fixe</label>
            <input name="telFixe" type="telf" id="Telf" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['telFixe']); ?>" />
        </div>
    </div>
    <div></div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="nomrepresentant">Nom Représentant</label>
            <input name="nomRepresentant" type="text" id="representant" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['nomRepresentant']); ?>" />
        </div>
    </div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="prenrepresentant">Prénom Représentant</label>
            <input name="prenomRepresentant" type="text" id="representant" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['prenomRepresentant']); ?>" />
        </div>
    </div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="Telrep">Tel représentant</label>
            <input name="telephoneMobileRep" type="tel" id="Telrep" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['telephoneMobileRep']); ?>" />
        </div>
    </div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="Emailrep">Email représentant</label>
            <input name="mailRepresentant" type="email" id="Emailrep" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['mailRepresentant']); ?>" />
        </div>
    </div>
    <div></div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="Adresserep">Adresse représentant</label>
            <input name="adresseRepresentant" type="text" id="Adresserep" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['adresseRepresentant']); ?>" />
        </div>
    </div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="CPrep">Code Postal représentant</label>
            <input name="cpRepresentant" type="text" id="CPrep" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['cpRepresentant']); ?>" />
        </div>
    </div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="Villerep">Ville représentant</label>
            <input name="villeRepresentant" type="text" id="Villerep" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['villeRepresentant']); ?>" />
        </div>
    </div>
    <div></div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="NLicence">N° Licence</label>
            <input name="NLicence" type="text" id="NLicence" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['NLicence']); ?>" />
        </div>
    </div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="points">Points</label>
            <input name="pointsClassement" type="text" id="points" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['pointsClassement']); ?>" />
        </div>
    </div>
    <div class="col-auto">
        <?php       
            $requeteEquipe = "SELECT categories, EquipeNom FROM equipes";  
            $resultEquipe = $dbh->query($requeteEquipe);
           
        ?>
        <div class="form-outline">
            <label class="form-label" for="Catégorie">Catégorie</label>
            <select name="categories" id="Catégorie" class="form-control" style="background: #F7F7F7" >
            <?php while ($tblresultEquipe = $resultEquipe->fetch()) { ?>
                    
                    <option value="<?php echo $tblresultEquipe['categories'];?>"
                        <?php
                            if (isset($tblresult)){
    
                                if ($tblresultEquipe['categories'] === $tblresult[0]['categories']){
                                    echo "selected";
                                }else{
                                    
                                    echo" ";
                                }
                            }
                        ?>><?php echo $tblresultEquipe['categories']; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="col-auto">
        <div class="form-outline">
        <?php $resultEquipe2 = $dbh->query($requeteEquipe); ?>
            <label class="form-label" for="Equipe">Equipe</label>
            <select name="EquipeNom" id="Equipe" class="form-control" style="background: #F7F7F7">
            <?php while ($tblresultEquipe2 = $resultEquipe2->fetch()) { ?>
                    
                <option value="<?php echo $tblresultEquipe2['EquipeNom'];?>"
                    <?php
                        if (isset($tblresult)){

                            if ($tblresultEquipe2['EquipeNom'] === $tblresult[0]['EquipeNom']){
                                echo "selected";
                            }else{
                                
                                echo" ";
                            }
                        }
                    ?>><?php echo $tblresultEquipe2['EquipeNom']; ?></option>
            <?php } ?>
            </select>
        </div>
    </div>
    <div></div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="Statut">Statut</label>
            <select name="nivResponsabilite" id="Statut" class="form-control" style="background: #F7F7F7">
                <option value="Membre" <?php
                 if (isset($tblresult)){
                   
                //   if (isset($tblresult[0]['nivResponsabilite']) === "Membre"){ 
                //   echo "";
                //   }

                  if ($tblresult[0]['nivResponsabilite'] === "Membre"){ 
                    echo "selected";
                    }
                 }else echo""; 
                   ?>>Membre</option>
                <option value="Editeur" <?php
                 if (isset($tblresult)){
                //   if (isset($tblresult[0]['nivResponsabilite']) === "Editeur"){
                //    echo "";
                // }
                 if ($tblresult[0]['nivResponsabilite'] === "Editeur"){ 
                    echo "selected";
                    }
                  } else echo""; ?>>Editeur</option>
                <option value="Admin" <?php
                 if (isset($tblresult)){
                //   if (isset($tblresult[0]['nivResponsabilite']) === "Admin"){
                //    echo "";
                //  }
                 if ($tblresult[0]['nivResponsabilite'] === "Admin"){ 
                    echo "selected";
                    }
                  } else echo""; ?>>Admin</option>
            </select>
        </div>
    </div>
    <div class="col-auto">
        <div class="form-outline">
        <?php 
        $requeteFonction = "SELECT Fonction FROM fonctions";
        $resultFonction = $dbh->query($requeteFonction);
      
        ?>
            <label class="form-label" for="Fonction">Fonction</label>
            <select name="fonction" id="Fonction" class="form-control" style="background: #F7F7F7">
            <?php while ($tblFonction = $resultFonction->fetch()) { ?>
                <option value="<?php echo $tblFonction['Fonction'];?>"
                    <?php
                        if (isset($tblresult)){

                            if ($tblFonction['Fonction'] === $tblresult[0]['Fonction']){
                                echo "selected";
                            }else{
                                
                                echo" ";
                            }
                        }
                    ?>><?php echo $tblFonction['Fonction']; ?></option>
            <?php } ?>
            </select>
        </div>
    </div>
    <div class="col-auto">
        <label class="form-check-label" for="Paiement">Paiement adhésion </label>
        <div class="form-check">
            <input name="payementAdhesion" class="form-check-input" type="checkbox" value="1" id="Paiement" checked />
        </div>
    </div>
    <div  class="col-auto">
    <label class="form-check-label" for="membreComite">Membre Comité </label>
        <div class="form-check">
            <input name="membresComite" class="form-check-input" type="checkbox" value="oui" id="membreComite"/>
        </div>
    </div>
    <div class="col-auto">
        <button type="submit" name="submbr" class="btn btn-primary">Valider</button>
    </div>
</form>