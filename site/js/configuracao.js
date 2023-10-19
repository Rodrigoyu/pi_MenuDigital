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
    var quantidadeTotal = 0;

    caixasDeItem.forEach(function (caixaDeItem) {
        var valorDoPrecoElemento = caixaDeItem.querySelector('.preço_div');
        var quantidadeElemento = caixaDeItem.querySelector('.quantidade_1');

        if (valorDoPrecoElemento && quantidadeElemento) {
            var preco = parseFloat(valorDoPrecoElemento.querySelector('strong').innerText);
            var quantidade = parseInt(quantidadeElemento.innerText);

            precoTotal += preco * quantidade;
            quantidadeTotal += quantidade;
        }
    });

    var precoAtualElemento = document.getElementById("preco_atual");
    var quantidadeElemento = document.getElementById("quantidade_total");

    if (precoAtualElemento && quantidadeElemento) {
        precoAtualElemento.innerText = precoTotal.toFixed(2);
        quantidadeElemento.innerText = quantidadeTotal;
    }
}

//envio do intens para array

function adicionarItem(itemId) {
    var campoItensEscolhidos = document.getElementById("itens_escolhidos");

    // Obtém o valor atual do campo oculto
    var itensEscolhidos = campoItensEscolhidos.value;

    // Adiciona o ID do item ao campo oculto, separando por vírgula
    if (itensEscolhidos) {
        itensEscolhidos += ', ' + itemId;
    } else {
        itensEscolhidos = itemId;
    }

    // Atualiza o campo oculto com os itens escolhidos
    campoItensEscolhidos.value = itensEscolhidos;
}
