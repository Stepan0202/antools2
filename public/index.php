
    <?php
        include $_SERVER["DOCUMENT_ROOT"] . "/php/phpConfigs/db.php";
        include $_SERVER["DOCUMENT_ROOT"] . "/php/partials/header.php";
        $sql_get = "SELECT * FROM user";
    ?>
    
    <div class="wrapper">
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
        <main class="main">
    <section class="lead">
        <div class="lead__container container">
            <div class="lead__description">
                <h1 class="lead__header">Awesome tools for
                    Designer & Developer<span class="colorText">.</span></h1>
                <p class="lead__text">Antool is a web collection of information on paid or free Design and Development tools</p>
                <form action="#" class="lead__searchForm input" id="searchForm">
                    <input type="text" class="lead__search" placeholder="find 430+ tools...">
                    <button type="submit" class="button button_colorfull lead__searchButton">Search</button>
                </form>
                <div class="lead__socialLinks socialLinks">
                    <a href="google.com" class="fbIconLink socialLink"><img src="/img/icons/fb_link.png" alt="Link to our Facebook page"></a>
                    <a href="#" class="instaIconLink socialLink"><img src="/img/icons/insta_link.jpg" alt="link to our Instagram page"></a>
                    <a href="#" class="twitterIconLink socialLink"><img src="/img/icons/twitter_link.jpg" alt="link to our Twitter page"></a>
                </div>
            </div>
            <div class="lead__imageContainer">
                <img src="/img/lead__img.png" alt="" class="lead__img">
            </div>
        </div>
    </section>
    <section class="cards">
        <div class="cards__wrapper container">
            <h2 class="cards__header">Most Popular Tools</h2>
            <p class="cards__description">Tools for the best Designers and Developers most popularly used in the world</p>
            <section class="cards__container">
                <section class="cards__item">
                    <section class="card">
    <div class="card_container">
        <div class="card__head">
            <img src="/img/logos_figma.png" alt="Sketch logo" class="card__logo" width="@@width" height="@@height">
            <div class="card__headerContainer">
                <h3 class="card__header">FIGMA</h3>
                <div class="card__descriptor">Free</div>
            </div>
        </div>
        <p class="card__text fontSize16">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="card__footer">
            <div class="card__actions">
                <img src="/img/icons/like_link.png" alt="" class="card__like">
                <img src="/img/icons/download.png" alt="" class="card__download">
            </div>
            <button class="card__button button_transparent button">Visit</button>
        </div>
    </div>
</section>
                </section>
                <section class="cards__item">
                    <section class="card">
    <div class="card_container">
        <div class="card__head">
            <img src="/img/logos_sketch.png" alt="Sketch logo" class="card__logo" width="@@width" height="@@height">
            <div class="card__headerContainer">
                <h3 class="card__header">Sketch</h3>
                <div class="card__descriptor">Trial & Paid</div>
            </div>
        </div>
        <p class="card__text fontSize16">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="card__footer">
            <div class="card__actions">
                <img src="/img/icons/like_link.png" alt="" class="card__like">
                <img src="/img/icons/download.png" alt="" class="card__download">
            </div>
            <button class="card__button button_transparent button">Visit</button>
        </div>
    </div>
</section>
                </section>
                <section class="cards__item">
                    <section class="card">
    <div class="card_container">
        <div class="card__head">
            <img src="/img/logos_vsCode.png" alt="Visual Studio Code logo" class="card__logo" width="@@width" height="@@height">
            <div class="card__headerContainer">
                <h3 class="card__header">Visual Studio Code</h3>
                <div class="card__descriptor">Free</div>
            </div>
        </div>
        <p class="card__text fontSize16">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="card__footer">
            <div class="card__actions">
                <img src="/img/icons/like_link.png" alt="" class="card__like">
                <img src="/img/icons/download.png" alt="" class="card__download">
            </div>
            <button class="card__button button_transparent button">Visit</button>
        </div>
    </div>
</section>
                </section>
                <section class="cards__item">
                    <section class="card">
    <div class="card_container">
        <div class="card__head">
            <img src="/img/logos_notion.png" alt="Notion logo" class="card__logo" width="@@width" height="@@height">
            <div class="card__headerContainer">
                <h3 class="card__header">Notion</h3>
                <div class="card__descriptor">Free & Paid</div>
            </div>
        </div>
        <p class="card__text fontSize16">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="card__footer">
            <div class="card__actions">
                <img src="/img/icons/like_link.png" alt="" class="card__like">
                <img src="/img/icons/download.png" alt="" class="card__download">
            </div>
            <button class="card__button button_transparent button">Visit</button>
        </div>
    </div>
