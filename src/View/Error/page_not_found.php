<?php ob_start(); ?>
    <div class="container">

    </div>
<?php $content = ob_get_clean(); ?>
<?php require("src/View/layout_error.php"); ?>