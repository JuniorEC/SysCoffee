<?php include ("cabecalho.php");
include ("logica_usuario.php");

verificaUsuario();

function InsereDespesa ( $nome, $despesa, $valor, $data) {
    $query ="insert into despesas (nome, despesa,valor, data_despesa) values ('{$nome}','{$despesa}','{$valor}','{$data}')";
    return mysqli_query(Conecta::PegaConexao(), $query);
}


$nome = $_GET['nome'];
$despesa = $_GET['despesa'];
$valor = $_GET['valor'];
$data = $_GET['data_despesa'];

if(InsereDespesa( $nome, $despesa, $valor, $data)) { ?>
    <p class ="text-success"> A despesa <?= $despesa ?> foi adicionado/</p>
<?php } else { ?>
    $msg = mysqli_error(Conecta::PegaConexao());
<?php
}   
?>