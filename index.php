<?php
$list_burgers = include "Parts/list_burgers.php";
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
<header>
    <?php include "Parts/header.php"; ?>
</header>
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
            <div class="burgerTop item active">
                <img src="Images/83d982191977471168c6eea7b1645b6b.jpg" alt="Sandwich1">
            </div>

            <div class="burgerTop item">
                <img src="Images/13743994_586334051549234_864750481_n.jpg" alt="Sandwich2">
            </div>

            <div class="burgerTop item">
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
    <section id="concept">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1>Les insectes comestibles</h1>
            </div>
        </div>
        <div class="row">

            <div class="col-xs-12  col-md-9 col-md-push-3 text-justify">
                <p>Bienvenue sur BugBurger, les premiers restaurants français vous offrant l’opportunité de déguster des
                    repas à base d’insectes tout en vous assurant des plats savoureux et des produits bio de
                    qualité.</p>
                <p>Aussi positive pour l’environnement que bénéfique pour la santé, la consommation de viande à base
                    d’insectes est pratiquée dans de nombreux pays depuis des centaines d’années. Une fois cuisinée et
                    assemblée en forme de steak, cette viande exceptionnellement riche en protéines et pauvre en
                    matières
                    grasses possède un goût très proche de celle du boeuf. Ainsi, à quantité équivalente, un steak
                    d’insecte
                    possède 3x plus de protéines pour 2x moins de matières grasse qu’un steak de boeuf. </p>
            </div>
            <div class="col-xs-12 col-md-3 col-md-pull-9 ">
                <img class="img-responsive logoAB center-block" src="Images/AB-red.png" alt="Sigle_AB">
            </div>

        </div>
        <div class="row">

            <div class="col-xs-12  col-md-8 text-justify">

                <p>D’un point de vue environnemental, la production de 100g de viande de boeuf produit environ 2,81 kg
                    de
                    CO² alors que le même steak d’insecte ne produit que 0,45 Kg de CO² sans compter qu’il ne produit
                    pas de
                    méthane. La consommation d’insecte représente l’avenir de notre alimentation et de notre planète,
                    c’est
                    pourquoi BioBurger vous propose des Burgers d’insectes savoureux, mis au point par nos meilleurs
                    chefs
                    étoilés.</p>
                <p>Notre site de production d’insectes se situe à La Loupe ou nos criquets et vers de farine sont élevés
                    dans le respect du label Bio ainsi que des normes européennes. Les autres ingrédients de nos plats
                    proviennent tous de producteurs bio situés à proximité de nos restaurants.
                </p>
            </div>
            <div class="hidden-xs col-md-4">
                <img class="img-responsive" src="Images/food-2499717_960_720.jpg" alt="Assiette d'insecte">
            </div>
        </div>

    </section>
    <hr>
    <section id="menu" class="row text-center">
        <div class="col-xs-12">
            <h1>Les Menus</h1>
            <p>Pour petits et grands, vous retrouverez ces 5 burgers dans tous nos restaurants. Accompagnés de frites ou
                de Coleslaw.</p>
        </div>
        <?php foreach ($list_burgers as $key => $burger): ?>
            <?php include "Parts/burger_du_menu.php" ?>
        <?php endforeach; ?>
    </section>
    <hr>
    <section id="nosrestaurants">
        <?php include "Parts/map.php"; ?>
    </section>

    <hr>
    <footer>
        <?php include "Parts/footer.php"; ?>
    </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>