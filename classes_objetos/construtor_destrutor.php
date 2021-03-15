<div class="titulo">Construtor e Destrutor</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 18) {
        echo 'Construtor invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo "E {$this->nome} morreu! - O unset chamou o destrutor e liberou a referência na memória.<br><br>";
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

// $pessoa = new Pessoa(); // Problema

$pessoaA = new Pessoa('Rebeca Maria', 40);
$pessoaA->apresentar();
unset($pessoaA);

$pessoaB = new Pessoa('João Pedro');
$pessoaB->apresentar();
$pessoaB = null;