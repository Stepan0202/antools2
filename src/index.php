
    <?php
        include $_SERVER["DOCUMENT_ROOT"] . "/php/phpConfigs/db.php";
        include $_SERVER["DOCUMENT_ROOT"] . "/php/partials/header.php";
        $sql_get = "SELECT * FROM user";
    ?>
    
    <div class="wrapper">
        @@include("html/header.html")

        <div class="container text-center">
        
            <div class="row">
            <?php
                if($result = mysqli_query($conn, $sql_get)){
                    
                    $keys = array_keys($result->fetch_assoc());
                    foreach ($keys as $key){
                        echo '<div class="col">' . ucfirst($key) . '</div>';
                    }
 
                ?>
            </div>
            <?php
                   foreach($result as $row){
                    echo '<div class="row">';
                        foreach($row as $cell){
                            
                            echo '<div class="col">' . $cell . '</div>';
                            
                        }
                    echo '</div>';
                }
            }
            ?>
         
        </div>

        @@include("html/main.html")
        @@include("html/footer.html")
    </div>
    <script src="/js/adaptive.js"></script>
    <script src="/js/slider.js"></script>
<?php
    require($_SERVER["DOCUMENT_ROOT"]. "/php/partials/footer.php");
?>