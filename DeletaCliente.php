<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Del.css">
</head>
<body>
    <div>
        <h1>Deletar Cliente</h1>
        <?php
            include('includes/conexao.php');
            $id = $_GET['id'];
            $sql = "DELETE FROM cliente WHERE id = $id";
            $result = mysqli_query($con, $sql);
            if($result){
                echo "<h2>Dados deletados!</h2>";
            }
            else{
                echo "Erro ao deletar dados!</h2>";
                echo "<h2>".mysqli_error($con)."</h2>";
            }
        ?>
        <nav>
            <ul>
                <li>
                    <a href="ListarClientes.php">Voltar</a>
                </li>
                <li>
                    <a href="Index.html">Página inicial</a>
                </li>
            </ul>
        </nav>
    </div>
</body>
</html>