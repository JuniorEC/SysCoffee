<?php include("cabecalho.php");
include ("logica_usuario.php");
?>


<h1>Adicionar nova despesa</h1>
<form action="AddDespesaDAO.php">
    <table class="table">
        <tr>
             <td>Nome solicitante</td>
             <td> <input class="form-control" type="text" name="nome"><br/></td>
        </tr>

        <tr>
             <td>Despesa</td>
             <td> <input class="form-control" type="text" name="despesa"><br/></td>
        </tr>
                <tr>
             <td>Valor</td>
             <td> <input class="form-control" type="text" name="valor"><br/></td>
        </tr>
        
        <tr>
             <td>Data (yyyy-mm-dd)</td>
             <td> <input class="form-control" type="text" name="data_despesa"><br/></td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-primary" type=<"submit">Cadastrar</button>
            </td>
        </tr>
        
    </table>
</form>
<?php include ("rodape.php")?>