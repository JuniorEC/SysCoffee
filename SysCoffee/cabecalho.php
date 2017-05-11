<?php include_once('Buscas.php'); 
if(isset($_SESSION['tipo'])){
$tipo = $_SESSION['tipo'];    
}

?>
<htlm>
    <head>
        <title>SysCoffee</title>
        <meta charset="utf-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/loja.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
		<script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
			<script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    </head>
    <body>

    <div class="navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">SysCoffee</a>
                </div>
                <?php
                if(isset($_SESSION['valida']) != null && $_SESSION['valida'] == 1){ ?>
                <div>
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
                      <?php }?>  
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
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['usuario']['email']; ?><span class="caret"></span></a>
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
            
