function adicionarQuantidade(button) {
    var caixaDeItem = button.parentNode.parentNode.parentNode;
    var quantidadeElemento = caixaDeItem.querySelector('.quantidade_1');

    var quantidade = parseInt(quantidadeElemento.innerText);
    quantidade++;
    quantidadeElemento.innerText = quantidade;

    atualizarPreco();
}

function subtrairQuantidade(button) {
    var caixaDeItem = button.parentNode.parentNode.parentNode;
    var quantidadeElemento = caixaDeItem.querySelector('.quantidade_1');

    var quantidade = parseInt(quantidadeElemento.innerText);
    if (quantidade > 0) {
        quantidade--;
        quantidadeElemento.innerText = quantidade;

        atualizarPreco();
    }
}

function atualizarPreco() {
    var caixasDeItem = document.getElementsByClassName('caixa_de_item');
    var precoTotal = 0;
    var quantidadeTotal = 0;

    for (var i = 0; i < caixasDeItem.length; i++) {
        var caixaDeItem = caixasDeItem[i];
        var valorDoPrecoElemento = caixaDeItem.querySelector('.preço_div');
        var quantidadeElemento = caixaDeItem.querySelector('.quantidade_1');

        var preco = parseFloat(valorDoPrecoElemento.innerText);
        var quantidade = parseInt(quantidadeElemento.innerText);

        precoTotal += preco * quantidade;
        quantidadeTotal += quantidade;
    }

    var precoAtualElemento = document.getElementById("preco_atual");
    var quantidadeElemento = document.getElementById("quantidade_1");

    precoAtualElemento.innerText = precoTotal.toFixed(2);
    quantidadeElemento.innerText = quantidadeTotal;
}
