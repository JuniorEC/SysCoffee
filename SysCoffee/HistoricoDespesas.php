<?php include ("cabecalho.php")
?>
<table class="table table-striped table-bordered">
        <tr>
            <td>Id da despesa</td>
            <td>Nome</td>
            <td>Valor</td>
            <td>Data da despesa</td>
        </tr>
    <?php
     $Despesas = BuscaDespesa();
        foreach($Despesas as $despesa) :
     ?>
      <tr>
          <td><?=$despesa ['id_despesa']?></td>
          <td><?=$despesa ['nome']?></td>
          <td><?=$despesa ['valor']?></td>
          <td><?=$despesa ['data_despesa']?></td>
      </tr>
    <?php    
        endforeach
    ?>
</table>
<?php include ("rodape.php")?>