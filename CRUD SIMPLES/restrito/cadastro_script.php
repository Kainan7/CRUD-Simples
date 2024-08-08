<?php include "../validar.php"; ?> <!-- Inclui o arquivo de validação PHP -->

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="css/stylescript.css" rel="stylesheet"> <!-- Inclui a folha de estilo CSS -->
  </head>

  <body>
    <div class="container">
        <div class="row">
           <?php 
           // Inclui o arquivo de conexão com o banco de dados
           include "conexao.php";

           // Obtém os dados do formulário via método POST
           $nome = $_POST['nome'];
           $endereco = $_POST['endereco'];
           $telefone = $_POST['telefone'];
           $email = $_POST['email'];
           $data_nascimento = $_POST['data_nascimento'];

           // Obtém a foto do formulário e move para o diretório específico
           $foto = $_FILES['foto'];
           $nome_foto = mover_foto($foto);

           // Se não houver foto, atribui null ao nome_foto
           if ($nome_foto == 0){
              $nome_foto = null;
           }

           // Monta a consulta SQL para inserção dos dados
           $sql = "INSERT INTO pessoas (nome, endereco, telefone, email, data_nascimento, foto) VALUES
           ('$nome', '$endereco', '$telefone', '$email', '$data_nascimento', '$nome_foto')";

           // Executa a consulta
           $result = mysqli_query($conn, $sql);

           // Exibe a foto se houver
           if($nome_foto != null){
              echo "<img src='img/$nome_foto' title='$nome_foto' class='mostra_foto'>";
           }

           // Exibe mensagem de sucesso
           mensagem("$nome cadastrado com sucesso!", 'success');
           ?>
           <hr>
           <!-- Link para voltar à página inicial -->
           <a href="index.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
  
  </body>
</html>
