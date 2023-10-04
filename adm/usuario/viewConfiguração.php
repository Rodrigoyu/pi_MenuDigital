<?php
    //include_once "../assets/head.php";
    //include_once '../assets/header.php';
?>

<!--Inicio Do Header-->
<!--Fim Do Header-->


<!--Inicio Das Configuração-->
    <section class="section_configuração">
        <div class="Conteine_Principal_configuração">
            <div class="sidebar">
                <div class="div_titulo_sidebar_configuração">
                    <h3 class="titulo_sidebar_configuração">Configuração</h3>
                </div>
                <a href="<?=constant("URL_LOCAL_ADM").'?pagina=usuario-configuracao'  ?>" class="a_sidebar">Conta</a>
                <a  href="<?=constant("URL_LOCAL_ADM").'?pagina=usuario-cardapioedit'?>" class="a_sidebar">Cardápio</a> 
            </div>

            <div class="conteine_configuração">
                <div class="div_conteine_configuração">
                    <div class="caixa_configuração">
                        <div class="titulo_config_conta">Configuração da Conta</div>
                        <div class="Formulario_edicao_usario">
                            <form class="formulario_edicao">
                                <input class="input_editor" type="text" name="empressa" id="nomeEmpressa" placeholder="Nome da Empressa">
                                <input class="input_editor" type="tel" name="telefone" id="fone" placeholder="Telefone/celular">
                                <input class="input_editor" type="email" name="email" id="email" placeholder="Email">
                                <input class="input_editor" type="password" name="senha" id="senha" placeholder="Senha">
                                <button class="button_usuario_edicaor" type="submit">Editar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--Fim Da Configuração-->
<?php
    //include_once "../assets/footer.php";
?>