<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>BugBurger : contact</title>
</head>
<body>
<header>
    <?php include "Parts/header.php"; ?>
</header>
<div class="container">
    <div class="jumbotron">
        <h1> Contactez - nous</h1>
    </div>
    <div class="row">
        <p>Une question dont vous ne trouvez pas la réponse dans notre FAQ ?</p>
        <p>Envie de nouer un partenariat ?</p>
        <p>N'hesitez pas à poser toutes vos questions à notre équipe</p>
    </div>
</div>
<div class="container">
    <form action="" method="post" role="form" class="form-horizontal">
        <div class="form-group">
            <label for="firstName">Prénom : </label>
            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="ex: Michel" required>
        </div>
        <div class="form-group">
            <label for="lastName">Nom : </label>
            <input type="text" class="form-control" name="lastName" id="firstName" placeholder="ex: Dupont" required>
        </div>
        <div class="form-group">
            <label for="email">e-mail : </label>
            <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="email" class="form-control input-group" name="email" id="email"
                       placeholder="ex: michel.dupont@gmail.com" required>
            </div>
        </div>
        <div class="form-group">
            <label for="topic">Sujet : </label>
            <input type="text" class="form-control" name="topic" id="topic" placeholder="" required>
        </div>
        <div class="form-group">
            <label for="OurQuestion">Votre question : </label>
            <textarea class="form-control" rows="3" name="OurQuestion" id="OurQuestion" placeholder=""
                      required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
    <hr>
    <footer>
        <?php include "Parts/footer.php"; ?>
    </footer>
</div>

</body>
</html>