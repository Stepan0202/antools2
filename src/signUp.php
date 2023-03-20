<?php
    include $_SERVER["DOCUMENT_ROOT"] . "/php/phpConfigs/db.php";
    include $_SERVER["DOCUMENT_ROOT"] . "/php/partials/header.php";

?>
@@include('html/header.html')
<div class="error_message"></div>
<section class="leadForm signUpForm">
    <div class="leadForm__container signUpForm__container container">
        <form action="#" method="POST" class="leadForm__form signUpForm__form" >
            <label for="signUpForm__name">Your name</label>
            <input type="text" name = "signUpForm__name" id="signUpForm__name" class="leadForm__search lead__search" placeholder="Enter your name">

            <label for="signUpForm__mail">E-mail</label>
            <input type="mail" name = "signUpForm__mail" id="signUpForm__mail" class="leadForm__search lead__search" placeholder="Enter your email...">

            <label for="signUpForm__phone">Phone</label>
            <input type="tel" name = "signUpForm__phone" id="signUpForm__phone" class="leadForm__search lead__search" placeholder="Enter your phone">

            <label for="signUpForm__pas">Password</label>
            <input type="password" name = "signUpForm__pas" id="signUpForm__pas" class="leadForm__search lead__search" placeholder="Enter your phone">

            <label for="signUpForm__pas">Repeat password</label>
            <input type="password" name = "signUpForm__pas2" id="signUpForm__pas2" class="leadForm__search lead__search" placeholder="Enter your phone">

            <button type="submit" class="button button_colorfull leadForm__submitButton" action="#">Join Us</button>
        </form>
    </div>
</section>
    <script src="/js/adaptive.js"></script>
    <script src="/js/slider.js"></script>
<?php
    if(!empty($_POST)){
    
        $name = $_POST['signUpForm__name'];
        $mail = $_POST['signUpForm__mail'];
        $phone = $_POST['signUpForm__phone'];
        $pas = $_POST['signUpForm__pas'];
        $pas2 = $_POST['signUpForm__pas2'];

        $sql_get = "SELECT * FROM `user`";
        $result = mysqli_query($conn, $sql_get);
        if($pas != $pas2){
            echo("Passwords are not match");
           
        }
        if(empty($pas)){
            echo("Please, enter your password");
    
        }
        if(!empty($pas) && empty($pas2)){
            echo("Please, repeat your password");
          
        }

        foreach ($result as $row){
            if ($row['name'] == $name){
                die ("This name already exist! Please, enter another name");
            }
        }
}
    require($_SERVER["DOCUMENT_ROOT"]. "/php/partials/footer.php");
?>
<!-- php/phpConfigs/addUser.php -->