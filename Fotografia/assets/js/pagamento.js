function calcularOrcamento() {
    var formaPagamento = document.getElementById('formaPagamento').value;
    var valorOrcamento = 1200; 
    var valorFinal = 0;
    var parcelas = 1;

    if (formaPagamento === 'avista') {
        valorFinal = valorOrcamento * 0.9; 
        parcelas = 1;
    } else if (formaPagamento === 'duas_vezes') {
        valorFinal = valorOrcamento / 2; 
        parcelas = 2;
    } else if (formaPagamento === 'quatro_veses') {
        valorFinal = valorOrcamento / 4; 
        parcelas = 4;
    }

    document.getElementById('valorOrcamento').value = "R$" + valorFinal.toFixed(2) + " em " + parcelas + " parcelas";
}