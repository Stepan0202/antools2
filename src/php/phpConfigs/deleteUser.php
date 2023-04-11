<?php
        
        include $_SERVER["DOCUMENT_ROOT"] . "/php/partials/header.php";
?>
<section class="container">
<?php
    if(!empty($_GET)){
        $id = $_GET['id'];
        echo $id;
        $sql_delete = "DELETE FROM user WHERE `user`.`id`=" . $id;
        mysqli_query($conn, $sql_delete);
        // header("Location: /php/admin/");
    }

?>

</section>
