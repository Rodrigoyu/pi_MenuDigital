<?php
    include_once "../assets/head.php";
?>
    <header class="header_edit_cardapio">
        <nav class="navegação_nav">
            <div class="menu_edit">
                <div class="titulo_menu"><h3 class="titulo_h3_menu">Menu Digital</h3></div>
                <div class="nav_menu">
                    <a class="a_menu" id="ativo" href="login.php">Login</a>
                    <a class="a_menu" href="viewCadastra.php">Cadastrar</a>
                </div>
            </div>
        </nav>
    </header>
    
<div class="tela_1" >
    <div class="conteine_login">
        <div class="titulo_div_login"><h1 class="titulo_login">Login</h1></div>
        <div class="div_formulario">
            <form class="form_login" action="">
                <div class="div_nome"> Email:</div> <input class="input_caixa" type="email" value=""><br>
                <div class="div_nome"> Senha:</div> <input class="input_caixa" type="password" name="" value=""><br>
                <br>
                <input class="button_inp" type="button" name="" value="ENTRAR"><br>
                <br>   
            </form>
        </div>
        <div class="button_login_div">
            <a class="a_buttao_login" href="">Esqueci Senha</a>
            <a class="a_buttao_login" href="viewCadastra.php">Cadastrar</a>
        </div>
    </div>
</div>



<?php
    include_once "../assets/footer.php";
?>