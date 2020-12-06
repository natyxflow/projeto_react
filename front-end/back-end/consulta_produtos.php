
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Consulta Produtos</title>
</head>
<body>

    <?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fullstackeletro";

    $conn = mysqli_connect($servername, $username, $password, $database);
    
    $sql = "select id, categoria, descricao, preco, precoFinal, imagem from produtos";
    $result = $conn->query($sql);

    echo "<h1>Lista de Produtos</h1><br>"; //print_r($result);

    while($row = $result->fetch_assoc()){
        echo 
        $row['id']. " - ".$row['categoria']. " - " .$row['descricao']. " - " .$row['preco']. " - " .$row['precoFinal']. " - " .$row['imagem']. "<hr>";
    }
    







    /* if(!$conn) {
        die("A conexão falhou" .mysqli_connect_error());
    }
    else {
        echo "conexão ok!";
    } 
    
     while($row = $result->fetch_assoc()){
        echo "<p> O usuário de Nome ".$row['nome']. " possui o e-mail: ".$row['email']."</p><hr>";
    }
    
    */

    ?>






    
</body>
</html>

