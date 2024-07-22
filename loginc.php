<body>

<?php include('nav.php')?> 

<section class="login-section">

<h1>De Retour Parmis Nous Équipe ZooTopia !</h1>
<a href="index.php"><div class="end-logo" id="logo-login">
    <img src="CSS\assets\LogoZoo.PNG" 
        class="logo-login" alt="logo"></div></a>

<div class="form-wrap">
    <div class="tabs">
    <h3 class="signup-tab"><a class="active" href="#signup-tab-content">S'inscrire</a></h3>
    <h3 class="login-tab"><a href="#login-tab-content">Se connecter</a></h3>
    </div><!--.tabs-->



    
















    <div id="login-tab-content">
        <form class="login-form" action="" method="post">
            <input type="text" name="userlog" class="input" id="user_login" autocomplete="off" placeholder="Email ou Pseudo">
            <input type="password" name="passwordlog" class="input" id="user_pass" autocomplete="off" placeholder="Mot de Passe">
            <input type="checkbox" class="checkbox" id="remember_me">
            <label for="remember_me">Se Souvenir De Moi</label>
            <input type="submit" class="button" value="Se connecter">
        </form><!--.login-form-->
        <div class="help-text">
        <p><a href="#">Mot de passe oublié ?</a></p>
        </div><!--.help-text-->
    </div><!--.login-tab-content-->
    </div><!--.tabs-content-->
</div><!--.form-wrap-->

</section>