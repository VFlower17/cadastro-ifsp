<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dados.css">
</head>
<body>
    <?php
        include('includes/conexao.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $sql = "INSERT INTO cliente (nome, email, senha) VALUES ('".$nome."','".$email."','".$senha."')";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<div><h2>Dados cadastrados com sucesso!</h2>";
            echo "<nav> <ul>";
            echo "<li><a href='CadastroCliente.php'>Voltar</a></li>";
            echo "<li><a href='Index.html'>Página Inicial</a></li>";
            echo "</ul></nav>";
        }
        else{
            echo "<h2>Erro ao cadastrar!</h2>".mysqli_error($con);
            echo "<nav> <ul>";
            echo "<li><a href='CadastroCliente.php'>Voltar</a></li>";
            echo "<li><a href='Index.html'>Página Inicial</a></li>";
            echo "</ul></nav>";
        }
    ?>
</body>
</html>