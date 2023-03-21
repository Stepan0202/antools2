<?php
    include $_SERVER["DOCUMENT_ROOT"] . "/php/phpConfigs/db.php";
    include $_SERVER["DOCUMENT_ROOT"] . "/php/partials/header.php";

?>
@@include('html/header.html')
<div class="error_message"></div>
<section class="leadForm signUpForm">
    <div class="leadForm__container signUpForm__container container">
        <form action="/php/phpConfigs/addUser.php" method="POST" class="leadForm__form signUpForm__form" >
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
    require($_SERVER["DOCUMENT_ROOT"]. "/php/partials/footer.php");
?>
<!-- php/phpConfigs/addUser.php -->