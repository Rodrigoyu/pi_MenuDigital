<header class="header_edit_cardapio">
    <nav class="navbar navbar-expand-lg bg-primary text-white">
        <div class="menu_edit container-md  text-white">

            <div class=" div_menu_digital">
                <h3 class="navbar-brand text-white">Menu Digital</h3>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class=" col-auto-md collapse navbar-collapse nav-tabs div_menu_conteine" id="navbarSupportedContent">
                <div class="div_menu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="a_menu nav-link text-white" id="ativo" href="<?= constant("URL_LOCAL_ADM") . '?pagina=usuario-cardapio' ?>">Visualizar Cardápio</a></li>
                    <li class="nav-item"><a class="a_menu nav-link text-white" href="<?= constant("URL_LOCAL_ADM") . '?pagina=usuario-configuracao' ?>">Configuração</a></li>
                    <li class="nav-item"><a class="a_menu nav-link text-white" href="<?= constant("URL_LOCAL_ADM") . '?pagina=usuario-pedidos' ?>">Pedidos</a></li>
                    <li class="nav-item"><a class="a_menu nav-link text-white" href="">Sair</a></li>
                </ul>
                </div>
            </div>
        </div>
        </div>
    </nav>
</header>