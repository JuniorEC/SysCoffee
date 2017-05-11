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
            <td>Id do pagamento</td>
            <td>Nome</td>
            <td>Valor</td>
            <td>Ação</td>
      </tr>

    <?php
     $Pagamentos = BuscaPagamento();
        foreach($Pagamentos as $pagamento) :
     ?>
      <tr>
          <td><?=$pagamento ['id']?></td>
          <td><?=$pagamento ['nome']?></td>
          <td><?=$pagamento ['valor']?></td>
          <td>
              <form action="UsuarioInativado.php" method="post">
                  <input type="hidden" name="id_pagamento" value="<?=$pagamento['id_pagamento']?>">
                  <button class="btn btn-success">Pagar</button>
              </form>    
          </td>    
      </tr>
    <?php    
        endforeach

    ?>
</table>
<?php 
include ("rodape.php")?>