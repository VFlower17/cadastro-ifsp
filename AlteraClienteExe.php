<?php
    include('includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="AltCliente.css">
</head>
<body>
    <div id="exe">
        <h1>Alteração do cliente</h1>
        <?php
            $sql = "UPDATE cliente SET nome = '$nome', senha = '$senha' WHERE id = '$id'";
            $result = mysqli_query($con, $sql);
            if($result)
                echo "<h3>Dados atualizados!</h3>";
            else
                echo "<h3>Erro ao atualizar dados!</h3><br>".mysqli_error($con);
        ?>
        <nav>
            <ul>
                <li>
                    <a href="ListarClientes.php">Listar cidades</a>
                </li>
                <li>
                    <a href="Index.html">Página inicial</a>
                </li>
            </ul>
        </nav>
    </div>
</body>
</html>