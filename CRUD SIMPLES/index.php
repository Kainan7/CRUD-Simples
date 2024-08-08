<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="restrito/css/styleindex.css">
</head>

<body>
    <!-- Contêiner principal usando Bootstrap -->
    <div class="container">
        <!-- Linha dividida em colunas usando Bootstrap -->
        <div class="row">
            <div class="col-3"></div> <!-- Coluna vazia para espaçamento -->
            <div class="col-6">
                <!-- Jumbotron é um componente do Bootstrap para destaque -->
                <div class="jumbotron">
                    <h1 class="display-4">Login</h1>

                    <!-- Formulário de login usando método POST -->
                    <form action="index.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" name="login">
                            <small class="form-text text-muted">Entre com seus dados de acesso</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input type="password" class="form-control" name="senha">
                            <small class="final"><a href="restrito/login_criando.php?login=true">Deseja se cadastrar?</a></small>
                        <button type="submit" class="btn btn-primary">Acessar</button>
                    </form>

                    <!-- Início do código PHP para processar o formulário de login -->
                    <?php
                        if (isset($_POST["login"])) {
                            $login = $_POST['login'];
                            $senha = md5($_POST['senha']);

                            // Inclui o arquivo de conexão com o banco de dados
                            include "restrito/conexao.php";

                            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
                            $result = mysqli_query($conn, $sql);

                            $num_registros = mysqli_num_rows($result);

                            if ($num_registros == 1) {
                                    session_start();
                                    $_SESSION['login'] = "Kainã";
                                    header("location: restrito");
                                
                            } else {
                                echo "<p>Login ou senha não encontrados ou inválido.</p>";
                            }
                            
                        }
                    ?>
                    <!-- Fim do código PHP -->

                </div>
            </div>
            <div class="col_3"></div> <!-- Coluna vazia para espaçamento -->
        </div>
    </div>

</body>
</html>
