
<?php
        include $_SERVER["DOCUMENT_ROOT"] . "/php/partials/header.php";
        $sql_get = "SELECT * FROM user";
    ?>
    
    <div class="wrapper">
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/php/partials/menu.php" ?>

        <div class="container text-center">
        
            <div class="row">
            <?php
                if($result = mysqli_query($conn, $sql_get)){
                    
                    $keys = array_keys($result->fetch_assoc());
                    foreach ($keys as $key){
                        echo '<div class="col">' . ucfirst($key) . '</div>';
                        
                    }
                    echo '<div class="col">Control</div>';
                ?>
            </div>
            <?php
                   foreach($result as $row){
                        echo '<div class="row">';
                        foreach($row as $cell){
                            echo '<div class="col">' . $cell . '</div>';
                        }
                        echo '<div class="col">
                                <button class="button button__admin button__admin_edit" data-id="'.$row['id'] .'">Edit</button>
                                <button class="button button__admin button__admin_delete" data-id="'.$row['id'] .'">Delete</button>
                            </div>';
                        echo '</div>';
                }
            }
            ?>
         
        </div>
    </div>
    <script src="/js/delete.js"></script>
<?php
    require($_SERVER["DOCUMENT_ROOT"]. "/php/partials/footer.php");
?>