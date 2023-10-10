<!--Inicio Do Header-->
<?php
$itemMenu = listarItemMenu();

?>
<!--Fim Do Header-->

<!--Inicio do cardapio-->
<div class="container-md conteine_Pricipal ">
    <div class="row b-4 p-3 m-1  invisible px-4  d-flex justify-content-center">
        <?php foreach ($itemMenu as $item): ?>
            <div class="caixa_de_item visible rounded shadow p-3 m-3  gy-4 row border bg-light">

                <div class="col  justify-content-center  informacao_div">
                    <div class=" h2 row  titulo_da_caixa ">
                        <?= $item['nome'] ?>
                    </div>

                    <div class=" col-md-5 gy-5 gx-5 descricao_da_caixa">
                        <?= $item['descricao'] ?>
                    </div>

                    <div class="preco_da_caixa row">Preço R$<div id=" valor_do_preco" class="preço_div col-2">
                            <p><strong><?= floatval($item['valor']) ?></strong></p>
                        </div>
                    </div>

                    <div class="button_div col col-md  text-center">
                    <div class="row justify-content-stard">

                        <div class="butao_da_caixa  m-0 p-0 col col-md-auto">
                            <button class="btn btn-outline-info" id="meno_button"
                                onclick="subtrairQuantidade(this)">-</button>
                        </div>

                        <div class="quantidade_1 m-1 p-1 col col-md-auto align-items-center  text-center">0</div>

                        <div class="col m-0 p-0 col-md-auto">
                            <button class="btn btn-outline-info" id="mais_button"
                                onclick="adicionarQuantidade(this)">+</button>
                        </div>
                    </div>
                </div>

                </div>

                <div class=" align-items-center justify-content-center col col-md-6">
                        <img class="img-thumbnail img-fluid"
                            src="data:image/jpeg;base64,<?= base64_encode($item['imagem']) ?>" alt="" srcset="">
                    </div>


                





            </div>
        <?php endforeach ?>
    </div>


    <div
        class="conteine_valor d-flex align-items-center sticky-md-bottom fixed-bottom row px-4 gx-4 justify-content-center  text-center ">
        <div class="caixa_de_valor border border-info bg-light col col-md-auto ">
            valor total R$
            <div class="preço_atual col col-md-auto " id="preco_atual">00.00</div>
        </div>
        <div class="button_envia_pedidos col col-md-auto ">
            <button class="btn btn-info border border-info" type="submit">Fazer Pedidos</button>
        </div>
    </div>


</div>

<!--Fim do cardapio-->
<footer>