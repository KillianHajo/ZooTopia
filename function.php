<?php

function generateToken($lenght){

    $alphaNum = "45415dzDZDkiJDJKSQDIDHJZIDD54848DZ864";
        return substr(str_shuffle(str_repeat($alphaNum, $lenght)), 0, $lenght);
        die();
}

function is_connect(){
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }
    if (!isset($_SESSION['auth'])) {
        $_SESSION['flash']['danger'] = "Vous ne pouvez pas accèder à cette page";
        header("Location: login.php");
        exit();
    }     
}

function reconnect_auto(){
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }
    if (isset($_COOKIE['remember']) && !isset($_SESSION['auth'])){
        require_once ('db.php');
        if (!isset($pdo)) {
            global $pdo;
        }
            $remember_token = $_COOKIE['remember'];
            $parts = explode ("::",$remember_token);
            $userId = $parts[0];
            $req = $pdo->prepare("SELECT * FROM users WHERE id = ?");
            $req->execute([$userId]);
            $user = $req->fetch();

            if ($user) {
                $expected = $userId. "::" .$user->remember_token. sha1($user->id . "Vparrot");
                if ($expected == $_COOKIE['remember']) {
                    $_SESSION['auth'] = $user;
                    $_SESSION['flash']['success'] = "Connexion éffectué avec succès";
                    setcookie("remember",$remember_token,time()+60 * 60 * 24 * 7);
                }else{
                    setcookie("remember","",-1);
                }
            }{
                setcookie("remember","",-1);
            }
        }
}