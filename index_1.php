<?php
    include 'conexao.php';
    
    echo 'Olá você !!!';
    
    $sql = ("select * from gafanhotos where id = 1");
    
    $resultado = mysqli_query($conexao,$sql) or die("Erro ao conectar o BD");
    //Somente uma tupla. Para mais, utilize o WHILE e crie uma tabela para 
    //visualizar os dados 
    $dados = mysqli_fetch_array($resultado); //array associativo
    
    $elemento = $dados['id'];
    
    echo "<p> " . $dados['nome'] . "</p>";       
    
     mysqli_close($conexao);
    
?>