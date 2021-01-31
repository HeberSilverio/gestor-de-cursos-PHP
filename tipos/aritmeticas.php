<div class="titulo">Operações Aritméticas</div>

<?php
echo 1 + 1, '<br>';
var_dump(1 + 1);
echo '<br>';
echo '1 + 2.5 = ', 1 + 2.5, '<br>';
echo '10 - 2 = ', 10 - 2, '<br>';
echo '2 * 5 = ', 2 * 5, '<br>';
echo '7 / 4 = ', 7 / 4, '<br>';
echo '7 / 4 = ', intdiv(7, 4),' - //intdiv(n,n) mostra apenas o resultado inteiro.',' Não coloca a barra de divisão','<br>';
echo '7 / 4 = ', round(7 / 4), ' - round(n,n) aredonda o resultado.','<br>';
echo '7 % 4 = ', round(7 % 4), ' - % mostra o resto da divisão.','<br>','<br>';
echo 'UMA MANEIRA DE DESCOBRIR SE O NÚMERO É PAR É COLOCANDO MÓDULO 2 - % 2', '<br>','<br>';
echo '7 % 2 = ', round(7 % 2), ' -  Se o número for ímpar o resultado será 1.','<br>';
echo '8 % 2 = ', round(8 % 2), ' -  Se o número for par o resultado será 0.','<br>','<br>';

echo 'ALGUNS ERROS ', '<br>','<br>';
echo '7 / 0 = ', (7 / 0), ' - Significa infinito','<br>';

echo 'intdiv(7, 0) = ', '# erro!',' - Sete divido por zero com divisão inteira dá erro.  ',' O que for colocado depois do erro não será renderizado.','<br>';

echo '4 ** 2 = ', 4 ** 2, ' - Exponenciação, quatro elevado a dois.','<br>','<br>';

echo 'PRECEDÊNCIA DE OPERADORES: ', '<br>','<br>';
echo ' () 1º parentes, ** 2º exponenciação,  / * % 3º divisão-multiplicação-módulo, + - 4º soma-subtração ',  '<br>','<br>';

echo 'OPERADORES UNÁRIO - Tem um único operando +=1', '<br>';
echo 'OPERADORES BINÁRIO - Tem dois operando 1 + 1', '<br>','<br>';