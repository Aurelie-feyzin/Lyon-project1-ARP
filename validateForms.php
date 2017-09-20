<?php
session_start();

$errors = array();


if (!array_key_exists('firstName', $_POST) || $_POST['firstName'] == '' || is_numeric($_POST['firstName'] )) {// on verifie l'existence du champ et d'un contenu
    $errors ['firstName'] = "vous n'avez pas renseigné votre prénom";
}

if (!array_key_exists('lastName', $_POST) || $_POST['lastName'] == '' || is_numeric($_POST['lastName'] )) {// on verifie l'existence du champ et d'un contenu
    $errors ['lastName'] = "vous n'avez pas renseigné votre nom";
}

if (!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {// on verifie existence de la clé
    $errors ['mail'] = "vous n'avez pas renseigné votre email";
}
if (!array_key_exists('message', $_POST) || $_POST['message'] == '') {
    $errors ['message'] = "vous n'avez pas renseigné votre message";
}
//On check les infos transmises lors de la validation
if (!empty($errors)) { // si erreur on renvoie vers la page précédente
    $_SESSION['errors'] = $errors;//on stocke les erreurs
    $_SESSION['inputs'] = $_POST;
    header('Location: forms.php');
} else {
    include "success.php";
}