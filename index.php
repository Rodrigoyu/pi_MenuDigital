<?php 
include_once "configuração/configuracao.php";
/**
 * Pegando informação da url
 */
if($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
}else{
    $paginaUrl = null;
}

/**
 * Redirecionando usuário
 */
if($paginaUrl === 'adm'){
    header('Location:'.constant("URL_LOCAL_ADM"));
}else{
    header('Location:'.constant("URL_LOCAL_SITE"));
}

?>