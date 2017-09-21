<?php
$list_peoples = include "Parts/list_team.php";
?>

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
    <link href="https://fonts.googleapis.com/css?family=Assistant:300|Slabo+27px" rel="stylesheet">
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
        <?php foreach ($list_peoples as $key => $people): ?>
            <?php include "Parts/describe_team.php" ?>
        <?php endforeach; ?>
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