<?php
    // Inclui o arquivo de conexão com o banco de dados
    include "conexao.php";

    // Verifica se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os dados do formulário
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $senha = md5($_POST['senha']); // Utiliza MD5 para armazenar a senha de forma mais segura

        // Verifica se o login já está em uso
        $sql_verificar = "SELECT * FROM usuarios WHERE login = '$login'";
        $result_verificar = mysqli_query($conn, $sql_verificar);

        if (mysqli_num_rows($result_verificar) > 0) {
            // Exibe mensagem de erro se o login já estiver em uso
            echo "<div class='container jumbotron'>";
            echo "<h1>Erro no Cadastro</h1>";
            echo "<p class='text-danger'>Este email já está em uso. Escolha outro.</p>";
            echo "<a href='index.php' class='btn btn-primary'>Voltar</a>";
            echo "</div>";
        } else {
            // Insere um novo usuário no banco de dados
            $sql_inserir = "INSERT INTO usuarios (nome, login, senha) VALUES ('$nome', '$login', '$senha')";
            $result_inserir = mysqli_query($conn, $sql_inserir);

            if ($result_inserir) {
                // Exibe mensagem de sucesso se o usuário foi cadastrado com sucesso
                echo "<div class='container jumbotron'>";
                echo "<h1>Sucesso no Cadastro</h1>";
                echo "<p class='text-success'>Usuário cadastrado com sucesso!</p>";
                echo "<a href='index.php' class='btn btn-primary'>Voltar</a>";
                echo "</div>";
            } else {
                // Exibe mensagem de erro se houver algum problema ao cadastrar o usuário
                echo "<div class='container jumbotron'>";
                echo "<h1>Erro no Cadastro</h1>";
                echo "<p class='text-danger'>Erro ao cadastrar usuário: " . mysqli_error($conn) . "</p>";
                echo "<a href='index.php' class='btn btn-danger'>Cancelar</a>";
                echo "</div>";
            }
        }
    }
    ?>
</body>
</html>