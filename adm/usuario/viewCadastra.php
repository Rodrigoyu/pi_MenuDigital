<header class="header_edit_cardapio">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#">Menu Digital</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ativo" href="bodyCadastro.php">Cadastro</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-4">
        <div class="conteine_Principal">
            <div class="conteine">

                <div class="div_cabeçalho"> CADASTRO DO CLIENTE</div>

                <form action="controladorUsuarioCadastrar.php" method="post" class="form_cadastro">
                    <div class="form-group">
                        <label class="label_cadastro" for="nome_cadastro">NOME</label>
                        <input class="form-control" id="nome_cadastro" name="nome" required="required"
                            type="text" placeholder="Nome" />
                    </div>
                    <div class="form-group">
                        <label class="label_cadastro" for="Sobrenome_cadastro">SOBRENOME</label>
                        <input class="form-control" id="Sobrenome_cadastro" name="sobrenome" type="text"
                            placeholder="Sobrenome" />
                    </div>
                    <div class="form-group">
                        <label class="label_cadastro" for="Email_cadastro">EMAIL</label>
                        <input class="form-control" id="Email_cadastro" name="email" required="required"
                            type="email" placeholder="E-mail" />
                    </div>
                    <div class="form-group">
                        <label class="label_cadastro" for="senha">SENHA</label>
                        <input class="form-control" id="senha" name="senha" required="required" type="password"
                            placeholder="Senha" />
                    </div>
                    <div class="form-group">
                        <label class="label_cadastro">TELEFONE</label>
                        <input class="form-control" id="Telefone" name="telefone" type="tel"
                            placeholder="(XX) x xxxx-xxxx" />
                    </div>
                    <div class="form-group">
                        <label class="label_cadastro">ESTABELECIMENTO</label>
                        <input class="form-control" id="estabelicimento" name="estabelecimento" type="text"
                            placeholder="Estabelecimento" />
                    </div>
                    <div class="form-group">
                        <button type="submit" id="button_cadastro" class="btn btn-primary btn-block">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>