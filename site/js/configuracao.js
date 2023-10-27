function adicionarQuantidade(button) {
    var caixaDeItem = button.closest('.card');
    var quantidadeElemento = caixaDeItem.querySelector('.quantidade_1');

    var quantidade = parseInt(quantidadeElemento.innerText);
    quantidade++;
    quantidadeElemento.innerText = quantidade;

    atualizarPreco();
}

function subtrairQuantidade(button) {
    var caixaDeItem = button.closest('.card');
    var quantidadeElemento = caixaDeItem.querySelector('.quantidade_1');

    var quantidade = parseInt(quantidadeElemento.innerText);
    if (quantidade > 0) {
        quantidade--;
        quantidadeElemento.innerText = quantidade;

        atualizarPreco();
    }
}

function atualizarPreco() {
    var caixasDeItem = document.querySelectorAll('.card');
    var precoTotal = 0;

    caixasDeItem.forEach(function (caixaDeItem) {
        var valorDoPrecoElemento = caixaDeItem.querySelector('.preço_div');
        var quantidadeElemento = caixaDeItem.querySelector('.quantidade_1');

        if (valorDoPrecoElemento && quantidadeElemento) {
            var preco = parseFloat(valorDoPrecoElemento.innerText.replace('R$ ', '').replace(',', '.'));
            var quantidade = parseInt(quantidadeElemento.innerText);

            precoTotal += preco * quantidade;
        }
    });

    var precoAtualElemento = document.getElementById("preco_atual");

    if (precoAtualElemento) {
        precoAtualElemento.innerText = precoTotal.toFixed(2);
    }
}

