<div class="titutlo">Desafio Palindromo</div>

<?php
function palindromo($palavra){
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++) {
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'Não';
        }
    }
    return 'Sim';
}
echo palindromo('arara') . ' ';
echo palindromo('heber') . ' ';
echo '<br>';

function palindromoSimples($palavra) {
    return $palavra === strrev($palavra) ? 'Sim': 'Não';
}
echo palindromoSimples('arara') . ' ';
echo palindromoSimples('heber') . ' ';