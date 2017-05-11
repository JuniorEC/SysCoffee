<?php 
include ("Buscas.php");
include ("logica_usuario.php");

$usuario = BuscaLoginUsuario($_POST["email"], $_POST["senha"]);

if ($usuario == null) {
    $_SESSION["danger"] = "Usuário ou senha inválido";
    header("Location: index.php");
} else {
    $_SESSION["success"] = "Usuário logado com sucesso.";
    LogaUsuario($usuario["email"]); # time() + 60);
    header("Location: index.php");
}
die();
