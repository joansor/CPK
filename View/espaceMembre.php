<?php
if (isset($_SESSION['mail']) && $_SESSION["connected"] === true) {
	$user = $_SESSION['mail'];
	// afficher un message
	echo "Bonjour " . $user . ", vous êtes connecté";
?>
	<div id="profil" class="p-5 text-center bg-image" style="margin-left: auto; margin-right: auto; margin-top:100px; background-color: #DADDE8; border: 1px solid #C4C4C4; box-sizing: border-box; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px; height: auto; width:900px;">
		<img src="/assets/images/imgPhoto.webp" style="display: inline-block; position: absolute; top: 25%; right:25%; height: 135px; width:105px " alt="photo">
		<table style="display: inline-block; margin-left: auto; margin-right:auto; border-right: 2px solid #e84339;">

			<tr>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 700; padding: 5px; ">Bourne</td>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 700; padding: 5px; ">Jason</td>
			</tr>
			<tr>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">Date de naissance</td>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">18/01/2005</td>
			</tr>
			<tr>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">Sexe</td>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">M</td>
			</tr>
			<tr>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">Adresse</td>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">22 rue des lilas</td>
			</tr>
			<tr>
				<td></td>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">68260</td>
			</tr>
			<tr>
				<td></td>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">Kingersheim</td>
			</tr>
			<tr>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">Mail</td>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">bourne.jason@wanadoo.fr</td>
			</tr>
			<tr>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">Tel</td>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">06.00.00.00.00</td>
			</tr>
			<tr>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">Représentant légal</td>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">Bourne Patrick</td>
			</tr>
		</table>


		<table style="display: inline-block; margin-bottom: auto; margin-left: 3%; margin-right:auto;">
			<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">N°Licence</td>
			<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">6815572</td>
			</tr>
			<tr>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">Statut</td>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">Membre</td>
			</tr>
			<tr>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">Fonction</td>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">/</td>
			</tr>
			<tr>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">Equipe</td>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">Cadets</td>
			</tr>
			<tr>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">Classement point</td>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">710</td>
			</tr>
		</table>
	</div>
	<!-- Bloc bouton accés BDD -->
	<?php if(isset($_SESSION['mail']) && $_SESSION["connected"] === true && $_SESSION['nivResponsabilite'] === "3"){ ?>
	<div class="p-5 text-center bg-image" style="margin-left: auto; margin-right: auto;">
		<div>
			<a href="index.php?page=BDDMembre"><button type="button" class="btn btn-primary" style="display: inline-block;"> Accés gestion base de données des membres</button></a>
		</div>
	</div>

	<?php } ?>
<?php } else {

?>
	<div class="pageEspaceMembre">
		<!-- Titre page Espace Membre -->
		<h1>Espace Membre</h1>
		<!-- Bloc Connexion -->
		<form action="http://localhost/CPK/index.php?page=traitement" method="post">
			<div class="p-5 text-center bg-image" style="margin-left: auto; margin-right: auto; background-color: #DADDE8; border: 1px solid #C4C4C4; box-sizing: border-box; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px; height: 200px; width:500px">
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
<?php } ?>