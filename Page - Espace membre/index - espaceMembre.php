<html>
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" type="text/css" />

<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.1.0/mdb.min.css" rel="stylesheet" />

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.1.0/mdb.min.js"></script>

<!--CSS Perso-->
<link rel="stylesheet" type="text/css" href="style.css" />

<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
	<header>
		<!-- Background Image -->
		<div class="p-5 text-center bg-image" style="background-image : url('img/imgHeader.png'); height: 400px;"></div>
		<!-- Background Image -->

		<!-- NavBar -->
		<div class="text-center bg-image" style="background-image : url('img/barreNav.png');">
			<nav class="navbar navbar-expand-md navbar-dark bg-transparent">
				<div class="container-fluid">
					<ul class="navbar-nav nav-fill w-100">
						<li class="nav-item">
							<a class="nav-link" href="#">ACCUEIL</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">INFOS PRATIQUES</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">LES EQUIPES</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">ESPACE MEMBRE</a>
						</li>
					</ul>
				</div>

			</nav>
		</div>
		<!-- NavBar -->
	</header>
	<!-- Page Espace Membre -->
	<div class="pageEspaceMembre">
		<!-- Titre page Espace Membre -->
		<h1 class="titreEspaceMembre" style="font-family: 'Exo 2', sans-serif; color: #e84339; font-weight: 700; font-size: 60; margin-left: 1%; margin-top: 1%;">Espace Membre</h1>

		<!-- Bloc Connexion -->
		<div class="p-5 text-center bg-image" style="margin-left: auto; margin-right: auto; background-color: #DADDE8; border: 1px solid #C4C4C4; box-sizing: border-box; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px; height: 200px; width:500px">
			<div class="form-outline">
				<input type="email" id="typeEmail" class="form-control" />
				<label class="form-label" for="typeEmail">Identifiant</label>
			</div>
			<div class="form-outline">
				<input type="password" id="typePassword" class="form-control" />
				<label class="form-label" for="typePassword">Mot de passe</label>
			</div>
			<div style="display: inline-block;">
				<div class="form-check" style="display: inline-block; margin-right: 25px;">
					<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked />
					<label class="form-check-label" for="flexCheckChecked">Se souvenir de moi</label>
				</div>
				<button type="button" class="btn btn-primary" style="display: inline-block;">Connexion</button>
			</div>
		</div>
	</div>


	<!-- Bloc Profil -->
	<div class="p-5 text-center bg-image" style="margin-left: auto; margin-right: auto; margin-top:100px; background-color: #DADDE8; border: 1px solid #C4C4C4; box-sizing: border-box; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px; height: auto; width:900px">
		<img src="img/imgPhoto.webp" style="display: inline-block; position: absolute; top: 5%; left:5%; height: 135px; width:105px ">
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
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">Age</td>
				<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">16 ans</td>
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
			<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">Tel représentant</td>
			<td style="font-family: 'Roboto', sans-serif; font-weight: 400; padding: 5px;">07.00.00.00.00</td>
			</tr>
		</table>


		<table style="display: inline-block; margin-bottom: 18%; margin-left: 3%; margin-right:auto;">
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
	<div class="p-5 text-center bg-image" style="margin-left: auto; margin-right: auto;">
		<div>
			<button type="button" class="btn btn-primary" style="display: inline-block;">Accés gestion base de données des membres</button>
		</div>
	</div>
</body>

</html>