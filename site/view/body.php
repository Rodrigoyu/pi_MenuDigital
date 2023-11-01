<?php
$itemMenu = listarItemMenu();
?>

<!-- Início do cardápio -->
<div class="container conteine_Pricipal">
    <div class="row justify-content-center">
        <?php foreach ($itemMenu as $item): ?>
            <div class="caixa_de_item col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="data:image/jpeg;base64,<?= base64_encode($item['imagem']) ?>" alt=""
                        srcset="">
                    <div class="informacao_div card-body">
                        <h5 class="card-title">
                            <?= $item['nome'] ?>
                        </h5>
                        <p class="card-text">
                            <?= $item['descricao'] ?>
                        </p>
                        <p class="card-text">Preço: R$ <span class="preço_div">
                                <?= number_format($item['valor'], 2) ?>
                            </span></p>
                        <div class="btn-group">
                            <button class="btn btn-outline-info" onclick="subtrairQuantidade(this)">-</button>
                            <div class="quantidade_1 mx-2">0</div>
                            <button class="btn btn-outline-info" onclick="adicionarQuantidade(this)">+</button>
                        </div>
                        <div class="btn-group">
                            <form action="<?= constant("URL_LOCAL_ADM") ?>usuario/controladorProcessarPedido.php" method="post">
                                <button class="btn btn-primary" onclick="adicionarItem('<?= $item['id'] ?>')">Adicionar Item</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<!-- Seção de valor total e botão de envio -->

<div class="conteine_valor d-flex align-items-center sticky-md-bottom fixed-bottom bg-light py-3">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-auto">
                <h5 class="mb-0">Valor Total</h5>
                <h4 class="preço_atual" id="preco_atual">00.00</h4>
            </div>
            <!-- <div class="col-md-auto">
                <form action="" method="post">
                    Adicione campos ocultos para os itens escolhidos e o valor total
                    <input type="hidden" name="itens_escolhidos" id="itens_escolhidos">
                    <input type="hidden" name="valor_total" id="valor_total">
                    <button class="btn btn-primary" type="submit">Enviar Pedido</button>
                </form>
            </div> -->
        </div>
    </div>
</div>