<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tables.css">
</head>
<body>
    <?php
        include('includes/conexao.php');
        $sql = "SELECT * FROM cliente";
        $result = mysqli_query($con, $sql);
        
        $row = mysqli_fetch_array($result);
    ?>
    <div>
        <h1>Consulta de Clientes</h1>
        <table align="center" border="1" width="500">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Email</th>
                <th id="alt">Alterar</th>
                <th id="del">Deletar</th>
            </tr>
            <?php
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nome']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td><a href='AlteraCliente.php?id=".$row['id']."' id='alt'>Alterar</a></td>";
                    echo "<td><a href='DeletaCliente.php?id=".$row['id']."' id='del'>Deletar</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <nav>
            <ul>
                <li><a href="Index.html">Página inicial</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>