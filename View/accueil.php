
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><span class="glyphicon glyphicon-home"></span>Actualités</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div id="carouselExampleControls" class="carousel slide mt-3" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 imgPartenaire" src="http://localhost/CPK/assets/images/accueil_news.png" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Un duel de cowboy</h5>
                            <p>Retour sur le duel entre Patrick Cohen et et Kim Jung Hun</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="http://localhost/CPK/assets/images/image_accueil.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Le choc des titans</h5>
                            <p>Mardi s'est affrontés Harris Roselmack et Jean Mesiah</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="http://localhost/CPK/assets/images/image_accueil2.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Un match serré entre le tenant du titre et le jeune Jung</h5>
                            <p>Samedi s'est tenu la rencontre entre San Jong et Kurapika</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-6"> <iframe name="InlineFrame1" id="InlineFrame1" style="width:500px;height:500px;" src="https://www.mathieuweb.fr/calendrier/calendrier-des-semaines.php?nb_mois=1&nb_mois_ligne=4&mois=&an=&langue=fr&texte_color=B9CBDD&week_color=DAE9F8&week_end_color=C7DAED&police_color=453413&sel=true" scrolling="no" frameborder="0" allowtransparency="true"></iframe></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <?php if (isset($_SESSION['mail']) && isset($_SESSION["connected"]) === true) {
                if($_SESSION['nivResponsabilite'] === "Admin" || $_SESSION['nivResponsabilite'] === "Editeur") {?>
            <div class="container p-4 col-md-12 col-sd-12 col-lg-12 d-flex justify-content-center">
			<div>
				<a href="#"><button type="button" class="btn btn-primary" style="display: inline-block;"> Ajouter un Article</button></a>
			</div>
		</div>
        <?php } } ?>
            <article class="forecast">
                <h1>Articles</h1>
                <article class="day-forecast">
                    <a href="#">
                        <h2>Retour sur le match phare de ce weekend</h2>
                    </a>
                    <p> S'est affrontés samedi 18 janvier François Clavier et Gilbert Montagné </p>
                </article>
                <article class="day-forecast">
                    <a href="#">
                        <h2>Choc des techniques</h2>
                    </a>
                    <p>Marakov Shevshenko</p>
                </article>
                <article class="day-forecast">
                    <a href="#">
                        <h2>Victoire au fil de l'aiguille</h2>
                    </a>
                    <p>Heavy rain.</p>
                </article>
            </article>
        </div>
        <div class="container col-md-6">
            <table class="tableau-style">
                <div class="container col-md-6 col-sd-6 d-flex justify-content-center">
                    <h1>
                        MATCH(S)
                    </h1>

                    <thead>
                        <tr>
                            <th>Equipe 1</th>
                            <th>
                                VS
                            </th>
                            <th>Equipes 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Contenu</td>
                            <td> VS </td>
                            <td>Contenu</td>
                        </tr>
                        <tr>
                            <td>Contenu</td>
                            <td> VS </td>
                            <td>Contenu</td>
                        </tr>
                        <tr>
                            <td>Contenu</td>
                            <td> VS </td>
                            <td>Contenu</td>
                        </tr>
                        <tr>
                    </tbody>
                </div>
            </table>
        </div>
    </div>
</div>