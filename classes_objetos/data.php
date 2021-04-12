<div class="titulo">Classe Data</div>

<?php




























class DataInicio {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar() {
        echo "Inicio da era computacional: 0{$this->dia}/0{$this->mes}/{$this->ano}", '<br>';
    }
}
$inicioEra = new DataInicio();
$inicioEra->apresentar();


class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar() {
        return "{$this->dia}/0{$this->mes}/{$this->ano}";
    }
}

$aniversario = new Data;
$aniversario->dia = 15;
$aniversario->mes = 8;
$aniversario->ano = 2014;

$casamento = new Data();
$casamento->dia = 1;
$casamento->mes = 8;
$casamento->ano = 2009;

echo "Data de nascimento: {$aniversario->apresentar()} <br>";
echo "Data do casamento: {$casamento->apresentar()}";