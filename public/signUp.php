<?php
    include $_SERVER["DOCUMENT_ROOT"] . "/php/phpConfigs/db.php";
    include $_SERVER["DOCUMENT_ROOT"] . "/php/partials/header.php";

?>
<header class="header">
        <div class="header__container container">
            <div class="header__logo logo">
                <a href="/">
                    <img src="/img/logo.jpg" alt="Antools logo. Go to the main page" class="logo__img">
                    <p class="logo__name">antools.</p>
                </a>
            </div>
            <div class="header__menu menu">
                <div class="menu__icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav class="menu__body">
                    <ul class="menu__list">
                        <li class="menu__item"> <a class="menu__link" href="/">Home</a></li>
                        <li class="menu__item menu__item_drop">
                            <a class="menu__link" href="">Categories</a>
                            <span class="menu__arrow"><span class="menu__arrow_2"></span></span>
                            <ul class="dropMenu">
                                <li class="dropMenu__item dropable"><a class="menu__link" href="">Programming</a></li>
                                <li class="dropMenu__item dropable"><a class="menu__link" href="">Design</a></li>
                                <li class="dropMenu__item dropable"><a class="menu__link" href="">Managment</a></li>
                                <li class="dropMenu__item dropable"><a class="menu__link" href="">Command work</a></li>
                            </ul>
                        </li>
                        <li class="menu__item"><a class="menu__link" href="">My Collections</a></li>
                        <li class="menu__item"><a class="menu__link" href="">Blog</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header__controls">
                <button class="button button_transparent login header__login">
                    <a href="/login.php">Login</a>
                </button>
                <button class="button button_colorfull signIn header__signIn">
                    <a href="/signUp.php">Sign Up</a>
                </button>
            </div>
        </div>
</header> 
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