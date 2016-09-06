<?php
require_once (dirname(__FILE__).'/../defines.php');
?>

<nav>
    <ul>
        <?php foreach ($menu_data as $label => $filename) { ?>
            <li>
                <a href="<?= $filename?>"><?= $label?></a>
            </li>
        <?php } ?>
    </ul>
</nav>