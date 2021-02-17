<div class="titulo">Operador Ternário</div>

<?php
$idade = 70;
$status;

if($idade >= 18) {
    $status = 'Maior de idade';
} else {
    $status = 'Menor de idade';
}

echo "$status<br>";

$idade = 17;
$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';
echo "$status<br>";

$status = $idade >= 18 ? $idade >= 65 ? 'Aposentado' : 'Maior de idade' : 'Menor de idade';

$idade = 13;
$status = $idade <= 18 ? $idade <= 12 ? 'Criança' : 'Adolescente' : 'Adulto';
echo $status;

$pessoa = !conjuge;
$estado_civil;
if($pessoa === conjuge) {
    $estado_civil = 'Casado';
} else {
    $estado_civil = 'Solteiro';
}
echo "<br>$estado_civil";