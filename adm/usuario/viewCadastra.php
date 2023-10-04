<?php
include_once "../assets/head.php";
?>
  <header class="header_edit_cardapio">
    <nav class="navegação_nav">
      <div class="menu_edit">
        <div class="titulo_menu">
          <h3 class="titulo_h3_menu">Menu Digital</h3>
        </div>
        <div class="nav_menu">
          <a class="a_menu" href="login.php">Login</a>
          <a class="a_menu" id="ativo" href="bodyCadastro.php">Cadastro</a>
        </div>
      </div>
    </nav>
  </header>

  <div class="conteine_Principal">
    <div class="conteine">

      <div class="div_cabeçalho"> CADASTRO DO CLIENTE</div>

      <form action="controladorUsuarioCadastrar.php" method="post" class="form_cadastro">

        <div class="div-nome"> <label class="label_cadastro" for="nome">NOME</label></div>
        <input class="input-caixa" id="nome_cadastro"name="nome" required="required" type="Text"
          placeholder=" Nome" />

        <div class="div-nome"> <label class="label_cadastro" for="Sobrenome">SOBRENOME</label></div>
        <div class="div-input"> <input class="input-caixa" name="sobrenome" id="Sobrenome_cadastro" type="text" placeholder="Sobrenome">
        </div>

        <div class="div-nome"> <label class="label_cadastro" for="email">EMAIL</label> </div>
        <div class="div-input"> <input class="input-caixa" id="Email_cadastro" name="email" required="required"
            type="email" placeholder="@gmail" /> </div>

        <div class="div-nome"> <label class="label_cadastro" for="senha">SENHA</label> </div>
        <div class="div-input"> <input class="input-caixa" id="senha" name="senha" required="required"
            type="Password" placeholder="senha" /> </div>

        <div class="div-nome"> <label class="label_cadastro"> TELEFONE </label> </div>
        <div class="div-input"> <input class="input-caixa" type="tel" name="telefone" id="Telefone"
            placeholder="(XX) x xxxx-xxxx" /> </div>

        <div class="div-nome"><label class="label_cadastro">ESTABELECIMENTO</label> </div>
        <div class="div-input"> <input class="input-caixa" name="estabelecimento" id="estabelicimento" type="text"
            placeholder="Estabelecimento"> </div>

        <div class="div-button"><button type="submit"id="button_cadastro" class="button_cadastro">Enviar</button></div>

      </form>
    </div>
  </div>
  <?php
    include_once "../assets/footer.php";
  ?>