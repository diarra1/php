<?php
require_once(dirname(__FILE__).'/defines.php');
require_once(dirname(__FILE__) . '/data/forfaits.php');
require_once('view/page_top.php');
$forfaits_data = get_forfaits();

$categorie_page = false;
// Si une catégorie est précisée dans la QueryString ET que sa valeur est connue
if (array_key_exists('categorie', $_GET) && in_array($_GET['categorie'], get_categories()) ) {
    $categorie_page = $_GET['categorie'];
}
require_once('view/page_top.php');
?>
    <h1 xmlns="http://www.w3.org/1999/html">Catalogue</h1>
<?php
foreach ($forfaits_data as $id => $forfait) {
    // On affiche le forfait si il n'y a pas de categorie de page
    // ou bien si le forfait appartient à la categorie demandée
    if (($categorie_page === false) || ($forfait[FORF_CATEGORY] == $categorie_page)) {
        ?>
        <div id="container">
            <div class="direct">
            <div id="adm"><h2><a href="reservation.php"><?= $forfait[FORF_NOM]?></a></h2></div>
            <div id="re"></div><img src="<?= IMG_PATH . $forfait[FORF_PHOTO1] ?>"</div>

            <div id="p"><p><?= $forfait[FORF_DESCRIPTION] ?></p></div>


</div>


        <?php
    } // if
}; // foreach
?>
<?php
require_once('view/page_bottom.php');
?>