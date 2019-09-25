<?php ob_start(); ?>
    <div class="container">
        aze
    </div>
<?php $content = ob_get_clean(); ?>
<?php require("src/View/layout.php"); ?>