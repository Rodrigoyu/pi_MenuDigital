<!--Inicio Do Header-->
<?php
$itemMenu = listarItemMenu();

?>
<!--Fim Do Header-->

<div class="div_menu_conteine">
    <div class="div_menu">
        <ul>
            <li><a href="">Bebidas</a></li>
            <li><a href="">Lanches</a></li>
            <li><a href="">Café da manhã</a></li>
            <li><a href="">Almoço</a></li>
            <li><a href="">Jantar</a></li>
            <li><a href="">Doce</a></li>
        </ul>
    </div>
</div>

<!--Inicio do cardapio-->
<section class="conteine_Pricipal">
    <div class="conteine_pricipal_cardapio">
        <div class="conteine_cardapio_1">
            <?php foreach ($itemMenu as $item): ?>
                <div class="caixa_de_item">

                    <div class="informacao_div">
                        <div class="titulo_da_caixa">
                            <?= $item['nome'] ?>
                        </div>
                        <div class="descricao_da_caixa">
                            <?= $item['descricao'] ?>
                        </div>
                        <div class="preco_da_caixa">Preço R$<div id="valor_do_preco" class="preço_div">
                                <?= floatval($item['valor']) ?>
                            </div>
                        </div>

                    </div>

                    <div class="button_div">
                        <div class="butao_da_caixa">
                            <button class="button_cardapio" id="meno_button" onclick="subtrairQuantidade(this)">-</button>
                            <div class="quantidade_1">0</div><button class="button_cardapio"
                                id="mais_button" onclick="adicionarQuantidade(this)">+</button>

                        </div>
                    </div>

                    <div class="img_div">
                        <img class="img_controle" src="data:image/jpeg;base64,<?= base64_encode($item['imagem']) ?>" alt=""
                            srcset="">
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="conteine_valor">
            <div class="caixa_de_valor">
                valor total R$<div class="preço_atual" id="preco_atual">00.00</div>
    
            </div>
            <div class="button_envia_pedidos"><button class="button_cardapio_adiciona" type="submit">Fazer Pedidos</button>
            </div>
        </div>
    </div>


    </div>
</section>
<!--Fim do cardapio-->
<footer>