</section>
                </section>
                <section class="cards__item">
                    <section class="card">
    <div class="card_container">
        <div class="card__head">
            <img src="/img/logos_slack.png" alt="Slack logo" class="card__logo" width="@@width" height="@@height">
            <div class="card__headerContainer">
                <h3 class="card__header">Slack</h3>
                <div class="card__descriptor">Free & Paid</div>
            </div>
        </div>
        <p class="card__text fontSize16">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="card__footer">
            <div class="card__actions">
                <img src="/img/icons/like_link.png" alt="" class="card__like">
                <img src="/img/icons/download.png" alt="" class="card__download">
            </div>
            <button class="card__button button_transparent button">Visit</button>
        </div>
    </div>
</section>
                </section>
                <section class="cards__item">
                    <section class="card">
    <div class="card_container">
        <div class="card__head">
            <img src="/img/logos_invision.png" alt="Invision logo" class="card__logo" width="@@width" height="@@height">
            <div class="card__headerContainer">
                <h3 class="card__header">Invision</h3>
                <div class="card__descriptor">Free & Paid</div>
            </div>
        </div>
        <p class="card__text fontSize16">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="card__footer">
            <div class="card__actions">
                <img src="/img/icons/like_link.png" alt="" class="card__like">
                <img src="/img/icons/download.png" alt="" class="card__download">
            </div>
            <button class="card__button button_transparent button">Visit</button>
        </div>
    </div>
</section>
                </section>
            </section>
            <button class="button button__transparent cards__button">Load more</button>
        </div>
    </section>
    <section class="clients container">
        <div class="clients__gradientBorder">
            <div class="clients__container">
                <h3 class="clients__header">Trusted more than 150+ brand</h3>
                <div class="clients__clientsList">
                    <div class="clients__imgContainer">
                        <img src="/img/logos_microsoft.png" alt="" class="clients__logo">
                    </div>
                    <div class="clients__imgContainer">
                        <img src="/img/logos_google.png" alt="" class="clients__logo">
                    </div>
                    <div class="clients__imgContainer">
                        <img src="/img/logos_slack_full_gray.png" alt="" class="clients__logo">
                    </div>
                    <div class="clients__imgContainer">
                        <img src="/img/logos_wordpress.png" alt="" class="clients__logo">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="new">
        <div class="new__container container">
            <div class="new__description">
                <h2 class="new__header">Newcomer Tools</h2>
                <p class="new__description">Wow! see the latest update of the most recommended tools from reliable designers and developers</p>
                <button class="button button_colorfull new__button">Explore more</button>
            </div>
            <div class="new__cards">
                <section class="new__cardItem">
                    <section class="card">
    <div class="card_container">
        <div class="card__head">
            <img src="/img/logos_zeplin.png" alt="Sketch logo" class="card__logo" width="56px" height="56px">
            <div class="card__headerContainer">
                <h3 class="card__header">Zeplin</h3>
                <div class="card__descriptor">Free</div>
            </div>
        </div>
        <p class="card__text fontSize14">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="card__footer">
            <div class="card__actions">
                <img src="/img/icons/like_link.png" alt="" class="card__like">
                <img src="/img/icons/download.png" alt="" class="card__download">
            </div>
            <button class="card__button button_transparent button">Visit</button>
        </div>
    </div>
</section>
                </section>
                <section class="new__cardItem">
                    <section class="card">
    <div class="card_container">
        <div class="card__head">
            <img src="/img/logos_phpstorm.png" alt="Sketch logo" class="card__logo" width="56px" height="56px">
            <div class="card__headerContainer">
                <h3 class="card__header">PHPStorm</h3>
                <div class="card__descriptor">Free</div>
            </div>
        </div>
        <p class="card__text fontSize@@fontSize">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="card__footer">
            <div class="card__actions">
                <img src="/img/icons/like_link.png" alt="" class="card__like">
                <img src="/img/icons/download.png" alt="" class="card__download">
            </div>
            <button class="card__button button_transparent button">Visit</button>
        </div>
    </div>
</section>
                </section>
                <section class="new__cardItem">
                    <section class="card">
    <div class="card_container">
        <div class="card__head">
            <img src="/img/logos_toolbox.png" alt="Sketch logo" class="card__logo" width="56px" height="56px">
            <div class="card__headerContainer">
                <h3 class="card__header">Toolbox</h3>
                <div class="card__descriptor">Free</div>
            </div>
        </div>
        <p class="card__text fontSize@@fontSize">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="card__footer">
            <div class="card__actions">
                <img src="/img/icons/like_link.png" alt="" class="card__like">
                <img src="/img/icons/download.png" alt="" class="card__download">
            </div>
            <button class="card__button button_transparent button">Visit</button>
        </div>
    </div>
