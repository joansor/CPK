<!-- 
Requête à modifier : 
    Requête d'ajout de membre ligne 27

Requête a créer : 
    Requête de modification de membre ligne 19

-->

<?php
//$db = new PDO('mysql:host=localhost;dbname=NomBaseDeDonnee', 'root', '');
$trans = array("," => ".", " " => "");

if (isset($_POST['submbr'])) {
    // 'submbr' est généré en cliquant sur le bouton de validation
    if ($_POST['idMembres'] > 0) {
        // Si l'id du membre est supérieur à zéro, alors il existe, donc c'est une modification

        $requete = "UPDATE `membres` SET `nom` = '" . addslashes($_POST['nomprd']) . "', `descrciption` = '" . addslashes($_POST['descrprd']) . "', `prix` = '" . strtr($_POST['prixprd'], $trans) . "' WHERE `id_produit` = " . $_POST['idprd'];

        $dbh->query($requete);

        echo "Le membre a bien été modifié.<br/>";
    } else {
        // Si l'id du membre est <= à zéro, alors il n'existe pas, c'est un ajout

        // $requetembr = "INSERT INTO `membres` (`mail`, `password`, `photo`, `nomMembre`, `prenomMembre`, `dateNaissance`, `sexe`, `adresse`, `cp`, `ville`, `telephoneMobile`, `telFixe`, `nomRepresentant`, `prenomRepresentant`, `telephoneMobileRep`, `mailRepresentant`, `adresseRepresentant`, `cpRepresentant`, `villeRepresentant`, `NLicence`, `pointsClassement`, `categories`, `EquipeNom`, `nivResponsabilite`, `MembresComite`, `payementAdhesion`) VALUES ('" . addslashes($_POST['mail']) . "','" . addslashes($_POST['password']) . "','" . addslashes($_POST['photo']) . "','" . addslashes($_POST['nomMembres']) . "','" . addslashes($_POST['prenomMembres']) . "','" . addslashes($_POST['dateNaissance']) . "','" . addslashes($_POST['sexe']) . "','" . addslashes($_POST['adresse']) . "','" . addslashes($_POST['cp']) . "','" . addslashes($_POST['ville']) . "','" . addslashes($_POST['telephoneMobile']) . "','" . addslashes($_POST['telFixe']) . "','" . addslashes($_POST['nomRepresentant']) . "','" . addslashes($_POST['prenomRepresentant']) . "','" . addslashes($_POST['telephoneMobileRep']) . "','" . addslashes($_POST['mailRepresentant']) . "','" . addslashes($_POST['adresseRepresentant']) . "','" . addslashes($_POST['cpRepresentant']) . "','" . addslashes($_POST['villeRepresentant']) . "','" . addslashes($_POST['NLicence']) . "','" . addslashes($_POST['pointsClassement']) . "','" . addslashes($_POST['categories']) . "','" . addslashes($_POST['EquipeNom']) . "','" . addslashes($_POST['nivResponsabilite']) . "','" . addslashes($_POST['MembresComite']) . "','" . addslashes($_POST['payementAdhesion']) . "')";

        $requetetest = "INSERT INTO `membres` (`mail`, `password`, `photo`, `nomMembre`, `prenomMembre`, `dateNaissance`, `sexe`, `adresse`, `cp`, `ville`, `telephoneMobile`, `telFixe`, `NLicence`, `pointsClassement`, `nivResponsabilite`, `MembresComite`, `payementAdhesion`) VALUES ('" . addslashes($_POST['mail']) . "','" . addslashes($_POST['password']) . "','" . addslashes($_POST['photo']) . "','" . addslashes($_POST['nomMembre']) . "','" . addslashes($_POST['prenomMembre']) . "','" . addslashes($_POST['dateNaissance']) . "','" . addslashes($_POST['sexe']) . "','" . addslashes($_POST['adresse']) . "','" . addslashes($_POST['cp']) . "','" . addslashes($_POST['ville']) . "','" . addslashes($_POST['telephoneMobile']) . "','" . addslashes($_POST['telFixe']) . "','" . addslashes($_POST['NLicence']) . "','" . addslashes($_POST['pointsClassement']) . "','" . addslashes($_POST['nivResponsabilite']) . "','" . addslashes($_POST['MembresComite']) . "','" . addslashes($_POST['payementAdhesion']) . "')";

        var_dump($requetetest);

        $dbh->query($requetetest);

        //$requeterpz = "INSERT INTO `representant` (`nomRepresentant`, `prenomRepresentant`, `telephoneMobileRep`, `mailRepresentant`, `adresseRepresentant`, `cpRepresentant`, `villeRepresentant`, `adresse`, `cp`, `ville`, `telephoneMobile`, `telFixe`, `nomRepresentant`, `prenomRepresentant`, `telephoneMobileRep`, `mailRepresentant`, `adresseRepresentant`, `cpRepresentant`, `villeRepresentant`) VALUES ('" . addslashes($_POST['nomRepresentant']) . "','" . addslashes($_POST['prenomRepresentant']) . "','" . addslashes($_POST['telephoneMobileRep']) . "','" . addslashes($_POST['mailRepresentant']) . "','" . addslashes($_POST['adresseRepresentant']) . "','" . addslashes($_POST['cpRepresentant']) . "','" . addslashes($_POST['villeRepresentant']) . "')";

        //$dbh->query($requeterpz);

        echo "Le membre a bien été crée.<br/>";
    }

    echo "<a href='index.php?page=BDDMembre'>Retour � la liste.</a>";
}

