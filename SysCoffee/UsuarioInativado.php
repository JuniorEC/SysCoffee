<?php include ("cabecalho.php");
include ("Buscas.php");

$id = $_POST['id'];
InativaUsuario($id);
header("Location: BuscaUsuario.php?inativado=true");
die();
?>