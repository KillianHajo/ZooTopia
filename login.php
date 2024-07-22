<?php
session_start();
require_once('db.php'); 
require_once('function.php');
include('head.php');

reconnect_auto();

if (!empty($_POST) && !empty($_POST['userlog']) && !empty($_POST['passwordlog'])){
    $query = "SELECT * FROM users WHERE (username = :userlog OR email = :userlog) AND confirmed_at IS NOT NULL";
    $req = $pdo->prepare($query);
    $req->execute(['userlog' => $_POST['userlog']]);
    $user = $req->fetch();

    if ($user && password_verify($_POST['passwordlog'], $user->password)) {
        $_SESSION['auth'] = $user;
        $_SESSION['flash']['success'] = "Connexion éffectué avec succès";
        if (isset($_POST['remember'])) {
            $remember_token = generateToken(100);
            $query = "UPDATE users SET remember_token = ? WHERE id = ?";
            $pdo->prepare($query)->execute([$remember_token,$user->id]);
            setcookie("remember",$user->id . "::" .$remember_token. sha1($user->id . "Vparrot"),time()+60 * 60 * 24 * 7);
        }


        header("Location: index.php");
        exit();
    }else{
        $_SESSION['flash']['danger'] = "Identifiant ou mot de passe incorrecte";
    }
}

if (!empty($_POST)){
    $errors = [];
//PSEUDO VALIDATION
    if (empty($_POST['username']) || !preg_match("#^[a-zA-Z0-9_]+$#", $_POST['username'])){
        $errors['username'] = "Vous devez rentrer un pseudo";
        var_dump($errors['username']);
    }else{
    //SELECT * FROM pseudo unique
        $query = "SELECT * FROM users WHERE username = ?";
        $req = $pdo->prepare($query);
        $req->execute([$_POST['username']]);
        if ($req->fetch()) {
            $errors['usermame'] = "Ce pseudo est déjà utilisé";
        }
    }
    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Utiliser une adresse valide";
    }else{
        //SELECT * FROM pseudo unique
        $query = "SELECT * FROM users WHERE email = ?";
        $req = $pdo->prepare($query);
        $req->execute([$_POST['email']]);
        if ($req->fetch()) {
        $errors['email'] = "Cet email est déjà utilisé";
}
    }
    //MOT DE PASSE
    if (empty($_POST['password']) || $_POST['password']!==$_POST['confirmation']){
        $errors['password'] = "Vous devez rentrer le même mot de passe";
        var_dump($errors['password']);
    }else{
    if (empty($errors)){
        $query = "INSERT INTO users(username,email,password,confirmation_token) VALUES(?,?,?,?)";
        $req = $pdo->prepare($query);
        $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
        $token = generateToken(100);
        $req->execute([$_POST['username'],$_POST['email'],$password,$token]);
        $userId = $pdo->lastInsertId();
        $mail = $_POST['email'];
        $subject = "Confirmation création du compte";
        $message = "Afin de confirmer votre compte, merci de cliquer sur ce lien\n\n
        http://localhost/confirm.php?id=$userId&token=$token";

        mail($mail,$subject,$message);
        $_SESSION['flash']['success'] = "Compte créé, veuillez confirmer votre adresse-mail via votre boîte mail";



        header("Location: login.php");
        exit();
    }
}
}
?>






<body>

<?php include('nav.php')?> 

<section class="login-section">

<h1>De Retour Parmis Nous Équipe ZooTopia !</h1>
<a href="index.php"><div class="end-logo" id="logo-login">
    <img src="CSS/assets/LogoZoo.png" 
        class="logo-login" alt="logo"></div></a>

<div class="form-wrap">
    <div class="tabs">
    <h3 class="signup-tab"><a class="active" href="#signup-tab-content">S'inscrire</a></h3>
    <h3 class="login-tab"><a href="#login-tab-content">Se connecter</a></h3>
    </div><!--.tabs-->


    <div class="tabs-content">
    <div id="signup-tab-content" class="active">
        <form class="signup-form" action="" method="post">
        <input type="email" name="email" class="input" id="user_email" autocomplete="off" placeholder="Email">
        <input type="text" name="username" class="input" id="user_name" autocomplete="off" placeholder="Pseudo">
        <input type="password" name="password" class="input" id="user_pass" autocomplete="off" placeholder="Mot de Passe">
        <input type="password" name="confirmation" class="input" autocomplete="off" placeholder="Confirmation mot de passe">
        <input type="submit" class="button" name="submit" value="S'inscrire">
        </form><!--.login-form-->
        <div class="help-text">
            <p>En vous connectant, vous acceptez les conditions.</p>
            <p><a href="#">Terms of service</a></p>
        </div><!--.help-text-->
    </div><!--.signup-tab-content-->


















    <div id="login-tab-content">
        <form class="login-form" action="" method="post">
            <input type="text" name="userlog" class="input" id="user_login" autocomplete="off" placeholder="Email ou Pseudo">
            <input type="password" name="passwordlog" class="input" id="user_pass" autocomplete="off" placeholder="Mot de Passe">
            <input type="checkbox" name="remember" class="checkbox" id="remember_me">
            <label for="remember_me">Se Souvenir De Moi</label>
            <input type="submit" class="button" value="Se connecter">
        </form><!--.login-form-->
        <div class="help-text">
        <p><a href="remember.php">Mot de passe oublié ?</a></p>
        </div><!--.help-text-->
    </div><!--.login-tab-content-->
    </div><!--.tabs-content-->
</div><!--.form-wrap-->

</section>