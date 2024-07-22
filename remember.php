<?php 
require_once ('db.php');
require_once ('function.php');
    if (!empty($_POST && !empty($_POST['email']))) {
$query = "SELECT * FROM users WHERE email =? AND confirmed_at IS NOT NULL";
$req = $pdo->prepare($query);
$req->execute([$_POST['email']]);

$user = $req->fetch();

if($user){
    session_start();
    $reset_token = generateToken(100);
    $query = "UPDATE users SET reset_token = ?, reset_at = NOW() WHERE id =?";
    $req = $pdo->prepare($query);
    $req->execute([$reset_token,$user->id]);
    $mail = $_POST['email'];
        $subject = "Réinitialisation de votre mot de passe";
        $message = "Afin de reinitialiser votre mot de passe, merci de cliquer sur ce lien\n\n
        http://localhost/reset.php?id=$user->id&token=$reset_token";

        mail($mail,$subject,$message);
        $_SESSION['flash']['success'] = "Les instructions vous ont été envoyés dans votre boîte de réception";
        header("Location: login.php");
        exit();
}
    }else{
        $_SESSION['flash']['danger'] = "Aucun compte ne correspond à cet email";
}


?>


<?php 

include ('head.php');
require_once ('nav.php');

//Utilisation encore de la mise en page Login pour Rappel de Mot de Passe
?>

<section>
    <h1 style="text-align: center;  margin-top: 200px">Retrouver votre mot de passe</h1>
<div style="margin-bottom: 200px" class="form-wrap">
    <div id="login-tab-content">
        <form class="login-form" action="" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" class="input" id="user_pass" autocomplete="off" placeholder="Votre email de récupération">
            <input type="submit" class="button" value="Envoyer">
        </form><!--.login-form-->
    </div>
</div>
</section>











<?php require_once ('footer.php')?>