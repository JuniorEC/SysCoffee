<?php 
include_once('Buscas.php');

function UsuarioEstaLogado() {
    return isset($_SESSION["Usuario_logado"]);
}
function verificaUsuario() {
if(!UsuarioEstaLogado()) {
    $_SESSION["danger"] = "Você não tem acesso a esta funcionalidade. ";
    header("Location: index.php?falhaDeSeguranca=true");
    die();
}
}

function UsuarioLogado() {
   return $_SESSION["Usuario_logado"];
}

function LogaUsuario($email) {
    $_SESSION["Usuario_logado"] = $email;
}

function logout() {
   updateAcabarOnline($_SESSION['idUsuario']);
    session_destroy();
    $_SESSION['valida'] = 0;
}