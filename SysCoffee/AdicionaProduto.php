<?php include ("cabecalho.php");
include ("Conecta.php");
include ("logica_usuario.php")

verificaUsuario();

function InsereUsuario ($conexao, $nome, $email, $hierarquia, $senha) {
    $query ="insert into dados_colaboradores (nome, tipo, email, senha) values ('{$nome}','{$hierarquia}','{$email}','{$senha}')";
    return mysqli_query($conexao, $query);
}


$nome = $_GET['nome'];
$email = $_GET['email'];
$hierarquia = $_GET['hierarquia'];
$senha = $_GET['senha'];

if(InsereUsuario($conexao, $nome, $email, $hierarquia, $senha)) { ?>
    <p class ="text-success"> O usuário <?= $nome ?> foi adicionado/</p>
<?php } else { ?>
    $msg = mysqli_error($conexao);
<?php
}   
?>

<?php include ("rodape.php"); ?>