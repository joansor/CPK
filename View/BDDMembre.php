<div class="pageEspaceMembre">
	<!-- Titre page BDD des Membres -->
	<h1 class="titreEspaceMembre" style="font-family: 'Exo 2', sans-serif; color: #e84339; font-weight: 700; font-size: 60; margin: 1%;">Base de données des membres</h1>

	<!-- Bloc recherche d'un membre -->
	<form class="row gy-2 gx-3 align-items-center" style="margin: 2%; padding: 1%; background-color: #DADDE8; border: 1px solid #C4C4C4; box-sizing: border-box; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px; width: 30%">
		<div class="input-group">
			<div class="form-outline">
			<input type="search" id="searchBox" class="form-control" placeholder="Filtrer...">
			<label class="form-label" for="searchBox">Rechercher un membre</label>
			</div>
				<i class="fas fa-search"></i>
		</div>
	</form>
	<a class="btn btn-primary" style="margin-left: 2%;" href="index.php?page=formMembre">Créer un nouveau membre</a>
	<!-- Bloc BDD Membres -->
	<?php

	$requete = "SELECT * FROM membres";
	$tblmb = $dbh->query($requete);

	?>
	<div class="p-5 text-center bg-image" style="margin: 2%; background-color: #DADDE8; border: 1px solid #C4C4C4; box-sizing: border-box; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px;">
		<div class="table-responsive">
			<table id="myTable" class="table table-striped table-hover table-sm">
				<thead>
					<tr>
						<th scope="col">Id Membre</th>
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
						<th scope="col">Membre Comité</th>
						<th scope="col">Paiement</th>
						<th scope="col">Modifier</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while ($ligne = $tblmb->fetch()) { ?>
						<tr>
							<td><?php if (isset($ligne['idMembres'])) echo $ligne['idMembres']; ?></td>
							<td><?php if (isset($ligne['nomMembre'])) echo $ligne['nomMembre']; ?></td>
							<td><?php if (isset($ligne['prenomMembre'])) echo $ligne['prenomMembre']; ?></td>
							<td><?php if (isset($ligne['dateNaissance'])) echo $ligne['dateNaissance']; ?></td>
							<td><?php if (isset($ligne['sexe'])) echo $ligne['sexe']; ?></td>
							<td><?php if (isset($ligne['adresse'])) echo $ligne['adresse']; ?></td>
							<td><?php if (isset($ligne['cp'])) echo $ligne['cp']; ?></td>
							<td><?php if (isset($ligne['ville'])) echo $ligne['ville']; ?></td>
							<td><?php if (isset($ligne['telephoneMobile'])) echo $ligne['telephoneMobile']; ?></td>
							<td><?php if (isset($ligne['telFixe'])) echo $ligne['telFixe']; ?></td>
							<td><?php if (isset($ligne['nomRepresentant'])) echo $ligne['nomRepresentant']; ?></td>
							<td><?php if (isset($ligne['prenomRepresentant'])) echo $ligne['prenomRepresentant']; ?></td>
							<td><?php if (isset($ligne['telephoneMobileRep'])) echo $ligne['telephoneMobileRep']; ?></td>
							<td><?php if (isset($ligne['mailRepresentant'])) echo $ligne['mailRepresentant']; ?></td>
							<td><?php if (isset($ligne['adresseRepresentant'])) echo $ligne['adresseRepresentant']; ?></td>
							<td><?php if (isset($ligne['cpRepresentant'])) echo $ligne['cpRepresentant']; ?></td>
							<td><?php if (isset($ligne['villeRepresentant'])) echo $ligne['villeRepresentant']; ?></td>
							<td><?php if (isset($ligne['photo'])) echo $ligne['photo']; ?></td>
							<td><?php if (isset($ligne['NLicence']))  echo $ligne['NLicence']; ?></td>
							<td><?php if (isset($ligne['pointsClassement'])) echo $ligne['pointsClassement']; ?></td>
							<td><?php if (isset($ligne['categories'])) echo $ligne['categories']; ?></td>
							<td><?php if (isset($ligne['EquipeNom'])) echo $ligne['EquipeNom']; ?></td>
							<td><?php if (isset($ligne['nivResponsabilite'])) echo $ligne['nivResponsabilite']; ?></td>
							<td><?php if (isset($ligne['MembresComite'])) echo $ligne['MembresComite']; ?></td>
							<td><?php if (isset($ligne['payementAdhesion'])) echo $ligne['payementAdhesion']; ?></td>
							<td><a href="index.php?page=formMembre&idMembres=<?php echo $ligne['idMembres']; ?>"><i class="fas fa-user-edit"></i></a></td>
							<td>

								<a id="supprimer" href="http://localhost/CPK/index.php?page=traitementSupprime&idMembres=<?php echo $ligne['idMembres']; ?>" onclick="return confirm('Voulez-vous supprimer --><?php echo $ligne['prenomMembre'] . ' ' . $ligne['nomMembre']; ?><--')">
									<i class="fas fa-trash-alt"></i>
								</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<script type="text/javascript">
	let options = {
		numberPerPage: 10, 
		goBar: true, 
		pageCounter: true,
	};

	let filterOptions = {
		el: '#searchBox'
	};

	paginate.init('#myTable', options, filterOptions);
</script>
</div>
