<?php include "../validar.php"; ?> <!-- Inclui o arquivo de validação PHP -->

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="css/stylecadastro.css" rel="stylesheet"> <!-- Inclui a folha de estilo CSS específica para o formulário de cadastro -->
  </head>

  <body>
    <div class="container">
        <div class="row"> 
            <div class="col">
            <h1>Cadastro</h1>
            <form action="cadastro_script.php" method="POST" enctype="multipart/form-data">
                    <!-- Formulário de cadastro com o método POST para enviar os dados e enctype para permitir o envio de arquivos -->

                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>

                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco">
                    </div>

                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" name="telefone">
                    </div>

                    <div class="form-group">
                        <label for="nome">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                        <label for="nome">Data de Nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento">
                    </div>

                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control" name="foto" accept="image/*">
                    </div>

                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                
                </form>

                <a href="index.php" class="btn btn-info">Voltar para o Início</a> <!-- Link para voltar à página inicial -->
            </div>
        </div>
    </div>

    <script src="valida_cadastro.js"></script> <!-- Inclui o script JavaScript para validação do formulário -->

</body>
</html>
