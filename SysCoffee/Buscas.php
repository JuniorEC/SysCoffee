<?php
include_once('Conecta.php');
session_start();

function mostrar($valor, $pause = false)
{
    echo "<pre>";
       print_r($valor);
    echo "</pre>";
    
    if($pause){
        die();
    }
}

function updateOnline ($usuario) {
   
    $idUsuario = $usuario['id'];
    $sql = "UPDATE  `syscoffee`.`dados_colaboradores` SET  `online` =  '1' WHERE  `dados_colaboradores`.`id` ={$idUsuario};";
    $Resultado = mysqli_query(Conecta::PegaConexao(), $sql);
    $_SESSION['usuario'] = $usuario;
    $_SESSION['idUsuario'] = $idUsuario;
    $_SESSION['valida'] = 1;
    $_SESSION['tipo'] = $usuario['tipo'];
    $_SESSION['email'] = $usuario['email'];    
    $Resultado->num_rows;
        
}


function updateAcabarOnline ($usuario) {
    
    $idUsuario = $usuario;
    $sql = "UPDATE  `syscoffee`.`dados_colaboradores` SET  `online` =  null WHERE  `dados_colaboradores`.`id` ={$idUsuario};";
    mysqli_query(Conecta::PegaConexao(), $sql);    
}

function BuscaPagamento () {
    $Pagamentos = array();
    $Resultado = mysqli_query(Conecta::PegaConexao(), "select * from pagamentos");
        while($pagamento = mysqli_fetch_assoc($Resultado)){
         array_push($Pagamentos, $pagamento);
    }
    return $Pagamentos;
}

function BuscaDespesa () {
    $Despesas = array();
    $Resultado = mysqli_query(Conecta::PegaConexao(), "select * from despesas");
        while($despesa = mysqli_fetch_assoc($Resultado)){
         array_push($Despesas, $despesa);
    }
    return $Despesas;
}

function ListaUsuario () {
    $usuarios = array();
    $Resultado = mysqli_query(Conecta::PegaConexao(), "select * from dados_colaboradores as c where c.delete='0'");
        while($usuario = mysqli_fetch_assoc($Resultado)){
         array_push($usuarios, $usuario);
    }
    return $usuarios;
}

function BuscaLoginUsuario($email, $senha) {
    $senhaMd5 = md5($senha);
    $query = "select * from dados_colaboradores where email='{$email}' and senha='{$senhaMd5}'";
    $resultado = mysqli_query(Conecta::PegaConexao(), $query);
    $usuario = mysqli_fetch_assoc($resultado);
    updateOnline($usuario);
    return $usuario;
}

function BuscaTipo($email) {
    $query = "select tipo from dados_colaboradores where email='{$email}'";
    $resultado = mysqli_query(Conecta::PegaConexao(), $query);
    $usuario = mysqli_fetch_assoc($resultado);
    updateOnline($usuario);
    return $usuario;
}

function InativaUsuario($id) {
    $usuariosInativados = array();
    $Resultado = mysqli_query(Conecta::PegaConexao(), "select * from dados_colaboradores where id='{$id}'");
    while($usuario = mysqli_fetch_assoc($Resultado)){
         array_push($usuariosInativados, $usuario);
    return $usuariosInativados;
}
}