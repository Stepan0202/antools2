<?php
    include $_SERVER["DOCUMENT_ROOT"] . "/php/phpConfigs/db.php";
    require($_SERVER['DOCUMENT_ROOT'] . "/php/partials/header.php");
    require($_SERVER['DOCUMENT_ROOT'] . "/php/partials/menu.php");
    if(!empty($_POST)){
        $sql_edit = 'UPDATE user SET phone = "'.$_POST['phone'].'", mail = "'. $_POST['mail'] .'", name = "'. $_POST['name']. '", password = "'. $_POST["pas"].'" WHERE `user`.`id` = ' . $_GET['id'] . ';';
        if(mysqli_query($conn, $sql_edit)) echo "User edited succesfull";
        $_POST = array();
    }
    else {    
        $sql_get = "SELECT * FROM user WHERE id = " . $_GET['id'];
        $result = mysqli_query($conn, $sql_get);
        
        foreach ($result as $key) {
            $id = $key['id'];
        }
    }
?>
    <form action="/php/phpConfigs/editUser.php?id=<?php echo $_GET['id']?>" method="POST" class="leadForm__form signUpForm__form" >
            <label for="signUpForm__name">Your name</label>
            <input type="text" name = "name" id="signUpForm__name" class="leadForm__search lead__search" placeholder="Enter your name">

            <label for="signUpForm__mail">E-mail</label>
            <input type="mail" name = "mail" id="signUpForm__mail" class="leadForm__search lead__search" placeholder="Enter your email...">

            <label for="signUpForm__phone">Phone</label>
            <input type="tel" name = "phone" id="signUpForm__phone" class="leadForm__search lead__search" placeholder="Enter your phone">

            <label for="signUpForm__pas">Password</label>
            <input type="password" name = "pas" id="signUpForm__pas" class="leadForm__search lead__search" placeholder="Enter your phone">

            <button type="submit" class="button button_colorfull leadForm__submitButton" action="#">Join Us</button>
        </form>
<?php
