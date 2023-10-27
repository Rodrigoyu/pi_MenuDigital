<?php
// http://localhost/diogo/pi/adm/?pagina=cadastrar-usuario
/**
 * Pegando informação da url
 */
if ($_GET && isset($_GET['pagina'])) {
    $paginaUrl = $_GET['pagina'];
} else {
    $paginaUrl = null;
}

include_once '../configuração/conexao.php';
include_once '../configuração/configuracao.php';


//Corpo a ser carregado
if (!$paginaUrl) {
    include_once '../configuração/conexao.php';
    include_once '../configuração/configuracao.php';
    include_once 'assets/head.php';
    include_once 'assets/header.php';
    include_once './usuario/viewCardapioVisual.php';
    include_once 'assets/footer.php';
}
if ($paginaUrl == 'usuario-configuracao') {
    include_once '../configuração/conexao.php';
    include_once '../configuração/configuracao.php';
    include_once 'assets/head.php';
    include_once 'assets/header.php';
    include_once './usuario/viewConfiguração.php';
    include_once 'assets/footer.php';
}
if ($paginaUrl == 'usuario-pedidos') {
    include_once '../configuração/conexao.php';
    include_once '../configuração/configuracao.php';
    include_once './assets/head.php';
    include_once './assets/header.php';
    include_once './usuario/viewPedidos.php';
    include_once 'assets/footer.php';
}
if ($paginaUrl == 'usuario-cardapioedit') {
    include_once '../configuração/conexao.php';
    include_once '../configuração/configuracao.php';
    include_once './assets/head.php';
    include_once './assets/header.php';
    include_once './usuario/viewCardapioedit.php';
    include_once 'assets/footer.php';
}
if ($paginaUrl == 'usuario-cardapio') {
    include_once '../configuração/conexao.php';
    include_once '../configuração/configuracao.php';
    include_once './assets/head.php';
    include_once './assets/header.php';
    include_once './usuario/viewCardapioVisual.php';
    include_once 'assets/footer.php';

}
if ($paginaUrl == 'login') {
    include_once './assets/head.php';
    include_once './usuario/viewLogin.php';
    include_once 'assets/footer.php';

}
if ($paginaUrl == 'cadastror') {
    include_once './assets/head.php';
    include_once './usuario/viewCadastra.php';
    include_once 'assets/footer.php';
}

// include_once './usuario/viewFormularioUsuarioCadastrar.php';

include_once 'assets/footer.php';

?>