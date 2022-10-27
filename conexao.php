<?php

    $hostname = "localhost";
    $usuario = "root";
    $senha = "Cocacola20133#";
    $bancodedados = "cadastro";
    
    $conexao = mysqli_connect($hostname, $usuario, $senha, $bancodedados); //temos que colocar o "i" no mysql(i)_connect
    
    if ($conexao->connect_errno) {
        echo "Falha ao conectar: (" .$conexao->connect_errno . ") " ;            
    }
    else{
        echo '<br>Conectado<br>';
    }
?>

