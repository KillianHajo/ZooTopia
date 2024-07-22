<?php 
session_start();
require_once 'head.php';
require_once ('nav.php');?>
<?php
require_once 'db.php';
$userId = $_GET['id'];
$token = $_GET['token'];
if (isset($_GET['id']) && isset($_GET['token'])){
    $query = "SELECT * FROM users WHERE id =? AND reset_token = ? AND reset_at > DATE_SUB(NOW(), INTERVAL 30 MINUTE) AND confirmed_at IS NOT NULL";
    $req =  $pdo->prepare($query);
    $req->execute([$userId, $token]);
    $user = $req->fetch();
    
    if ($user) {
        if (!empty($_POST)) {
            if (!empty($_POST['password']) || $_POST['password'] == $_POST['password_confirm']) {
                $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
                $query =  "UPDATE users SET password = ?, reset_token = NULL,reset_at = NULL WHERE id= ?";
                $pdo->prepare($query)->execute([$password,$userId]);

                $_SESSION['flash']['success'] = "Votre mot de passe a été mis à jour !";
                $_SESSION['auth'] = $user;
                header('Location: index.php');
                exit();
            }
        } else {
            $_SESSION['flash']['danger'] = "Les deux mots de passes ne correspondent pas !";
        }

    }else{
        $_SESSION['flash']['danger'] = "Cette réinitialisation n'est plus valide";
        header('Location: login.php');
        exit();
    }
}else{
    header('Location: login.php' );
    exit();
}







?>


<section>
    <h1 style="text-align: center;  margin-top: 200px">Réinitialiser votre mot de passe</h1>
<div style="margin-bottom: 200px" class="form-wrap">
    <div id="login-tab-content">
        <form class="login-form" action="" method="post">
            <label for="passwort">Mot de Passe</label>
            <input type="password" name="password" class="input" id="user_pass" autocomplete="off" placeholder="Nouveau mot de passe">
            <label for="passwort">Confirmation de votre nouveau mot de passe</label>
            <input type="password" name="password_confirm" class="input" id="user_pass" autocomplete="off" placeholder="Nouveau Mot de passe">
            <input type="submit" class="button" value="Réinitialiser">
        </form><!--.login-form-->
    </div>
</div>
</section>











<?php require_once ('footer.php');?>
