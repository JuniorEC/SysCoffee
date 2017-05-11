<?php 
include("cabecalho.php");
include("logica_usuario.php");
?>
<?php if (isset($_GET["logout"]) && $_GET["logout"]==true) { ?>
    <p class="alert-danger">Deslogado com sucesso!</a>
<?php }?>
<?php if (isset($_SESSION["success"])) { ?>
    <p class="alert-success"><?= $_SESSION["success"]?></a>
<?php
    unset($_SESSION["success"]);
 }?>
<?php if (isset($_SESSION["danger"])) { ?>
    <p class="alert-danger"><?= $_SESSION["danger"]?></a>
<?php
    unset($_SESSION["danger"]);
}?>

    <h1>Bem Vindo</h1>
    
        <?php if(UsuarioEstaLogado()) {?>
            <p class="text-success">Você esta logado como <?=UsuarioLogado()?>.<a href="Logout.php">Sair</a></p>  
        <?php } else {?>
    
            <h2>Login</h2>
            <form action="Login.php" method="post">
            <table class="table">
                <tr>
                    <td>Email</td>
                    <td><input class="form-control" type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Senha</td>
                    <td><input class="form-control" type="password" name="senha"></td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary">Login</button></td>
                </tr>    
                    
             </table>
             </form>
        <?php } ?>            
<?php include ("rodape.php")?>