<?php 
    // Inclui o arquivo de validação
    include "../validar.php"; 

    // Início do documento HTML
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alteração de Cadastro</title>
    <link href="css/stylescript.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
        <div class="row">
           <?php 
           // Inclui o arquivo de conexão com o banco de dados
           include "conexao.php";

           // Obtém os dados do formulário
           $id = $_POST['id'];
           $nome = $_POST['nome'];
           $endereco = $_POST['endereco'];
           $telefone = $_POST['telefone'];
           $email = $_POST['email'];
           $data_nascimento = $_POST['data_nascimento'];

           // Atualiza os dados no banco de dados
           $sql = "UPDATE `pessoas` set nome = '$nome', endereco = '$endereco', telefone = '$telefone', email = '$email', data_nascimento = '$data_nascimento' WHERE cod_pessoa = $id";

           // Verifica se a consulta foi bem-sucedida
           if (mysqli_query($conn, $sql)) {
                mensagem("$nome alterado com sucesso!", 'success');
           } else {
                mensagem("$nome NÃO foi alterado!", 'danger');
           }

           ?>
           <hr>
           <a href="index.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    
    <!-- Adiciona o script do Bootstrap para funcionalidades JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
