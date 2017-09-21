<?php
session_start();
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
    <title>BugBurger : contact</title>
    <link href="https://fonts.googleapis.com/css?family=Assistant:300|Slabo+27px" rel="stylesheet">
    <link rel="icon" type="image/png" href="Images/favicon3.ico" />
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
        <h2>Une question dont vous ne trouvez pas la réponse dans notre FAQ ?</h2>
        <p>Envie de nouer un partenariat: N'hesitez pas à poser toutes vos questions à notre équipe</p>
    </div>
</div>
<div class="container">
    <div class="alert-danger">
        <?php if (array_key_exists('errors', $_SESSION)): ?>
            <p>Alerte : erreur dans le formulaire</p>
            <?= implode('<br>', $_SESSION['errors']); ?>
        <?php endif; ?>
    </div>
<div class="row">
    <form action="validateForms.php" method="post" role="form" class="form-horizontal">
        <div class="form-group">
            <label for="firstName">Prénom : </label>
            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="ex: Michel" required
                   value="<?php echo isset($_SESSION['errors']['firstName']) ? "" : $_SESSION['inputs']['firstName'] ;  ?>">
        </div>
        <div class="form-group">
            <label for="lastName">Nom : </label>
            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="ex: Dupont" required
                   value="<?php echo isset($_SESSION['errors']['lastName']) ? "" : $_SESSION['inputs']['lastName']; ?>">
        </div>
        <div class="form-group">
            <label for="email">e-mail : </label>
            <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="email" class="form-control input-group" name="email" id="email"
                       placeholder="ex: michel.dupont@gmail.com" required
                       value="<?php echo isset($_SESSION['errors']['email']) ? "" : $_SESSION['inputs']['email']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="topic">Sujet : </label>
            <input type="text" class="form-control" name="topic" id="topic" placeholder="" required
                   value="<?php echo isset($_SESSION['inputs']['topic']) ? $_SESSION['inputs']['topic'] : ""; ?>">

        </div>
        <div class="form-group">
            <label for="message">Votre question : </label>
            <textarea class="form-control" rows="3" name="message" id="message" placeholder="" required>
                <?php echo isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ""; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>
    <hr>
    <footer>
        <?php include "Parts/footer.php"; ?>
    </footer>
</div>
<?php print_r($_SESSION); ?>
</body>
</html>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);