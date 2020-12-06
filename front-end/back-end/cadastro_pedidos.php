<?php

  
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['fone'];
        $produto = $_POST['produto'];
        $valor_unit = $_POST['valor_unit'];
        $qtd = $_POST['qtd'];
        $valorfinal = $_POST['preco_final'];

        $conn = mysqli_connect("localhost", "root", "", "fullstackeletro");
        $sql = "INSERT INTO pedidos VALUES (null, '$nome', '$endereco', '$telefone', '$produto', '$valor_unit', $qtd, '$valorfinal');";
        mysqli_query($conn, $sql);

        if ($conn) {
            echo "Conexão bem sucedida!";
        }
        else {
            die("Erro ao realizar conexão " . mysqli_connect_error());
        }
        
        echo "<script>
                alert('A sua mensagem foi enviada com sucesso!')
             </script>";

             header("Access-Control-Allow-Origin:*");
             
?>

