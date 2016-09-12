<?php
require_once('view/page_top.php');// Inclusion des defines
require_once(dirname(__FILE__) . '/data/forfaits.php');
$forfaits_data = get_forfaits();
$categorie_page = true;
?>
<main>
<h1 id="b"><?php  echo "BIENVENUE CHEZ  L' AGENCE TREVAGOR"   ?></h1>

    <div class="wrapper">
        <h1></h1>
        <div id="article1">
            <div id="article2">
                <div id="article3">
                    <div id="article4">
                        <div class="sliderContainer">
                            <div class="content">
                                <div class="item"><img src="images/images-modal/croisiere_01.jpg" alt="1"/>
                                </div>
                                <div class="item"><img src="images/images-modal/chiens_traineau.jpg" alt="2"/>
                                </div>
                                <div class="item"><img src="images/images-modal/iceberg_02.jpg" alt="3"/>
                                </div>
                                <div class="item"><img src="images/images-modal/escalade_Husky.jpg" alt="4"/>
                                </div>
                            </div>
                        </div>
                        <a href="#article4">4</a>
                    </div>
                    <a href="#article3">3</a>
                </div>
                <a href="#article2">2</a>
            </div>
            <a href="#article1">1</a>
        </div>
    </div>
<a href="catalogue.php">re</a>
</main>
<?php
require_once('view/page_bottom.php');
?>