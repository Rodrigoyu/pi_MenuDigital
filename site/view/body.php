<!--Inicio Do Header-->
<?php
$itemMenu = listarItemMenu();

?>
<!--Fim Do Header-->

<!--Inicio do cardapio-->
<div class="container-md ">
    <div class="container-md px-4 justify-content-center">
            <?php foreach ($itemMenu as $item): ?>
                <div class="row border">

                    <div class="col justify-content-center caixa_de_item">
                        <div class=" h2 titulo_da_caixa row ">
                            <?= $item['nome'] ?>
                        </div>
                        <div class=" col-md-5 gy-5 descricao_da_caixa">
                            <?= $item['descricao'] ?>
                        </div>
                        <div class="preco_da_caixa row">Preço R$<div id="valor_do_preco col-md-5" class="preço_div col">
                                <?= floatval($item['valor']) ?>
                            </div>
                        </div>

                    </div>

                    <div class="col">
                        <img class="img-thumbnail img-fluid"
                            src="data:image/jpeg;base64,<?= base64_encode($item['imagem']) ?>" alt="" srcset="">
                    </div>



                    <div class="row container text-center">

                        <div class="row ">
                            <div class="col col-md-auto .quantidade_1 ">
                                <button class="btn btn-outline-info" id="meno_button"
                                    onclick="subtrairQuantidade(this)">-</button>
                            </div>

                            <div class="col col-md-auto border text-center .preço_div">0</div>

                            <div class="col col-md-auto">
                                <button class="btn btn-outline-info" id="mais_button"
                                    onclick="adicionarQuantidade(this)">+</button>
                            </div>
                        </div>

                    </div>



                </div>
            <?php endforeach ?>
    </div>

    <div class="conteine_valor row ">
        <div class="caixa_de_valor col col-md-auto ">
            valor total R$
        </div>
        <div class="preço_atual col col-md-auto" id="preco_atual">00.00</div>
        <div class="button_envia_pedidos"><button class="button_cardapio_adiciona" type="submit">Fazer Pedidos</button>
        </div>
    </div>

</div>
</div>
<!--Fim do cardapio-->
<footer>