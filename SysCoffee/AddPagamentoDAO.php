<?php include ("cabecalho.php");
include ("logica_usuario.php");

verificaUsuario();

function InserePagamento ( $nome,$descricao, $valor, $data) {
    $query ="insert into pagamentos (nome, descricao ,valor, data) values ('{$nome}','{$descricao}','{$valor}','{$data}')";
    return mysqli_query(Conecta::PegaConexao(), $query);
}


$nome = $_GET['nome'];
$descricao = $_GET['descricao'];
$valor = $_GET['valor'];
$data = $_GET['data'];

if(InserePagamento( $nome,$descricao, $valor, $data)) { ?>
    <p class ="text-success"> O pagamento <?= $valor ?> foi adicionado/</p>
<?php } else { ?>
    $msg = mysqli_error(Conecta::PegaConexao());
<?php
}   
?>