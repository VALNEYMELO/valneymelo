window.onload = function() {
    var dataAtual = new Date();
    var dataFormatada = "Data atual: " + dataAtual.toLocaleString();
    document.getElementById("data-atual").innerText = dataFormatada;
}