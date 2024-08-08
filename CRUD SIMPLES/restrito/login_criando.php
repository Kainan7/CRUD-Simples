<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Usuário</title>
    <link href="css/styleusuario.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- Utilize a classe "col" para definir as colunas no Bootstrap -->
            <div class="col">
                <h1 class="display-4">Crie seu Usuário</h1>

                <!-- Formulário de cadastro usando método POST -->
                <form action="processar_cadastro.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputNome">Seu Nome</label>
                        <!-- Adicione o atributo "id" para associar o rótulo ao campo de entrada -->
                        <input type="text" class="form-control" id="exampleInputNome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Seu Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="login" required>
                        <!-- Corrigi o tipo de input para email -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Sua Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="senha" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Crie Seu Usuário</button>
                </form>

                <a href="index.php" class="voltar">Voltar</a>
            </div>
        </div>
    </div>
</body>
</html>
