<div class="titulo">Tipo Inteiro</div>

<?php
echo 11;
echo '<br>';

var_dump(11); //fornece informações sobre a variável
echo '<br>';

echo PHP_INT_MAX, '<br>'; //constante que exibe o inteiro máximo suportado nesta máquina. neste caso usou a virgula para concatenar dentro do echo.
echo PHP_INT_MIN, '<br>';
echo 011, '<br>'; //números inteiros podem ser representados pela base binaria, octal, hexadecimal. O zero na frente do número significa que você esta representando este número na base octal, e neste caso ele não vale os onze da base decimal. Na base octal você tem números de zero a sete.
echo 0b11000111, '<br>'; //número representado na base binária.
echo 0x117acf0, '<br>'; //número representado na base hexadecimal. os números vão de 0 a f.