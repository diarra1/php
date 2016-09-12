<?php
require_once(dirname(__FILE__).'/defines.php');
require_once(dirname(__FILE__).'/data/forfaits.php');
$forfaits_data = get_forfaits();

$categorie_page = false;
// Si une catégorie est précisée dans la QueryString ET que sa valeur est connue
if (array_key_exists('categorie', $_GET) && in_array($_GET['categorie'], get_categories()) ) {
    $categorie_page = $_GET['categorie'];
}
require_once('data/page_top.php');
?>
    <h1>Catalogue</h1>
<?php
foreach ($forfaits_data as $id => $forfait) {
    // On affiche le forfait si il n'y a pas de categorie de page
    // ou bien si le forfait appartient à la categorie demandée
    if (($categorie_page === false) || ($forfait[FORF_CATEGORY] == $categorie_page)) {
        ?>
        <div class="forfait">
            <h2><?= $forfait[FORF_NOM] ?></h2>
            <p><?= $forfait[FORF_DESCRIPTION] ?></p>
            <p><img src="<?= IMG_PATH . $forfait[FORF_PHOTO1] ?>" alt=""/></p>


        </div>
        <?php
    } // if
}; // foreach
?>