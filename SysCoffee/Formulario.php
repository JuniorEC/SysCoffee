<?php include("cabecalho.php");
include ("Conecta.php");
include ("logica_usuario.php");

verificaUsuario();
?>

            <h1>Adicionar novo Usuário</h1>
<form action="AdicionaProduto.php">
    <table class="table">
        <tr>
            <td>Nome</td>
            <td> <input class="form-control" type="text" name="nome"><br/></td>
        </tr>
        <tr>
            <td>Email</td>
            <td> <input class="form-control" type="text" name="email"><br/></td>
        </tr>
        <tr>
            <td>Hierarquia</td>
            <td>
                <input class="form-control" type="radio" name="hierarquia">Graduando<br/>
                <input class="form-control" type="radio" name="hierarquia">Mestrando<br/>
                <input class="form-control" type="radio" name="hierarquia">Doutorando<br/>
                <input class="form-control" type="radio" name="hierarquia">Chefe<br/>
            </td>

        </tr>
        <tr>
             <td>Senha</td>
             <td> <input class="form-control" type="text" name="senha"><br/></td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-primary" type=<"submit">Cadastrar</button>
            </td>
        </tr>    
    </table>
</form

<?php include ("rodape.php")?>