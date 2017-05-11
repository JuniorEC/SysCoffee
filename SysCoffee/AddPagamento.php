<?php include("cabecalho.php");
include ("logica_usuario.php");
?>


<h1>Adicionar novo pagamento</h1>
<form action="AddPagamentoDAO.php">
    <table class="table">
        <tr>
             <td>Nome Solicitante</td>
             <td> <input class="form-control" type="text" name="nome"><br/></td>
        </tr>
        <tr>
             <td>Pagamento</td>
             <td> <input class="form-control" type="text" name="descricao"><br/></td>
        </tr>
                <tr>
             <td>Valor</td>
             <td> <input class="form-control" type="text" name="valor"><br/></td>
        </tr>
        
        <tr>
             <td>Data (yyyy-mm-dd)</td>
             <td> <input class="form-control" type="text" name="data"><br/></td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-primary" type=<"submit">Cadastrar</button>
            </td>
        </tr>
        
    </table>
</form>
<?php include ("rodape.php")?>