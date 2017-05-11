<?php include ("cabecalho.php")
?>
<table class="table table-striped table-bordered">
        <tr>
            <td>Id do pagamento</td>
            <td>Nome</td>
            <td>Valor</td>
            <td>Data do pagamento</td>
        </tr>
    <?php
     $Pagamentos = BuscaPagamento();
        foreach($Pagamentos as $pagamento) :
     ?>
      <tr>
          <td><?=$pagamento ['id']?></td>
          <td><?=$pagamento ['nome']?></td>
          <td><?=$pagamento ['valor']?></td>
          <td><?=$pagamento ['data']?></td>
      </tr>
    <?php    
        endforeach
    ?>
</table>
<?php include ("rodape.php")?>