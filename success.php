<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>BugBurger : formulaire envoyé</title>
</head>
<body>
<header>
    <?php include "Parts/header.php"; ?>
</header>
<div class="container">
    <div class="jumbotron">
        <h1> Votre formulaire a bien été envoyé</h1>
    </div>

    <div class="alert alert-success">
        <h2>Ci-dessous les informations envoyées : </h2>
        <p>Nom: <?php echo $_POST['lastName']; ?></p>
        <p>Prénom: <?php echo $_POST['firstName']; ?></p>
        <p>Mail : <?php echo $_POST['email']; ?></p>
        <p>Titre de votre message :  <?php echo $_POST['topic']; ?></p>
        <p>Contenu de votre message : <?php echo $_POST['message']; ?></p>
    </div>
    <p> Notre équipe vous répondra dans les meilleurs délais.</p>
    <hr>
    <footer>
        <?php include "Parts/footer.php"; ?>
    </footer>
</div>
</body>

</html>