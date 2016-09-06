<?php
require_once('view/page_top.php');// Inclusion des defines
?>
<main>
    <h1>reservation</h1>
</main>
<?php
require_once('view/page_bottom.php');// Inclusion des defines
?><?php
//var_dump($_POST);
$nom = ''; // Variable du nom
$prenom = ''; // Variable du prenom
$email='';  //variable de l email
if (array_key_exists('saisie_nom', $_POST)
    && array_key_exists('saisie_prenom', $_POST)) {
    // Il y a des données POST : On est en réception des données
    $nom = $_POST['saisie_nom'];
    $prenom = $_POST['saisie_prenom'];
    $email=$_POST['saisie_email'];
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>  Mon Formulaire</title>
</head>
<body>
<h2>Mon formulaire</h2>
<!-- Afficher les donnée reçues ici dans un paragraphe -->

<form id="formulaire" action="index.php" method="post">
    <!-- Si action n'est pas précisé, le formulaire est soumis en "postback" -->
    <div>
        <label for="saisie_nom">Nom : </label>
        <input type="text" placeholder="(entrez votre nom)" id="saisie_nom" name="saisie_nom"
               value="<?= $nom ?>"/>
    </div>
    <div>
        <label for="saisie_prenom">Prénom : </label>
        <input type="text" placeholder="(entrez votre prénom)" id="saisie_prenom" name="saisie_prenom"
               value="<?= array_key_exists('saisie_prenom', $_POST) ? $_POST['saisie_prenom'] : '' ?>"/>
    </div>
    <div>
        <label for id="saisie_tel">Telephone : </label>
        <input type="number" id="saisie_tel" name="saisie_tel" value=""/>
    </div>
    <div>
        <label for id="saisie_email">Email : </label>
        <input type="number" id="saisie_email" name="saisie_email" value="<?php $email ?>"/>

    </div>
    <div>

        <input type="submit" value="Soumettre" name="Soumettre"/>
    </div>
</form>
<?php
echo '';
?>
</body>
</html>