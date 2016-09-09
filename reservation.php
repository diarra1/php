<?php
require_once('data/page_top.php');// Inclusion des defines
//var_dump($_POST);
$nom = ''; // Variable du nom
$prenom = ''; // Variable du prenom
$email='';  //variable de l email
if (array_key_exists('saisie_nom', $_POST)
    && array_key_exists('saisie_prenom', $_POST)) {
    // Il y a des données POST : On est en réception des données
    $nom = $_POST['saisie_nom'];
    $prenom = $_POST['saisie_prenom'];
    $email = $_POST['saisie_email'];
}
?>


<main xmlns="http://www.w3.org/1999/html">


    <title></title>

<h2 id="ps">RESERVATION</h2>

<form id="formulaire" action="index.php" method="post">
<fieldset>
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
        <input type="email" id="saisie_email" name="saisie_email" value="<?php $email ?>"/>

    </div>
    <div>



    <div>
        <label for id="saisie_date">Date debut du forfait : </label>
        <input type="date" id="saisie_date" name="saisie_date" value=""/>
    </div>

    </fieldset>
<fieldset>
    <legend>SEXE</legend>
    <?php
    $homme_coche = array_key_exists('genre', $_POST)
        && in_array('genre_h',  $_POST['genre']);
    ?>
    <label for="genre_h">Homme</label>
    <input type="radio" name="genre[]" id="genre_h" value="genre_h"
        <?= $homme_coche ? 'checked="checked"' : '' ?>
    />
    <?php
    $femme_coche = array_key_exists('genre', $_POST)
        && in_array('genre_f',  $_POST['genre']);
    ?>
    <label for="genre_f">Femme</label>
    <input type="radio" name="genre[]" id="genre_f" value="genre_f"
        <?= $femme_coche ? 'checked="checked"' : '' ?>
    />
    </fieldset>
    <label for="select_pays">Pays :</label>
    <select name="select_pays" id="select_pays">
        <option value="-1"
            <?= array_key_exists('select_pays', $_POST) && ($_POST['select_pays'] == '-1') ? SELECTED_ATTR : '' ?>
        >(Choisissez un option)</option>
        <option value="senegal"
            <?= array_key_exists('select_pays', $_POST) && ($_POST['select_pays'] == 'senegal') ? SELECTED_ATTR : '' ?>
        >senegal</option>
        <option value="france"
            <?= array_key_exists('select_pays', $_POST) && ($_POST['select_pays'] == 'france') ? SELECTED_ATTR : '' ?>
        >france</option>
        <option value="bamako"
            <?= array_key_exists('select_pays', $_POST) && ($_POST['select_pays'] == 'bamako') ? SELECTED_ATTR : '' ?>
        >bamako</option>
        <option value="suisse"
            <?= array_key_exists('select_pays', $_POST) && ($_POST['select_pays'] == 'suisse') ? SELECTED_ATTR : '' ?>
        >suisse</option>
    </select>
    <

    <div>
        <input type="submit" value="Reserver" name="soumettre" />
    </div>

</form>








<?php
?>
</main>

   <?php
require_once('data/page_bottom.php');// Inclusion des defines
?>