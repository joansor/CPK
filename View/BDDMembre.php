<div class="pageEspaceMembre">
	<!-- Titre page BDD des Membres -->
	<h1 class="titreEspaceMembre" style="font-family: 'Exo 2', sans-serif; color: #e84339; font-weight: 700; font-size: 60; margin: 1%;">Base de données des membres</h1>

	<!-- Bloc recherche d'un membre -->
	<form class="row gy-2 gx-3 align-items-center" style="margin: 2%; padding: 1%; background-color: #DADDE8; border: 1px solid #C4C4C4; box-sizing: border-box; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px; width: 30%">
		<div class="input-group">
			<div class="form-outline">
				<input type="search" id="form1" class="form-control" />
				<label class="form-label" for="form1">Rechercher un membre</label>
			</div>
			<button type="button" class="btn btn-primary">
				<i class="fas fa-search"></i>
			</button>
			<a class="btn btn-primary" style="margin-left: 2%;" href="index.php?page=formMembre">Créer un nouveau membre</a>
		</div>
	</form>

	<!-- Bloc BDD Membres -->

	<?php

	//$requete = "SELECT * FROM `membres`";
	$requete = "SELECT * FROM `membres` INNER JOIN joue ON joue.Membres_idMembres = membres.idMembres INNER JOIN equipes ON equipes.idEquipe = joue.Equipes_idEquipe INNER JOIN represente ON represente.idMembres = membres.idMembres INNER JOIN representant ON representant.idRepresentant = represente.idRepresentant";

	$tblmb = $dbh->query($requete);

	?>
	<div class="p-5 text-center bg-image" style="margin: 2%; background-color: #DADDE8; border: 1px solid #C4C4C4; box-sizing: border-box; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px;">
		<div class="table-responsive">
			<table class="table table-striped table-hover table-sm">
				<thead>
					<tr>
						<th scope="col">Id Membre</th>
						<th scope="col">Password</th>
						<th scope="col">Nom</th>
						<th scope="col">Prénom</th>
						<th scope="col">Date de Naissance</th>
						<th scope="col">Sexe</th>
						<th scope="col">Adresse</th>
						<th scope="col">CP</th>
						<th scope="col">Ville</th>
						<th scope="col">Tel</th>
						<th scope="col">Tel fixe</th>
						<th scope="col">Nom Représentant</th>
						<th scope="col">Prénom Représentant</th>
						<th scope="col">Tel représentant</th>
						<th scope="col">Email représentant</th>
						<th scope="col">Adresse représentant</th>
						<th scope="col">CP représentant</th>
						<th scope="col">Ville représentant</th>
						<th scope="col">Photo</th>
						<th scope="col">N°Licence</th>
						<th scope="col">Points</th>
						<th scope="col">Catégorie</th>
						<th scope="col">Equipe</th>
						<th scope="col">Statut</th>
						<th scope="col">Fonction</th>
						<th scope="col">Paiement</th>
						<th scope="col">Modifier</th>
					</tr>
				</thead>
				<tbody>
					<?php while ($ligne = $tblmb->fetch()) { ?>
						<tr>
							<td><?php echo $ligne['idMembres']; ?></td>
							<td><?php echo $ligne['password']; ?></td>
							<td><?php echo $ligne['nomMembre']; ?></td>
							<td><?php echo $ligne['prenomMembre']; ?></td>
							<td><?php echo $ligne['dateNaissance']; ?></td>
							<td><?php echo $ligne['sexe']; ?></td>
							<td><?php echo $ligne['adresse']; ?></td>
							<td><?php echo $ligne['cp']; ?></td>
							<td><?php echo $ligne['ville']; ?></td>
							<td><?php echo $ligne['telephoneMobile']; ?></td>
							<td><?php echo $ligne['telFixe']; ?></td>
							<td><?php echo $ligne['nomRepresentant']; ?></td>
							<td><?php echo $ligne['prenomRepresentant']; ?></td>
							<td><?php echo $ligne['telephoneMobileRep']; ?></td>
							<td><?php echo $ligne['mailRepresentant']; ?></td>
							<td><?php echo $ligne['adresseRepresentant']; ?></td>
							<td><?php echo $ligne['cpRepresentant']; ?></td>
							<td><?php echo $ligne['villeRepresentant']; ?></td>
							<td><?php echo $ligne['photo']; ?></td>
							<td><?php echo $ligne['NLicence']; ?></td>
							<td><?php echo $ligne['pointsClassement']; ?></td>
							<td><?php echo $ligne['categories']; ?></td>
							<td><?php echo $ligne['EquipeNom']; ?></td>
							<td><?php echo $ligne['nivResponsabilite']; ?></td>
							<td><?php echo $ligne['MembresComite']; ?></td>
							<td><?php echo $ligne['payementAdhesion']; ?></td>
							<td><a href="index.php?page=formMembre&idMembres=<?php echo $ligne['idMembres']; ?>">Modifier</a></td>
							<td>
								<a id="supprimer" href="http://localhost/CPK/index.php?page=traitementSupprime&idMembres=<?php echo $ligne['idMembres']; ?>" onclick="return confirm('Voulez-vous supprimer --><?php echo $ligne['prenomMembre'] . ' ' . $ligne['nomMembre']; ?><--')">
									<i class="fas fa-trash-alt"></i>
								</a>
							</td>
						</tr>
					<?php } ?>
			</table>
		</div>
	</div>
</div>