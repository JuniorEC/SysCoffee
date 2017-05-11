<?php

class Conecta {
    
   private static $conexao ;
    
    function __construct(){
    }
    
    
    public static function PegaConexao() {
        return  mysqli_connect("localhost","root","","syscoffee");;
    }
    
    
    
}


