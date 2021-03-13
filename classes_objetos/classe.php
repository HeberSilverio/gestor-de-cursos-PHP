<div class="titulo">Primeira classe</div>

<?php

class Cliente {
    // atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    public function apresentar() {
        Return "Nome: <b>{$this->nome}</b> tem a idade de: {$this->idade} anos.";
    }
}
$c1 = new Cliente();
$c1->nome = 'Fausto';
$c1->idade = 34;
echo $c1->apresentar(), '<br>';

$c2 = new Cliente;
$c2->nome = 'Jerry';
$c2->idade = 19;
echo $c2->apresentar();

?>
<h4>Detalhes</h4>
<p>É necessário a propriedade $this para acessar o conteúdo do objeto</p>

 <p>
 class Cliente {<br>
    // atributos<br>
    public $nome = 'Anônimo';<br>
    public $idade = 18;<br>

    public function apresentar() {<br>
        echo "Nome: <b>{$this->nome}</b> tem a idade de: {$this->idade} anos.";<br>
    }
}
$c1 = new Cliente();<br>
$c1->nome = 'Fausto';<br>
$c1->idade = 34;<br>
$c1->apresentar();<br><br>

$c2 = new Cliente;<br>
$c2->nome = 'Jerry';<br>
$c2->idade = 19;<br>
$c2->apresentar();</p>