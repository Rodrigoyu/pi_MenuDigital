<?php

define("URL_LOCAL_BASE","http://localhost/pi_menuDigital/");
define("URL_LOCAL_SITE",constant("URL_LOCAL_BASE")."site/");
define("URL_LOCAL_ADM",constant("URL_LOCAL_BASE")."adm/");

function inserirUsuario($nome,$sobrenome,$email,$senha,$telefone,$estabelecimento){
    $sql = "INSERT INTO usuario(nome,sobrenome,email,senha,telefone,estabelecimento) 
    VALUES(:nome,:sobrenome,:email,:senha,:telefone,:estabelecimento)";
    $pdo = Database::conexao();
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':sobrenome', $sobrenome);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':senha', $senha);
    $stmt->bindValue(':telefone', $telefone);
    $stmt->bindValue(':estabelecimento', $estabelecimento);
    $result = $stmt->execute();
    if($result){
        return true;
    }
    else{return false;}
}  

function inserirItemCardapio($nome, $descricao, $valor, $imagem) {
    $sql = "INSERT INTO itemmenu(nome, descricao, valor, imagem) 
            VALUES (:nome, :descricao, :valor, :imagem)";
    $pdo = Database::conexao();
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':descricao', $descricao);
    $stmt->bindValue(':valor', $valor);
    $stmt->bindValue(':imagem', $imagem, PDO::PARAM_LOB); // Defina o tipo do parâmetro como LOB para conteúdo binário
    $result = $stmt->execute();
    if ($result) {
        return true;
    } else {
        return false;
    }
}

function listaritemmenu(){
    $pdo = Database::conexao();
    $sql = "SELECT * FROM itemmenu";
    $stmt = $pdo->prepare($sql);
    $list = $stmt->execute();
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $list; 
}

?>