</section>
                </section>
                <section class="new__cardItem">
                    <section class="card">
    <div class="card_container">
        <div class="card__head">
            <img src="/img/logos_procreate.png" alt="Sketch logo" class="card__logo" width="56px" height="56px">
            <div class="card__headerContainer">
                <h3 class="card__header">Procreate</h3>
                <div class="card__descriptor">Free</div>
            </div>
        </div>
        <p class="card__text fontSize@@fontSize">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="card__footer">
            <div class="card__actions">
                <img src="/img/icons/like_link.png" alt="" class="card__like">
                <img src="/img/icons/download.png" alt="" class="card__download">
            </div>
            <button class="card__button button_transparent button">Visit</button>
        </div>
    </div>
</section>
                </section>
            </div>
        </div>
    </section>
    <section class="main__slider">
    <section class="slider">
    <div class="slider__container container">
        <div class="slider__left"><img src="/img/icons/arrow.png" alt="Switch slide to left"></div>
        <div class="slider__content">
            <div class="slider__item">
                <div class="slider__photoContainer">
                    <img src="/img/photo__RonaldRichards.png" alt="Ronald Richards photo. Ronald is product manager">
                </div>
                <div class="slider__text"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni modi harum molestiae sunt ab rem exercitationem, aperiam iste! Aliquid placeat molestias tempore omnis fugiat illum, commodi officiis soluta cum?</p>
                </div>
                <div class="slider__table table">
                    <h2 class="table__name">Ronald Richards</h2>
                    <p class="table__info">Product Manager</p>
                </div>
            </div>
            <div class="slider__item">
                <div class="slider__photoContainer" >
                    <img src="/img/photo__RonaldRichards.png" alt="">
                </div>

                <div class="slider__text"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni modi harum molestiae sunt ab rem exercitationem, aperiam iste! Aliquid placeat molestias tempore omnis fugiat illum, commodi officiis soluta cum?</p></div>
                <div class="slider__table table">
                    <h2 class="table__name">Ronald Richards</h2>
                    <p class="table__info">Product Manager</p>
                </div>
            </div>
            <div class="slider__item">
                <div class="slider__photoContainer">
                    <img src="/img/photo__RonaldRichards.png" alt="">
                </div>
                <div class="slider__text"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni modi harum molestiae sunt ab rem exercitationem, aperiam iste! Aliquid placeat molestias tempore omnis fugiat illum, commodi officiis soluta cum?</p></div>
                <div class="slider__table table">
                    <h2 class="table__name">Ronald Richards</h2>
                    <p class="table__info">Product Manager</p>
                </div>
            </div>
        </div>
        <div class="slider__right"><img src="/img/icons/arrow.png" alt="Switch slide to right"></div>
    </div>
    <div class="slider__lines">
    </div>
</section>
    </section>
    <section class="leadForm">
        <div class="leadForm__container container">
            <h2 class="leadForm__header">Become a contributor?</h2>
            <p class="leadForm__tagline">Join us and get tips & tricks to become a great Designer and Developer</p>
            <form action="" class="leadForm__form">
                <input type="text" class="leadForm__search lead__search" placeholder="Enter your email...">
                <button type="submit" class="button button_colorfull leadForm__submitButton">Join Us</button>
            </form>
        </div>
    </section>
</main>
        <footer class="footer">
    <div class="footer__container container">
        <div class="footer__column footer__column_1">
            <div class="footer__logo logo">
                <img src="/img/logo.jpg" alt="" class="logo__img">
                <p class="logo__name">antools.</p>
            </div>
            <p class="footer__copyright">Copyright 2021. Antools</p>
            <p class="footer__lawInfo">Antool is a web collection of information on paid or free Design and Development tools</p>
        </div>
        <div class="footer__column footer__column_2">
            <h3 class="footer__header">Contact Us</h3>
            <ul>
                <li><a href="tel:+621987463">+621987463</a></li>
                <li>M Building, No.10 A</li>
                <li><a href="mailto: antools@awesome.com">antools@awesome.com</a></li>
            </ul>
        </div>
        <div class="footer__column footer__column_3">
            <h3 class="footer__header">Categories</h3>
            <nav>
                <li><a href="#"> Design</a></li>
                <li><a href="#">Development</a></li>
            </nav>
        </div>
        <div class="footer__column footer__column_4">
            <h3 class="footer__header">Company Info</h3>
            <nav>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Our Partners</a></li>
                <li><a href="#">Blog</a></li>
            </nav>
        </div>
    </div>
</footer>
    </div>
    <script src="/js/adaptive.js"></script>
    <script src="/js/slider.js"></script>
<?php
    require($_SERVER["DOCUMENT_ROOT"]. "/php/partials/footer.php");
?>