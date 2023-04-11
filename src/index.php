
    <?php
        include $_SERVER["DOCUMENT_ROOT"] . "/php/phpConfigs/db.php";
        include $_SERVER["DOCUMENT_ROOT"] . "/php/partials/header.php";
        $sql_get = "SELECT * FROM user";
    ?>
    
    <div class="wrapper">
        @@include("html/header.html")
        @@include("html/main.html")
        @@include("html/footer.html")
    </div>
    <script src="/js/adaptive.js"></script>
    <script src="/js/slider.js"></script>
<?php
    require($_SERVER["DOCUMENT_ROOT"]. "/php/partials/footer.php");
?>