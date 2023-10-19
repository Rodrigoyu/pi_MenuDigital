<!--Inicio Das Configuração-->

    <nav class="navbar-expand-lg">
<div class="bg-primary text-white col-md-1">
    <div class="div_titulo_sidebar_configuração">
        <h3 class="navbar-brand text-white">Configuração</h3>
    </div>

    <div class="">
        <div>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link text-white" href="<?= constant("URL_LOCAL_ADM") . '?pagina=usuario-configuracao' ?>">Conta</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="<?= constant("URL_LOCAL_ADM") . '?pagina=usuario-cardapioedit' ?>">Cardápio</a></li>
            </ul>
        </div>
    </div>
</div>
    </nav>


<div class="container ">

    <div class="row justify-content-center ">
        <div class="justify-content-center col-md-8">
            <div class="div_conteine_configuração">
                <div class="caixa_configuração">

                    <div class="titulo_config_conta">Configuração da Conta</div>

                    <div class="Formulario_edicao_usario">
                        <form class="formulario_edicao">
                            <input class="input_editor" type="text" name="empressa" id="nomeEmpressa"
                                placeholder="Nome da Empressa">
                            <input class="input_editor" type="tel" name="telefone" id="fone"
                                placeholder="Telefone/celular">
                            <input class="input_editor" type="email" name="email" id="email" placeholder="Email">
                            <input class="input_editor" type="password" name="senha" id="senha" placeholder="Senha">
                            <button class="button_usuario_edicaor" type="submit">Editar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--Fim Da Configuração-->