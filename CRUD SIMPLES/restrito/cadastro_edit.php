<?php include "../validar.php"; ?> <!-- Inclui o arquivo de validação PHP -->

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alteração de Cadastro</title>
    <link href="css/stylecadastro.css" rel="stylesheet"> <!-- Inclui a folha de estilo CSS -->
  </head>

  <body>

    <?php 
    // Conecta ao banco de dados e recupera os dados do usuário para edição
    include "conexao.php";
    $id = $_GET['id'] ?? '';
    $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";
    $dados = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($dados);
    ?>

    <div class="container">
        <div class="row">
            <div class="col">
            <h1>Cadastro</h1>
            <form action="edit_script.php" method="POST"> <!-- Formulário para editar dados -->
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <!-- Campo de entrada para o nome, com valor preenchido pelos dados existentes -->
                        <input type="text" class="form-control" name="nome" required value="<?php echo $linha['nome']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <!-- Campo de entrada para o endereço, com valor preenchido pelos dados existentes -->
                        <input type="text" class="form-control" name="endereco" value="<?php echo $linha['endereco']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <!-- Campo de entrada para o telefone, com valor preenchido pelos dados existentes -->
                        <input type="text" class="form-control" name="telefone" value="<?php echo $linha['telefone']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="nome">Email</label>
                        <!-- Campo de entrada para o email, com valor preenchido pelos dados existentes -->
                        <input type="email" class="form-control" name="email" value="<?php echo $linha['email']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="nome">Data de Nascimento</label>
                        <!-- Campo de entrada para a data de nascimento, com valor preenchido pelos dados existentes -->
                        <input type="date" class="form-control" name="data_nascimento" value="<?php echo $linha['data_nascimento']; ?>">
                    </div>

                    <div class="form-group">
                    <!-- Botão para enviar o formulário e salvar alterações -->
                    <input type="submit" class="btn btn-primary" value="Salvar Alterações">
                    <!-- Campo oculto para enviar o ID junto com o formulário -->
                    <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa']; ?>">
                    </div>
                
                </form>
                <!-- Link para voltar à página inicial -->
                <a href="index.php" class="btn btn-info">Voltar para o Início</a>
            </div>
        </div>
    </div>

    <!-- Inclui o script do Bootstrap para funcionalidades JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


  </body>
</html>
