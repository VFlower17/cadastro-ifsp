<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Deletar Cidade</h1>
    <?php
        include('includes/conexao.php');
        $id = $_GET['id'];
        $sql = "DELETE FROM cidade WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "<h2>Dados deletados!</h2>";
        }
        else{
            echo "Erro ao deletar dados!</h2>";
            echo "<h2>".mysqli_error($con)."</h2>";
        }
    ?>
</body>
</html>