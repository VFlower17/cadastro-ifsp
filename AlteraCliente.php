<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cliente WHERE id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
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
    <form action="AlteraClienteExe.php" method="post">
        <legend>Alteração do Cliente</legend>
        <div id="alt">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo $row['nome'] ?>">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" value="<?php echo $row['senha'] ?>>">
        </div>
        <div>
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        </div>
        <div>
            <button type="submit">Alterar</button>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="ListarClientes.php">VOLTAR</a>
                </li>
            </ul>
        </nav>
    </form>
</body>
</html>