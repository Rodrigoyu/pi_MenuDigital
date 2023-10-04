<?php
//include_once '../assets/head.php';
//include_once '../assets/header.php';
?>

<!--Inicio do conteine-->

<div class="conteine_edit">
    <div class="edito_cardapio">

        <div class="menu_cardapio">
            <form action="">
                <label class="label_menu_edit">Adicione a nova categoria do menu</label>
                <input class="input_editor" type="text" name="" id="menu_edit">
            </form>
            <div class="visua_menu_edit">
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
                <form action="<?= constant("URL_LOCAL_ADM") . 'usuario/' ?>controladorItemMenu.php" method="post"
                    enctype="multipart/form-data">
                    <input class="input_editor" type="text" name="nome" id="nomeItem" placeholder="Nome">
                    <input class="input_editor" type="text" name="descricao" id="descriçãoItem" placeholder="Descrição">
                    <input class="input_editor" type="text" name="valor" id="valorItem" placeholder="valor">
                    <input class="" type="file" name="imagem" id="descriçãoItem" src="" alt="">
                    <div class="div-button"><button type="submit" id="button_cadastro"
                            class="button_cadastro">Enviar</button></div>
                </form>
                <!--<div class="caixa_de_item">
                
                        <div class="informacao_div">
                            <div class="titulo_da_caixa">salmao</div>
                            <div class="descricao_da_caixa">peixe com outras coisas</div>
                            <div class="preco_da_caixa">Preço R$<div class="preço_div">08.00</div></div>
                            
                        </div>
                        
                        <div class="button_div">
                            <div class="butao_da_caixa">
                                <button class="button_cardapio" id="meno_button">-</button><div class="quantidade_1" id="quantidade_1">0</div><button class="button_cardapio" id="mais_button">+</button>
                                
                            </div>
                        </div>
                        <div class="img_div">
                            <img class="img_controle" src="./imagem/salmão.jpg" alt="" srcset="">
                        </div>
                    </div>-->
            </div>
        </div>
    </div>
</div>

<?php
//include_once '../assets/footer.php';
?>