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
<div class= "container" >
    <h1>Bem Vindo</h1>
    
        <?php if(UsuarioEstaLogado()) {?>
            <p class="text-success">Você esta logado como <?=UsuarioLogado()?>.<a href="Logout.php">Sair</a></p>  
        <?php } else {?>
        
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-caption">
            <h2>Login</h2>
            <form action="Login.php" method="post">
              <div class="input-group col-xs-4">
                
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">

              </div>
               
              <div class="input-group col-xs-4" >

                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">

              </div>
              
              <div class="input-group col-xs-4" >
                    <button class="btn btn-success btn-block">Login</button>
                    <label for="or">or</label>
                    <button class="btn btn-primary btn-block">Sing in</button>
              </div>
       </div>       
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="la.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="chicago.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="ny.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
             </form>
    <div class="container">
        <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Faça seu pagamento!</h5>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img alt="Visa Checkout" class="v-button" role="button" src="https://sandbox.secure.checkout.visa.com/wallet-services-web/xo/button.png"/>
                            <img alt="Visa Checkout" class="v-button" role="button" src="https://secure.checkout.visa.com/wallet-services-web/xo/button.png"/>
                        </div>
                    </div>
                </div>
        </div>
    </div>
<script type="text/javascript"src="https://sandbox-assets.secure.checkout.visa.com/checkout-widget/resources/js/integration/v1/sdk.js"></script>
<script type="text/javascript"src="https://assets.secure.checkout.visa.com/checkout-widget/resources/js/integration/v1/sdk.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <?php } ?>            
<?php include ("rodape.php")?>
