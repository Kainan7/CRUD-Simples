<?php 
    // Conexão com o banco de dados
    $server = "localhost"; // Endereço do servidor local (WAMP)
    $user = "root";
    $pass = "";
    $bd = "empresa";

    // Verifica se a conexão foi bem-sucedida
    if ($conn = mysqli_connect($server, $user, $pass, $bd)) {
        // Comentado para evitar mensagens desnecessárias: echo "Conectado!";
    } else {
        // Comentado para evitar mensagens desnecessárias: echo "Erro!";
    }

    // Função para exibir mensagens formatadas usando Bootstrap Alerts
    function mensagem($texto, $tipo) {
        echo "<div class='alert alert-$tipo' role='alert'>
                $texto
            </div>"; // Alerta do Bootstrap
    }

    // Função para formatar e exibir datas no formato brasileiro
    function mostra_data($data) {
        $d = explode('-', $data);
        $escreve = $d[2] . "/" . $d[1] . "/" . $d[0];
        return $escreve;
    }

    // Função para mover e renomear arquivos de fotos
    function mover_foto($vetor_foto) {
        $vtipo = explode("/", $vetor_foto['type']);

        $tipo = $vtipo[0] ?? '';
        $extensao = isset($vtipo[1]) ? "." . $vtipo[1] : '';

        // Verificações de erro no upload da foto
        if (!empty($vetor_foto['error'])) {
            return 0;
        }

        if ($vetor_foto['size'] >= 500000) {
            return 0;
        }

        if ($tipo != "image") {
            return 0;
        }

        // Nome do arquivo baseado na data e hora atual
        $nome_arquivo = date('Ymdhms') . $extensao;
        
        // Move o arquivo para o diretório "img/"
        move_uploaded_file($vetor_foto['tmp_name'], "img/" . $nome_arquivo);
        
        // Retorna o nome do arquivo para armazenamento no banco de dados
        return $nome_arquivo;
    }
?>
