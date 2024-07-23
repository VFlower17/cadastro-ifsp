<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cliente.css">
</head>
<body>
    <form action="CadastroClienteExe.php" method="post">
        <legend>Cadastro Cliente</legend>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <Label for="senha">Senha</Label>
            <input type="password" name="senha" id="senha">
        </div>
        <div>
            <label for="bool">Cliente Ativo</label>
            
        </div>
        <div>
            <label for="cidade">Cidade</label>
            <select name="cidade" id="cidade">
                <php
                    
                ?>
            </select>
        </div>
        <div>
            <button type="submit">Cadastrar</button>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="index.html">Voltar</a>
                </li>
            </ul>
        </nav>
    </form>
</body>
</html>