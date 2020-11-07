<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
</head>

<body>
    <div class="container-flex">
        <?php
        require_once('menu.html');
        ?>
        <?php
        require_once('connect.php');
        ?>
        <center>
            <h2>Venda</h2>
            <form method="post" name="venda" action="">
                Nome do cliente: <br>
                <input type="text" name="nome"><br>
                Endereço: <br>
                <input type="text" name="endereco"><br>
                Telefone: <br>
                <input type="text" name="telefone"><br>
                Produto: <br>
                <input type="text" name="produto"><br>
                Valor unitário: <br>
                <input type="text" name="valor"><br>
                Quantidade: <br>
                <input type="number" name="qtd"><br>
                <br>
                <input type="submit" name="submit" value="Adicionar venda">
            </form>
        </center><br>
        <?php

        if (isset($_POST['nome']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['produto']) && isset($_POST['valor']) && isset($_POST['qtd'])) {
            echo "Dados recebidos! ";

            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $produto = $_POST['produto'];
            $valor = $_POST['valor'];
            $qtd = $_POST['qtd'];

            $sql = "INSERT INTO pedidos (nome_cliente, endereço, telefone, produto, valor_uni, qtd) VALUES ('$nome', '$endereco', '$telefone', '$produto', '$valor', '$qtd')";

            $result = $conn->query($sql);

            if ($result) {
                echo "Dados inseridos com sucesso";
            } else {
                echo "Dados não inseridos na tabela";
            }
        }

        ?>
        <?php
        require_once('rodape.html');
        ?>
    </div>    
</body>

</html>