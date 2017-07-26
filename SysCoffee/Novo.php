<body>

    <div class="navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">SysCoffee</a>
                </div>
                <?php
                if(isset($_SESSION['valida']) != null && $_SESSION['valida'] == 1){ ?>
                 <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Usuarios<span class="caret"></span></a>
                        <ul class="dropdown-menu">
    
                            <?php
                            if(isset($tipo) && $tipo != "Graduado(a)" && $tipo != "Graduando(a)"){
                            ?>
                                <li><a href="AddUsuario.php">Adicionar Usuário</a></li>
                            <?php }?>
                                <li><a href="BuscaUsuario.php">Gerenciar Usuários</a></li>
                        </ul>
                        </li>
                        
                        
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Pagamentos<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            
                            <?php
                            if(isset($tipo) && $tipo != "Graduado(a)" && $tipo != "Graduando(a)"){
                            ?>
                                <li><a href="AddPagamento.php">Adicionar Pagamento</a></li>
                            <?php } ?>  
                                <li><a href="Pagamentos.php">Pagamento mensal</a></li>
                                <li><a href="HistoricoPagamento.php">Histórico de Pagamentos</a></li>
                         </ul>
                         </li>  
                            
                              
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Despesas<span class="caret"></span></a>
                        <ul class="dropdown-menu">     
                               
                            <li><a href="NovaDespesa.php">Nova Despesas</a></li>
                            <li><a href="HistoricoDespesas.php">Histórico de Despesas</a></li>
                        </ul>
                        </li>
                        
                        <?php
                        if(isset($tipo) && $tipo == "Chefe(a)" || $tipo == "Guardião"){
                        ?>     
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Caixa<span class="caret"></span></a>
                        <ul class="dropdown-menu">     
                            <li><a href="GerenciadorCaixa.php">Gerenciar Caixa</a></li>
                        </ul>
                        </li>    
                        <?php }?>       
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['usuario']['email']; ?><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Meu Perfil</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="Logout.php">Sair</a></li>
                        </ul>
                        </li>
                    </ul>
                
               </div>
<?php }?>
            </div>         
    </div>                  
<div class="container">
    <div class="principal">
