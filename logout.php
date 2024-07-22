<?php 
session_start();
setcookie("remember","",-1);
unset($_SESSION['auth']);
$_SESSION['flash']['success'] = "Vous êtes déconnectés avec succès";
header("Location: index.php");
