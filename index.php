<?php
require_once('data/page_top.php');// Inclusion des defines
require_once(dirname(__FILE__).'/data/forfaits.php');
$forfaits_data = get_forfaits();
$categorie_page = true;
?>
<main>
<h1 id="b"><?php  echo "BIENVENUE CHEZ  L' AGENCE TREVAGOR"   ?></h1>

<?php
require_once ('data/page_bottom.php');
?>