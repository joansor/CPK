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
			<button type="submit" class="btn btn-primary" style="margin-left: 2%;">Créer un nouveau membre</button>
		</div>
	</form>
	<!-- Bloc formulaire création d'un membre -->
	<form class="row gy-2 gx-3 align-items-center" style="margin: 2%; padding: 1%; background-color: #DADDE8; border: 1px solid #C4C4C4; box-sizing: border-box; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px;">
		<div class="col-auto">
			<div class="form-outline">
				<input type="email" id="IdEmail" class="form-control" />
				<label class="form-label" for="IdEmail">Identifiant/Email</label>
			</div>
		</div>
		<div class="col-auto">
			<div class="form-outline">
				<input type="password" id="Password" class="form-control" />
				<label class="form-label" for="Password">Password</label>
			</div>
		</div>
		<div class="col-auto">
			<div class="form-outline">
				<input type="text" id="Nom" class="form-control" />
				<label class="form-label" for="Nom">Nom</label>
			</div>
		</div>
		<div class="col-auto">
			<div class="form-outline">
				<input type="text" id="Prenom" class="form-control" />
				<label class="form-label" for="Prenom">Prenom</label>
			</div>
		</div>
		<div class="col-auto">
			<div class="form-outline">
				<input type="date" id="Naissance" class="form-control" />
				<label class="form-label" for="Naissance">Date de Naissance</label>
			</div>
		</div>
		<div class="col-auto">
			<div class="form-outline">
				<input type="text" id="Adresse" class="form-control" />
				<label class="form-label" for="Adresse">Adresse</label>
			</div>
		</div>
		<div class="col-auto">
			<div class="form-outline">
				<input type="text" id="CP" class="form-control" />
				<label class="form-label" for="CP">Code Postal</label>
			</div>
		</div>
		<div class="col-auto">
			<div class="form-outline">
				<input type="text" id="Ville" class="form-control" />
				<label class="form-label" for="Ville">Ville</label>
			</div>
		</div>
		<div class="col-auto">
			<div class="form-outline">
				<input type="tel" id="Tel" class="form-control" />
				<label class="form-label" for="Tel">Tel</label>
			</div>
		</div>
		<div class="col-auto">
			<div class="form-outline">
				<input type="text" id="representant" class="form-control" />
				<label class="form-label" for="representant">Représentant</label>
			</div>
		</div>
		<div class="col-auto">
			<div class="form-outline">
				<input type="tel" id="Telrep" class="form-control" />
				<label class="form-label" for="Telrep">Tel représentant</label>
			</div>
		</div>
		<div class="col-auto">
			<div class="form-outline">
				<input type="email" id="Emailrep" class="form-control" />
				<label class="form-label" for="Emailrep">Email représentant</label>
			</div>
		</div>
		<div class="col-auto">
			<div class="form-outline">
				<input type="text" id="Adresserep" class="form-control" />
				<label class="form-label" for="Adresserep">Adresse représentant</label>
			</div>
		</div>
		<div class="col-auto">
			<div class="form-outline">
				<input type="text" id="CPrep" class="form-control" />
				<label class="form-label" for="CPrep">Code Postal représentant</label>
			</div>
		</div>
		<div class="col-auto">
			<div class="form-outline">
				<input type="text" id="Villerep" class="form-control" />
				<label class="form-label" for="Villerep">Ville représentant</label>
			</div>
		</div>
		<div class="col-auto">
			<div class="form-outline">
				<input type="file" id="Photo" class="form-control" accept="image/png, image/jpeg" />
				<label class="form-label" for="Photo">Photo</label>
			</div>
		</div>
		<div class="col-auto">
			<div class="form-outline">
				<input type="text" id="NLicence" class="form-control" />
				<label class="form-label" for="NLicence">N° Licence</label>
			</div>
		</div>
		<div class="col-auto">
			<div class="form-outline">
				<input type="text" id="points" class="form-control" />
				<label class="form-label" for="points">Points</label>
			</div>
		</div>
		<div class="col-auto">
			<div class="form-outline">
				<select id="Catégorie" class="form-control">
					<option value="null"> </option>
					<option value="Benjamin">Benjamin</option>
					<option value="Minime">Minime</option>
					<option value="Cadet">Cadet</option>
					<option value="Senior">Senior</option>
					<option value="Loisir">Loisir</option>
				</select>
				<label class="form-label" for="Catégorie">Catégorie</label>
			</div>
		</div>
		<div class="col-auto">
			<div class="form-outline">
				<select id="Equipe" class="form-control">
					<option value="null"> </option>
					<option value="Benjamin">Benjamin</option>
					<option value="Minime">Minime</option>
					<option value="Cadet">Cadet</option>
					<option value="Senior">Senior1</option>
					<option value="Senior">Senior2</option>
					<option value="Senior">Senior3</option>
					<option value="Senior">Senior4</option>
					<option value="Loisir">Loisir</option>
				</select>
				<label class="form-label" for="Equipe">Equipe</label>
			</div>
		</div>
		<div class="col-auto">
			<div class="form-outline">
				<select id="Statut" class="form-control">
					<option value="null"> </option>
					<option value="Membre">Membre</option>
					<option value="Editeur">Editeur</option>
					<option value="Admin">Admin</option>
				</select>
				<label class="form-label" for="Statut">Statut</label>
			</div>
		</div>
		<div class="col-auto">
			<div class="form-outline">
				<select id="Fonction" class="form-control">
					<option value="null"> </option>
					<option value="Président">Président</option>
					<option value="Président">Vice-Président</option>
					<option value="Secretaire">Secretaire</option>
					<option value="Tresorier">Tresorier</option>
					<option value="Entraineur">Entraineur des jeunes</option>
				</select>
				<label class="form-label" for="Fonction">Fonction</label>
			</div>
		</div>
		<div class="col-auto">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="Paiement" checked />
				<label class="form-check-label" for="Paiement">Paiement adhésion </label>
			</div>
		</div>
		<div class="col-auto">
			<button type="submit" class="btn btn-primary">Valider</button>
		</div>
	</form>

	<!-- Bloc BDD Membres -->
	<div class="p-5 text-center bg-image" style="margin: 2%; background-color: #DADDE8; border: 1px solid #C4C4C4; box-sizing: border-box; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px;">
		<div class="table-responsive">
			<table class="table table-striped table-hover table-sm">
				<thead>
					<tr>
						<th scope="col">Id/Email</th>
						<th scope="col">Password</th>
						<th scope="col">Nom</th>
						<th scope="col">Prénom</th>
						<th scope="col">Date de Naissance</th>
						<th scope="col">Adresse</th>
						<th scope="col">CP</th>
						<th scope="col">Ville</th>
						<th scope="col">Tel</th>
						<th scope="col">Représentant</th>
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
					<tr>
						<th scope="row">Bourne.jason@wanadoo.fr</th>
						<td>********</td>
						<td>Bourne</td>
						<td>Jason</td>
						<td>15/06/2005</td>
						<td>15 rue des Lilas</td>
						<td>68460</td>
						<td>Kingersheim</td>
						<td>0606060606</td>
						<td>Bourne Patrick</td>
						<td>0707070707</td>
						<td>Bourne.patrick@aol.fr</td>
						<td>15 rue des Lilas</td>
						<td>68460</td>
						<td>Kingersheim</td>
						<td>Photo.jpeg</td>
						<td>6836774</td>
						<td>1700</td>
						<td>Cadet</td>
						<td>Cadet</td>
						<td>Membre</td>
						<td> </td>
						<td>Oui</td>
						<td>Bouton Modifier</td>
					</tr>
					<tr>
						<th scope="row">Bourne.patrick@wanadoo.fr</th>
						<td>********</td>
						<td>Bourne</td>
						<td>Patrick</td>
						<td>22/12/1985</td>
						<td>15 rue des Lilas</td>
						<td>68460</td>
						<td>Kingersheim</td>
						<td>0606060606</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>Photo.jpeg</td>
						<td>6836561</td>
						<td>2806</td>
						<td>Senior</td>
						<td>Senior1</td>
						<td>Admin</td>
						<td>Président</td>
						<td>Oui</td>
						<td>Bouton Modifier</td>
					</tr>
					<tr>
						<th scope="row">Dupont.Jean@wanadoo.fr</th>
						<td>********</td>
						<td>Dupont</td>
						<td>Jean</td>
						<td>15/09/1968</td>
						<td>106 chemin des Plots</td>
						<td>68150</td>
						<td>Queenersheim</td>
						<td>0606060606</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>Photo.jpeg</td>
						<td>6889474</td>
						<td>1260</td>
						<td>Senior</td>
						<td>Loisir</td>
						<td>Editeur</td>
						<td>Trésorier</td>
						<td>Oui</td>
						<td>Bouton Modifier</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>