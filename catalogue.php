<?php
require_once('view/page_top.php');// Inclusion des defines//
//require_once (dirname(__FILE__) .'/view/forfaits.php');
?>
<main>
    <h1>Catalog</h1>
</main>
<?php
require_once('view/page_bottom.php');// Inclusion des defines
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div id="wrapper">
    <?php
    foreach ($forfaits_data as $id =>$forfaits)
    ?>
    <div class="forfaits">
        <h2><?php echo $forfaits['nom'];?> </h2>
        <p><?php echo $forfaits['description'];?> </p>

    </div>

</div>
<?php

?>
}
?>
</body>
</html>