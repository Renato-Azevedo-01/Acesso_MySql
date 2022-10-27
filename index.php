<?php
    include 'conexao.php';
    
    echo "<table border=2>";
    echo "<tr>";
    echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>NOME</th>";
        echo "<th>PROFISSÃO</th>";
        echo "<th>NASCIMENTO</th>";
        echo "<th>SEXO</th>";
        echo "<th>PESO</th>";
        echo "<th>ALTURA</th>";
        echo "<th>NACIONALIDADE</th>";
        echo "<th>CURSO PREFERIDO</th>";
    echo "</tr>";
    //Fazendo um UPGRADE
    $sql = ("update gafanhotos set cursopreferido = 2 where id= 5");
    $resultado = mysqli_query($conexao,$sql) or die('Erro ao conectar o BD');
    // Fazendo um SELECT (OBS: Altere as variáveis para não ocorrer comandos sobrepostos
    $sql1 = ("select * from gafanhotos where sexo = 'F' OR sexo = 'M' ");    
    #$resultado = mysqli_query($conexao,$sql1) or die('Erro ao conectar o BD');
     $resultado = $conexao->query($sql1) or die('Erro ao conectar o BD : '.$conexao->error);      
    while ($registro = mysqli_fetch_array($resultado)){        
        $id = $registro['id'];
        $nome = $registro['nome'];
        $profissao = $registro['profissao'];
        $nascimento = $registro['nascimento'];
        $sexo = $registro['sexo'];
        $peso = $registro['peso'];
        $altura = $registro['altura'];
        $nacionalidade = $registro['nacionalidade'];
        $cursoPreferido = $registro['cursopreferido'];
        echo "<tr>";
        echo "<td>" . $id . "</td>";
        echo "<td>" . $nome . "</td>";
        echo "<td>" . $profissao . "</td>";
        echo "<td>" . $nascimento . "</td>";
        echo "<td>" . $sexo . "</td>";
        echo "<td>" . $peso . "</td>";
        echo "<td>" . $altura . "</td>";
        echo "<td>" . $nacionalidade . "</td>";
        echo "<td>" . $cursoPreferido . "</td>";
        echo "<tr>";
    }
    mysqli_close($conexao);
    
    
?>