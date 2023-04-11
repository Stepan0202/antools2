<?php
        include $_SERVER["DOCUMENT_ROOT"] . "/php/partials/header.php";
?>
<section class="container">
<?php
    if(!empty($_POST)){
        $succes = false;
        $name = $_POST['signUpForm__name'];
        $mail = $_POST['signUpForm__mail'];
        $phone = $_POST['signUpForm__phone'];
        $pas = $_POST['signUpForm__pas'];
        $pas2 = $_POST['signUpForm__pas2'];
        ?> <h3> <?php
        if($pas != $pas2){
            echo ("Passwords are not match" );
   
        }
        else{
            $sql_add = "INSERT INTO `antools`.`user` (`phone`, `name`, `password`, `mail`) VALUES ('" . $phone ."', '" . $name . "', '" . $pas . "', '" . $mail . "')";
            $sql_get = "SELECT * FROM `user`";
            
            $result = mysqli_query($conn, $sql_get);
            foreach ($result as $row){
                if ($row['name'] == $name){
                    $succes = false;
                    echo ("This name already exist! Please, enter another name");
                    break;
                }
                $succes = true;
            }
            mysqli_query($conn, $sql_add);
        }
        ?>
        </h3>
        <a href="/signUp.php"> <button class="button button_colorfull signIn header__signIn"> Back </button></a>
        <?php
        if($succes){
            header("Location: /");
        }
    }

?>

</section>
