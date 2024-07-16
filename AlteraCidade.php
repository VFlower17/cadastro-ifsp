<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cidade WHERE id=$id";
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
</head>
<body>
    <form action="AlteraCidadeExe.php" method="post">
        <legend>Alteração da Cidade</legend>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo $row['nome'] ?>">
        </div>
        <div>
            <label for="estado">Estado</label>
            <select name="estado" id="estado">
                <option value="SP" <?php echo $row['estado'] == "SP" ? "selected" : "" ?>>SP</option>
                <option value="RJ" <?php echo $row['estado'] == "RJ" ? "selected" : "" ?>>RJ</option>
                <option value="MG" <?php echo $row['estado'] == "MG" ? "selected" : "" ?>>MG</option>
                <option value="AC" <?php echo $row['estado'] == "AC" ? "selected" : "" ?>>AC</option>
                <option value="ES" <?php echo $row['estado'] == "ES" ? "selected" : "" ?>>ES</option>
                <option value="TO" <?php echo $row['estado'] == "TO" ? "selected" : "" ?>>TO</option>
                <option value="PE" <?php echo $row['estado'] == "PE" ? "selected" : "" ?>>PE</option>
                <option value="RR" <?php echo $row['estado'] == "RR" ? "selected" : "" ?>>RR</option>
                <option value="RS" <?php echo $row['estado'] == "RS" ? "selected" : "" ?>>RS</option>
                <option value="RN" <?php echo $row['estado'] == "RN" ? "selected" : "" ?>>RN</option>
                <option value="PA" <?php echo $row['estado'] == "PA" ? "selected" : "" ?>>PA</option>
                <option value="SC" <?php echo $row['estado'] == "SC" ? "selected" : "" ?>>SC</option>
            </select>
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
                    <a href="index.html">VOLTAR</a>
                </li>
            </ul>
        </nav>
    </form>
</body>
</html>