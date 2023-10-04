<?php
include_once '../../configuração/conexao.php';
include_once '../../configuração/configuracao.php';

$nome = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome'])) ? $_POST['nome'] : null;

$descricao = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['descricao'])) ? $_POST['descricao'] : null;

$valor = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['valor'])) ? $_POST['valor'] : null;

$imagem = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_FILES['imagem'])) ? $_FILES['imagem'] : null;

if ($nome && $descricao && $valor && $imagem) {
    // Verificar se foi enviado um arquivo válido
    if ($imagem['error'] === UPLOAD_ERR_OK) {
        $imagemContent = file_get_contents($imagem['tmp_name']); // Obter o conteúdo binário da imagem
        if (inserirItemCardapio($nome, $descricao, $valor, $imagemContent)) {
            header('Location:'.constant("URL_LOCAL_ADM"));
            exit();
        }
    }
}

echo "Ocorreu um erro ao inserir o item do cardápio.";
?>
