<div class="titulo">Switch</div>

<?php
$categoria = 'asdasdasd';
$preco = 0.0;
$carro = '';

if($categoria === 'Luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} else if ($categoria === 'SUV') {
    $carro = 'Renegade';
    $preco = 80000;
} elseif ($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = 55000;
} else {
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";

$categoria = 'LUXO';
switch (strtolower($categoria)) {
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    case 'suv':
    case 'suv básico':
        $carro = 'Renegade';
        $preco = 80000;
        break;
    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'Mobi';
        $preco = 33000;
        break;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: $precoFormatado</p>";

$categoria = 'capital';
$preco = 0.0;
$moto = '';

switch (strtolower($categoria)) {
    case 'luxo':
        $moto = 'Twister';
        $preco = '18000';
        break;
    case 'capital':
        $moto = 'Fan 150';
        $preco = 9000;
    case 'interior':
        $moto = 'Biz';
        $preco = 7000;
        break;
}
$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Moto: $moto<br>Preço: $precoFormatado</p>";