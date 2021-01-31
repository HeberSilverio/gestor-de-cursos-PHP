<div class="titulo">Tipo String</div>

<?php
echo 'STRING - São coleções de sequencias de caracteres', '<br>';
echo 'O var_dump mostra o tipo, tamanho e conteúdo: ', '<br>';
var_dump("Eu também");
echo '<br>','<br>';

echo 'CONCATENAÇÃO DE STRING','<br>','<br>';
echo 'Diferentes de outras linguagens que utiliza o sinal de mais +','<br>';
echo 'Em PHP utiliza-se o ponto "." como concatenação,','<br>';
echo 'Exemplo:','<br>';
echo 'Eu'.'Tu', ' - usando ponto','<br>';
echo 'Eu', 'Tu',' - usando a vírgula.',' A vírgula só funciona no contexto comando echo!','<br>','<br>';
echo 'O ÚNICO CARACTER DE CONCATENAÇÃO EM PHP É O ponto!','<br>';
echo " 'Teste' " . ' "Teste" ' . ' \'Teste\' ' . " \"Teste\" ";
echo "o \ é o escape do php",'<br>';
echo 'Exemplos: ','<br>';
echo 'O \n é quebra de linha', ' e o \t é tabulação','<br>';
echo 'Se colocar a barra invertida duas vezes "\\\" irá imprimir uma barra invertida','<br>','<br>';

print("<br>Também existe a função print para imprimir, assim como o echo.");
print '<br>';
print "Tanto no echo quanto no print você pode colocar ou não parentes.";
