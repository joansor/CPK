<h1>Espace Membre</h1>
<?php
if (isset($_SESSION['mail']) && $_SESSION["connected"] === true) {
	$user = $_SESSION['mail'];
	// afficher un message
	echo "Bonjour " . $user . ", vous êtes connecté";

	$requete = "SELECT membres.*, representant.nomRepresentant,representant.prenomRepresentant,equipes.EquipeNom FROM `membres` INNER JOIN joue ON joue.Membres_idMembres = membres.idMembres INNER JOIN equipes ON equipes.idEquipe = joue.Equipes_idEquipe INNER JOIN represente ON represente.idMembres = membres.idMembres INNER JOIN representant ON representant.idRepresentant = represente.idRepresentant WHERE membres.mail = '$user'";

	$execute = $dbh->query($requete); // Execute la requête
	while ($result = $execute->fetch()) { // Parcours les résultats de la requête
?>
		<div class="d-flex justify-content-center">
			<div id="profil" class="col-md-9 col-sd-9 row p-4">
				<div class="col-md-1 col-sd-1 col-lg-1">
					<img id="photo" src="<?php echo $result['photo'] ?>" alt="photo">
				</div>
				<table class="tableEspaceMembre col-md-7 col-sd-7 col-lg-3">
					<tbody>
						<tr>
							<td>Prénom Nom : <?php echo $result['prenomMembre'] . " " . $result['nomMembre'] ?></td>
						</tr>
						<tr>
							<td>Date de naissance : <?php echo $result['dateNaissance'] ?></td>
						</tr>
						<tr>
							<td>Sexe : <?php echo $result['sexe'] ?></td>
						</tr>
						<tr>
							<td>Adresse : <?php echo $result['adresse'] ?></td>
						</tr>
						<tr>
							<td>Code postal : <?php echo $result['cp'] ?></td>
						</tr>
						<tr>
							<td>Ville : <?php echo $result['ville'] ?></td>
						</tr>
						<tr>
							<td>Mail : <?php echo $result['mail'] ?></td>
						</tr>
						<tr>
							<td>Tel : <?php echo $result['telephoneMobile'] ?></td>
						</tr>
						<tr>
							<td>Représentant légal : <?php echo $result['nomRepresentant'] . " " . $result['prenomRepresentant'] ?></td>
						</tr>
					</tbody>
				</table>
				<hr id="separation2">
				<table class="tableEspaceMembre col-md-4 col-sd-4 col-lg-3">
					<tbody>
						<tr>
							<td>N°Licence : <?php echo $result['NLicence'] ?></td>
						</tr>
						<tr>
							<td>Statut : <?php if ($result['nivResponsabilité'] = 1) {
												echo "Admin";
											} else if ($result['nivResponsabilité'] = 2) {
												echo "Editeur";
											} else {
												echo "Membre";
											} ?></td>
						</tr>
						<tr>
							<td>Fonction : <?php if ($result['MembresComite'] = 1) {
												echo "Président";
											} else if ($result['MembresComite'] = 2) {
												echo "Vice-Président";
											} else if ($result['MembresComite'] = 3) {
												echo "Secrétaire";
											} else if ($result['MembresComite'] = 4) {
												echo "Trésorier";
											} else if ($result['MembresComite'] = 5) {
												echo "Entraineur des jeunes";
											} else {
												echo "/";
											} ?></td>
						</tr>
						<tr>
							<td>Equipe : <?php echo $result['EquipeNom'] ?></td>
						</tr>
						<tr>
							<td>Classement point : <?php echo $result['pointsClassement'] ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<!-- Bloc bouton accés BDD -->
	<?php }
	if ($_SESSION['mail'] && $_SESSION["connected"] === true && $_SESSION['nivResponsabilite'] === "1") {
	?>
		<div class="container p-4 col-md-12 col-sd-12 col-lg-12 d-flex justify-content-center">
			<div>
				<a href="index.php?page=BDDMembre"><button type="button" class="btn btn-primary" style="display: inline-block;"> Accés gestion base de données des membres</button></a>
			</div>
		</div>

	<?php } ?>
<?php } else { ?>
	<div class="d-flex justify-content-center">
		<div class="col-md-6 col-sd-6 col-lg-6 mb-5">
			<!-- Bloc Connexion -->
			<form action="http://localhost/CPK/index.php?page=traitement" method="post">
				<div id="panelConnexion" class="p-5 text-center bg-image">
					<div class="form-outline">
						<input type="email" name="email" id="typeEmail" class="form-control" required />
						<label class="form-label" for="typeEmail">Identifiant</label>
					</div>
					<div class="form-outline">
						<input type="password" name="password" id="typePassword" class="form-control" required />
						<label class="form-label" for="typePassword">Mot de passe</label>
					</div>
					<div style="display: inline-block;">
						<div class="form-check" style="display: inline-block; margin-right: 25px;">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked />
							<label class="form-check-label" for="flexCheckChecked">Se souvenir de moi</label>
						</div>
						<button type="submit" class="btn btn-primary" style="display: inline-block;">Connexion</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php } ?>