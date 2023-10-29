<header class="header_edit_cardapio">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Menu Digital</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= constant("URL_LOCAL_ADM")?>?pagina=login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" id="ativo" href="<?= constant("URL_LOCAL_ADM")?>?pagina=cadastror">Cadastro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title m-0">Cadastrar</h5>
                </div>
                <div class="card-body">
                    <form class="form_login" action="controladorUsuarioCadastrar.php" method="post">
                        <div class="form-group">
                            <label class="label_cadastro" for="nome_cadastro">Nome</label>
                            <input class="form-control" id="nome_cadastro" name="nome" required="required" type="text"
                                 />
                        </div>
                        <div class="form-group">
                            <label class="label_cadastro" for="Sobrenome_cadastro">Sobrenome</label>
                            <input class="form-control" id="Sobrenome_cadastro" name="sobrenome" type="text"
                                 />
                        </div>
                        <div class="form-group">
                            <label class="label_cadastro" for="Email_cadastro">E-mail</label>
                            <input class="form-control" id="Email_cadastro" name="email" required="required"
                                type="email"  />
                        </div>
                        <div class="form-group">
                            <label class="label_cadastro" for="senha">Senha</label>
                            <input class="form-control" id="senha" name="senha" required="required" type="password"
                                />
                        </div>
                        <div class="form-group">
                            <label class="label_cadastro">Telefone</label>
                            <input class="form-control" id="Telefone" name="telefone" type="tel"
                               />
                        </div>
                        <div class="form-group">
                            <label class="label_cadastro">Estabelecimento</label>
                            <input class="form-control" id="estabelicimento" name="estabelecimento" type="text"
                               />
                        </div>
                        <div class="form-group">
                            <button type="submit" id="button_cadastro"
                                class="btn btn-primary btn-block">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>