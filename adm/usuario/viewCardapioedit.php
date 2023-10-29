<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title m-0">Adiciona item no cardapio</h5>
                </div>
                <div class="card-body">
                    <form action="<?= constant("URL_LOCAL_ADM") . 'usuario/' ?>controladorItemMenu.php" method="post"
                        enctype="multipart/form-data">
                        <input class="form-control" type="text" name="nome" id="nomeItem" placeholder="Nome">
                        <input class="form-control" type="text" name="descricao" id="descriçãoItem"
                            placeholder="Descrição">
                        <input class="form-control" type="text" name="valor" id="valorItem" placeholder="Valor">
                        <input class="form-control" type="file" name="imagem" id="imagemItem">
                        <div class="div-button">
                            <button type="submit" id="button_cadastro" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>