/*Test si un idprd dans l'url*/
if (isset($_GET['idMembres'])) {

    /*SELECTION des informations du membre ayant idMembres = $_GET['idMembres']*/
    $requete = "SELECT * FROM `membres` WHERE `idMembres` = " . $_GET['idMembres'];
    $result = $db->query($requete);
    $tblresult = $result->fetchAll();

    /*affiche le type et le contenu d'un variable*/
    //var_dump($tblresult);
}


/* Si j'ai un idMembres je fais un select dans la base de données des informations du membre avec cet id */

?>

<!----------------------------------------------------------------------------------------------------------------->

<h1 class="titreEspaceMembre" style="font-family: 'Exo 2', sans-serif; color: #e84339; font-weight: 700; font-size: 60; margin: 1%;">Création d'un nouveau membre</h1>

<!-- Bloc formulaire création d'un membre -->
<form method='POST' action='' class="row gy-2 gx-3 align-items-center" style="margin: 2%; padding: 1%; background-color: #DADDE8; border: 1px solid #C4C4C4; box-sizing: border-box; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px;">

    <input type="hidden" name="idMembres" value="<?php if (isset($_GET['idMembres'])) echo $_GET['idMembres']; ?>">

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
            <input name="photo" type="file" id="Photo" class="form-control" accept="image/png, image/jpeg" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['photo']); ?>" />
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
            <select name="sexe" id="Sexe" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['sexe']); ?>">
                <option value="null"> </option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
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
        <div class="form-outline">
            <label class="form-label" for="Catégorie">Catégorie</label>
            <select name="categories" id="Catégorie" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['categories']); ?>">
                <option value="null"> </option>
                <option value="Cadet">Cadet</option>
                <option value="Senior">Senior</option>
                <option value="Loisir">Loisir</option>
            </select>
        </div>
    </div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="Equipe">Equipe</label>
            <select name="EquipeNom" id="Equipe" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['EquipeNom']); ?>">
                <option value="null"> </option>
                <option value="Cadet">Cadet</option>
                <option value="Senior">Senior1</option>
                <option value="Senior">Senior2</option>
                <option value="Loisir">Loisir</option>
            </select>
        </div>
    </div>
    <div></div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="Statut">Statut</label>
            <select name="nivResponsabilite" id="Statut" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['nivResponsabilite']); ?>">
                <option value="null"> </option>
                <option value="Membre">Membre</option>
                <option value="Editeur">Editeur</option>
                <option value="Admin">Admin</option>
            </select>
        </div>
    </div>
    <div class="col-auto">
        <div class="form-outline">
            <label class="form-label" for="Fonction">Fonction</label>
            <select name="MembresComite" id="Fonction" class="form-control" style="background: #F7F7F7" value="<?php if (isset($tblresult)) echo stripslashes($tblresult[0]['MembresComite']); ?>">
                <option value="null"> </option>
                <option value="Président">Président</option>
                <option value="Président">Vice-Président</option>
                <option value="Secretaire">Secretaire</option>
                <option value="Tresorier">Tresorier</option>
                <option value="Entraineur">Entraineur des jeunes</option>
            </select>
        </div>
    </div>
    <div class="col-auto">
        <label class="form-check-label" for="Paiement">Paiement adhésion </label>
        <div class="form-check">
            <input name="payementAdhesion" class="form-check-input" type="checkbox" value="" id="Paiement" checked />
        </div>
    </div>
    <div></div>
    <div class="col-auto">
        <button type="submit" name="submbr" class="btn btn-primary">Valider</button>
    </div>
</form>