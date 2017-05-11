<?php include ("cabecalho.php")
include ("Conecta.php");
include ("Banco_Compra.php");

<table class = "table table-striped table-bordered">

    <?php
     $Compras = Listacompras($conexao);
        foreach(Compras as Compra) :
     ?>
      <tr>
          <td><?=$Compra ['nome']?></td>
      </tr>
    <?php    
        endforeach

    ?>
</table>
<?php include ("rodape.php")?>