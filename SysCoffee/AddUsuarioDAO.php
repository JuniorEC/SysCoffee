<?php include ("cabecalho.php");
include ("logica_usuario.php");

verificaUsuario();

function InsereUsuario ( $nome, $email, $hierarquia, $senha) {
    $query ="insert into dados_colaboradores (nome, tipo, email, senha) values ('{$nome}','{$hierarquia}','{$email}','".md5($senha)."')";
    return mysqli_query(Conecta::PegaConexao(), $query);
}


$nome = $_GET['nome'];
$email = $_GET['email'];
$hierarquia = $_GET['hierarquia'];
$senha = $_GET['senha'];

if(InsereUsuario( $nome, $email, $hierarquia, $senha)) { ?>
    <p class ="text-success"> O usuário <?= $nome ?> foi adicionado/</p>
<?php } else { ?>
    $msg = mysqli_error(Conecta::PegaConexao());
<?php
}
?>
<?php include ("rodape.php"); ?>