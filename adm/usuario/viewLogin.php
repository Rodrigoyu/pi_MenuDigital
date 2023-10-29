<header class="header_edit_cardapio">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container">
                <a class="navbar-brand text-white" href="#">Menu Digital</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  " id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" id="ativo" href="<?= constant("URL_LOCAL_ADM")?>?pagina=login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?= constant("URL_LOCAL_ADM")?>?pagina=cadastror">Cadastrar</a>
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
                        <h5 class="card-title m-0">Login</h5>
                    </div>
                    <div class="card-body">
                        <form class="form_login" action="<?= constant("URL_LOCAL_ADM")?>" method="post">
                            <div class="form-group">
                                <label for="inputEmail">Email:</label>
                                <input class="form-control" type="email" id="inputEmail" name="email" value="">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Senha:</label>
                                <input class="form-control" type="password" id="inputPassword" name="senha" value="">
                            </div>
                            <button class="btn btn-primary" type="submit">ENTRAR</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-link" href="#">Esqueci Senha</a>
                        <a class="btn btn-link" href="<?= constant("URL_LOCAL_ADM")?>?pagina=cadastror">Cadastrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
