<?php
    include $_SERVER["DOCUMENT_ROOT"] . "/php/phpConfigs/db.php";
    include $_SERVER["DOCUMENT_ROOT"] . "/php/partials/header.php";
?>
@@include('html/header.html')
<section class="leadForm signUpForm">
    <div class="leadForm__container signUpForm__container container">
        <form action="#" method="POST" class="leadForm__form signUpForm__form" >
            
            <label for="signUpForm__mail">E-mail or name</label>
            <input type="text" name = "signUpForm__mailOrName" id="signUpForm__mail" class="leadForm__search lead__search" placeholder="Your name or e-mail">

           
            <label for="signUpForm__pas">Password</label>
            <input type="password" name = "signUpForm__pas" id="signUpForm__pas" class="leadForm__search lead__search" placeholder="Enter your phone">

            <button type="submit" class="button button_colorfull leadForm__submitButton" action="#">Join Us</button>
        </form>
    </div>
</section>
    <script src="/js/adaptive.js"></script>
<?php
    if(!empty($_POST)){
        
        $nameOrMail = $_POST['signUpForm__mailOrName'];
        $pas = $_POST['signUpForm__pas'];
        

        $sql_get = "SELECT * FROM `user`";
        $result = mysqli_query($conn, $sql_get);
        foreach ($result as $row){
            if(($row['name'] == $nameOrMail || $row['mail'] == $nameOrMail) && $row['password'] == $pas){
                die ("Enter is sucesfull!");
            }
        }
        echo "Wrong name or password";
    }

    require($_SERVER["DOCUMENT_ROOT"]. "/php/partials/footer.php");
?>