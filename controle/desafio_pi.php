<div class="titulo">Desafio PI</div>

<?php
echo pi();
$pi = 3.14;

if($pi === pi()) {
    echo "<br>Iguais!";
} else {
    echo "<br>Diferentes!";
}

// Operador Relacional
$piErrado = 2.8;

// Resposta
echo '<br>' . ($pi - pi());
echo '<br>' . ($pi - $piErrado);

if($pi - pi() <= 0.01) {
    echo '<br>Praticamente iguais!';
}

if($pi - $piErrado <= 0.01) {
    echo '<br>Praticamente iguais!';
} else {
    echo '<br>Valor errado!!';
}

$resultado;
$minuendo = 742;
$subtraendo = 274;

$resultado = $minuendo - $subtraendo;
echo "<br>$resultado";