<?php
include_once '../../configuração/conexao.php';
include_once '../../configuração/configuracao.php';

$nome =  ( $_SERVER["REQUEST_METHOD"] == "POST" 
&& !empty( $_POST['nome']) )?
$_POST['nome'] : null; 

$sobrenome =  ( $_SERVER["REQUEST_METHOD"] == "POST" 
&& !empty( $_POST['sobrenome']) )?
$_POST['sobrenome'] : null;

$email =  ( $_SERVER["REQUEST_METHOD"] == "POST" 
&& !empty( $_POST['email']) )?
$_POST['email'] : null; 

$senha =  ( $_SERVER["REQUEST_METHOD"] == "POST" 
&& !empty( $_POST['senha']) )?
$_POST['senha'] : null; 

$telefone =  ( $_SERVER["REQUEST_METHOD"] == "POST" 
&& !empty( $_POST['telefone']) )?
$_POST['telefone'] : null; 

$estabelecimento =  ( $_SERVER["REQUEST_METHOD"] == "POST" 
&& !empty( $_POST['estabelecimento']) )?
$_POST['estabelecimento'] : null; 

echo "encriptado";
$senhaEncode = base64_encode($senha);
if(inserirUsuario($nome,$sobrenome,$email,$senhaEncode,$telefone,$estabelecimento)){
header('Location:'.constant("URL_LOCAL_ADM"));
}else{
    echo "Deu errado cara!";
}