<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Bug Burger : noter équipe</title>
</head>
<body>
<header>
    <?php include "Parts/header.php"; ?>
</header>
<div class="container">
    <div class="jumbotron">
        <h1>Notre équipe</h1>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-4 text-center">
            <h2>Damien Armenté</h2>
            <img src="Images/damien.jpg" class="img-circle img-responsive center-block" alt="Damien Armenté"
                 width="250" height="250">
            <p class="text-justify">Chercheur au CNRS, spécialisé en bioproduction d’insectes depuis 12 ans. Il
                s’assure de la bonne production de nos insectes dans notre site de production. Il est également
                auteur de nombreux ouvrage sur la transition écologique et alimentaire via les insectes.
            </p>

        </div>
        <div class="col-xs-12 col-md-4 text-center">
            <h2 class="text-center">Laurent Aubertin</h2>
            <img src="Images/laurent-1.jpg" class="img-circle img-responsive center-block" alt="Laurent Aubertin"
                 width="250" height="250">
            <p class="text-justify">Chef doublement étoilé. Précédemment chef dans le prestigieux Restaurant “Au bon
                Bertin” a décidé de composer ses plats avec les insectes qu’il considère comme “une matière noble,
                riche, artistique et responsable”. Il est le créateur de nos différents burgers qui sont préparés
                dans chacuns de nos restaurants.</p>

        </div>
        <div class="col-xs-12 col-md-4 text-center">
            <h2>Julien Boyer</h2>
            <img src="Images/Julien-Boyer-350x350.jpg" class="img-circle img-responsive center-block"
                 alt="Julien Boyer" width="250" height="250">
            <p class="text-justify">Serial Entrepreneur, après un séjour de 4 ans en Asie du sud-est, il décidé de
                fédérer une équipe pour proposer une alimentation de qualité, inspirée des produits régionaux
                Thaïlandais. Il créé le site de production d’insectes de La Loupe début 2015 puis le premier
                Restaurant Bug burger 6 mois plus tard.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 text-center">
            <p>Contacter notre site de production pour toute information ou partenariat:
                <a href="../contact.php">Contact</a>
            </p>
        </div>
    </div>
    <hr>
    <footer>
        <?php include "Parts/footer.php"; ?>
    </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>