<?php
$list_burgers = include "list_burgers.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BugBurgers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include "header.php"; ?>
<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="Images/83d982191977471168c6eea7b1645b6b.jpg" alt="Sandwich1">
            </div>

            <div class="item">
                <img src="Images/13743994_586334051549234_864750481_n.jpg" alt="Sandwich2">
            </div>

            <div class="item">
                <img src="Images/AAEAAQAAAAAAAAekAAAAJDE5ZjY0ZTAxLTU0ZWMtNGJiNi04MmY5LTc2Y2NhMDA5OGExZg.jpg"
                     alt="Sandwich3">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container">
    <section id="concept" class="row">
        <div class="col-xs-12 text-center">
            <h2>Le concept</h2>
        </div>
        <div class="col-xs-12 text-justify">
            <p>Bienvenue sur BugBurger, les premiers restaurants français vous offrant l’opportunité de déguster des
                repas à base d’insectes tout en vous assurant des plats savoureux et des produits bio de qualité.</p>
            <p>Aussi positive pour l’environnement que bénéfique pour la santé, la consommation de viande à base
                d’insectes est pratiquée dans de nombreux pays depuis des centaines d’années. Une fois cuisinée et
                assemblée en forme de steak, cette viande exceptionnellement riche en protéines et pauvre en matières
                grasses possède un goût très proche de celle du boeuf. Ainsi, à quantité équivalente, un steak d’insecte
                possède 3x plus de protéines pour 2x moins de matières grasse qu’un steak de boeuf. </p>
            <p>D’un point de vue environnemental, la production de 100g de viande de boeuf produit environ 2,81 kg de
                CO² alors que le même steak d’insecte ne produit que 0,45 Kg de CO² sans compter qu’il ne produit pas de
                méthane. La consommation d’insecte représente l’avenir de notre alimentation et de notre planète, c’est
                pourquoi BioBurger vous propose des Burgers d’insectes savoureux, mis au point par nos meilleurs chefs
                étoilés.</p>
            <p>Notre site de production d’insectes se situe à La Loupe ou nos criquets et vers de farine sont élevés
                dans le respect du label Bio ainsi que des normes européennes. Les autres ingrédients de nos plats
                proviennent tous de producteurs bio situés à proximité de nos restaurants.
            </p>
        </div>
    </section>
    <hr>
    <section id="menu" class="row text-center">
        <div class="col-xs-12">
            <h2>Les Menus</h2>
            <p>Pour petits et grands, vous retrouverez ces 5 burgers dans tous nos restaurants. Accompagnés de frites ou
                de Coleslaw.</p>
        </div>
        <?php foreach ($list_burgers as $key => $burger): ?>
            <div class="col-xs-12 col-md-4 text-center">
                <div class="img_menu_burger img-responsive center-block"
                     alt="Sandwich"
                     width="250" height="250">
                    <h2 class="burger_name text-center"><?php echo $burger['burger_name']; ?></h2>
                    <p class="ingredients text-center"><?php echo $burger['ingredients']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
    <hr>
    <?php include "map.php"; ?>
    <hr>
    <section id="notreequipe">
        <div class="row">


            <div class="col-xs-12 text-center">
                <h2>L'équipe</h2>
                <p>Créé depuis 3 ans , nos restaurants sont gérés par une équipe de passionnés qui ont l’ambition est de
                    rester proches de l’agriculture régionale toute en étant de qualité.
                </p>
            </div>
        </div>
        <div class="row">


            <div class="col-xs-12 col-md-4 text-center">
                <h3>Damien Armenté</h3>
                <img src="Images/damien.jpg" class="img-circle img-responsive center-block" alt="Damien Armenté"
                     width="250" height="250">
                <p class="text-justify">Chercheur au CNRS, spécialisé en bioproduction d’insectes depuis 12 ans. Il
                    s’assure de la bonne production de nos insectes dans notre site de production. Il est également
                    auteur de nombreux ouvrage sur la transition écologique et alimentaire via les insectes.
                </p>

            </div>
            <div class="col-xs-12 col-md-4 text-center">
                <h3 class="text-center">Laurent Aubertin</h3>
                <img src="Images/laurent-1.jpg" class="img-circle img-responsive center-block" alt="Sandwich"
                     width="250" height="250">
                <p class="text-justify">Chef doublement étoilé. Précédemment chef dans le prestigieux Restaurant “Au bon
                    Bertin” a décidé de composer ses plats avec les insectes qu’il considère comme “une matière noble,
                    riche, artistique et responsable”. Il est le créateur de nos différents burgers qui sont préparés
                    dans chacuns de nos restaurants.</p>

            </div>
            <div class="col-xs-12 col-md-4 text-center">
                <h3>Julien Boyer</h3>
                <img src="Images/Julien-Boyer-350x350.jpg" class="img-circle img-responsiv center-block" alt="Sandwich"
                     width="250" height="250">
                <p class="text-justify">Serial Entrepreneur, après un séjour de 4 ans en Asie du sud-est, il décidé de
                    fédérer une équipe pour proposer une alimentation de qualité, inspirée des produits régionaux
                    Thaïlandais. Il créé le site de production d’insectes de La Loupe début 2015 puis le premier
                    Restaurant Bug burger 6 mois plus tard.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <p>Contacter notre site de production pour toute information ou partenariat: <a href="mailto:#">prod@bugburger.com</a>
                </p>
            </div>

        </div>


    </section>
    <hr>
    <?php include "footer.php"; ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js.js"></script>
</body>
</html>