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
    <title>Exclusão de Cadastro</title>
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

           // Exclui o registro do banco de dados
           $sql = "DELETE FROM pessoas WHERE cod_pessoa = $id";

           // Verifica se a exclusão foi bem-sucedida
           if (mysqli_query($conn, $sql)) {
                mensagem("$nome excluído com sucesso!", 'success');
           } else {
                mensagem("$nome NÃO excluído!", 'danger');
           }

           ?>
           <hr>
           <a href="index.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>

  </body>
</html>
