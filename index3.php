<?php
    include 'conexao.php';
  
    if(!file_exists('index.html')){
        echo "entrei - Não tem index.html";
        ob_start();

        echo '<table border = 2 style = "color:#009999 ;text-align:center;padding:10">';
        echo "<tr></tr>";
        echo "<th>CODVENDA</th>";
        echo "<th>DATA</th>";
        echo "<th>LOJA</th>";
        echo "<th>PRODUTO</th>";
        echo "<th>QUANTIDADE</th>";
        echo "<th>VALOR UNITÁRIO</th>";
        echo "<th>VALOR FINAL</th>";
        
    
        $sql = ("select * from vendas");    
        #$resultado = mysqli_query($conexao,$sql1) or die('Erro ao conectar o BD');
        $resultado = $conexao->query($sql) or die('Erro ao conectar o BD : '.$conexao->error);      
        while ($registro = mysqli_fetch_array($resultado)){        
            $codvenda = $registro['codvenda'];
            $data = $registro['data'];
            $loja = $registro['loja'];
            $produto = $registro['produto'];
            $quantidade = $registro['quantidade'];
            $valorunit = $registro['valorunit'];
            $valorfin = $registro['valorfin'];
                    
            echo "<tr>";
            echo "<td>  $codvenda </td>";
            echo "<td> $data </td>";
            echo "<td> $loja </td>";
            echo "<td> $produto </td>";
            echo "<td> $quantidade </td>";
            echo "<td> $valorunit </td>";
            echo "<td> $valorfin </td>";
            echo "<tr>";
        }
        echo "</table>";
        mysqli_close($conexao);
        
        $cache = ob_get_contents();
        file_put_contents('index.html',$cache);
        ob_end_clean();
        echo "Reproduzindo cache <br>";
        echo $cache;
        #require('index.html');
    }
    else{
        echo "mostrando index.html <br>";
        require('index.html');
    }

   
?>