<?php include("cabecalho.php");
include ("logica_usuario.php");

verificaUsuario();
?>

            <h1>Adicionar usuário</h1>
<form action="AddUsuarioDAO.php">
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
                <select name="hierarquia" class="form-control">
                        <option values="0">Selecione</option>
                        <option values="1">Graduando(a)</option>
                        <option values="2">Graduado(a)</option>
                        <option values="3">Mestrando(a)</option>
                        <option values="4">Mestre(a)</option>
                        <option values="5">Doutorando(a)</option>
                        <option values="6">Pesquisador(a)</option>
                        <option values="7">Chefe(a)</option>
                        
                 </select>
            </td>
        </tr>
        <tr>
             <td>Senha</td>
             <td> <input class="form-control" type="password" name="senha"><br/></td>
        </tr>
        <tr>
             <td>Confirmação da Senha</td>
             <td> <input class="form-control" type="password" name="Confirmacaosenha"><br/></td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-primary"  type=<"submit">Cadastrar</button>
            </td>
        </tr>    
    </table>
</form>

<?php include ("rodape.php")?>