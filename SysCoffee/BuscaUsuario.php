<?php include ("cabecalho.php"); ?>

<?php
    if(array_key_exists("inativado",$_GET) && $_GET["inativado"]==true) {
?>
    <p class="alert-success">Usuário Inativado.</p>
<?php
}
?>

<table class="table table-striped table-bordered">
      <tr>
            <td>Usuário</td>
            <td>Hierarquia</td>
            <td>Email</td>
            <td>Ação</td>
      </tr>

    <?php
     $usuarios = ListaUsuario();
        foreach($usuarios as $usuario) :
     ?>
      <tr>
          <td><?=$usuario ['nome']?></td>
          <td><?=$usuario ['tipo']?></td>
          <td><?=substr($usuario['email'],0,30)?></td>
          <td>
              <form action="UsuarioInativado.php" method="post">
                  <input type="hidden" name="id" value="<?=$usuario['id']?>">
                  <button class="btn btn-success">Editar</button>
                  <button class="btn btn-danger">Inativar</button>
              </form>    
          </td>    
      </tr>
    <?php    
        endforeach

    ?>
</table>
<?php 
include ("rodape.php")?>