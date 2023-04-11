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
                        <?php if ($_SESSION['isAdmin'] == 1) echo  '<li class="menu__item adminOnly"><a class="menu__link" href="/php/admin/">Admin panel</a></li>' ?>
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