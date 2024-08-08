<?php
    session_start();

    // Adicione esta condição para permitir acesso à página de cadastro
    if (isset($_GET['cadastro']) && $_GET['cadastro'] == 'true') {
        // Nada a fazer aqui, permitindo acesso
    } else {
        // Verifica se a sessão está presente para outras páginas
        if (isset($_SESSION['login'])) {
            $user = $_SESSION['login'];
        } else {
            session_destroy();
            header("location: ../index.php?msg=Voce foi expulso");
            exit(); // Importante sair da execução para evitar a execução do restante do código desnecessariamente
        }
    }
?>
