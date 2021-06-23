<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<div class="container">
<h2 class="text-center">Trabalhe Conosco</h2>
<h4>CONHEÇA AS OPORTUNIDADES NA SOLUCENTER E VENHA FAZER PARTE DO NOSSO TIME!</h4>
    <p><strong> Fique por dentro de nossas vagas, preencha o formulário abaixo.</strong><br/> <small>Os campo marcados com (*) são obrigatórios.</small></p>
<?php
$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);


if(!empty($data['btnSobConsulte'])){
    echo var_dump($data);
}

if(count($_POST) > 0) {
    $erros = [];

    if(!filter_input(INPUT_POST, "nome")) {
        $erros['nome'] = 'Nome é obrigatório';
    }

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = 'Email inválido';
    }

    if(!filter_input(INPUT_POST, "celular")) {
        $erros['celular'] = 'Celular é obrigatório';
    }

    if(!filter_input(INPUT_POST, "interesse")) {
        $erros['interesse'] = 'Área de interesse é obrigatório';
    }


}
?>

<?php foreach($erros as $erro): ?>
    <!-- <div class="alert alert-danger" role="alert"> -->
        <?= "" // $erro ?>
    <!-- </div> -->
<?php endforeach ?>

<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : ''?>"
                id="nome" name="nome" placeholder="Nome Completo:*" value="<?= $_POST['nome'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nome'] ?>
            </div>
        </div>

    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="email">E-mail:</label>
            <input type="text"
                class="form-control <?= $erros['email'] ? 'is-invalid' : ''?>"
                id="email" name="email" placeholder="E-mail:*" value="<?= $_POST['email'] ?>">
            <div class="invalid-feedback">
                <?= $erros['email'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="telefone">Telefone fixo:</label>
            <input type="text" class="form-control <?= $erros['telefone'] ? 'is-invalid' : ''?>"
                id="telefone" name="telefone" placeholder="Telefone fixo:" value="<?= $_POST['telefone'] ?>">
            <div class="invalid-feedback">
                <?= $erros['telefone'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="celular">Telefone celular:</label>
            <input type="text"
                class="form-control <?= $erros['celular'] ? 'is-invalid' : ''?>"
                id="celular" name="celular" placeholder="Telefone celular:*"
                value="<?= $_POST['celular'] ?>">
            <div class="invalid-feedback">
                <?= $erros['celular'] ?>
            </div>
        </div>
        <div class="col-md-12 text-left">
            <label for="interesse">Área de interesse:</label>
            <input type="text" class="form-control <?= $erros['interesse'] ? 'is-invalid' : ''?>"
            value="" name="interesse" id="interesse" placeholder="Área de interesse:*" value="<?= $_POST['interesse'] ?>">
            <div class="invalid-feedback">
                <?= $erros['interesse'] ?>
            </div>
        </div>
        <div class="col-md-12 text-left">
            <label for="mensagem">Sua mensagem:</label>
            <textarea id="mensagem" class="form-control" id="mensagem" placeholder="Mensagem:*" rows="3"></textarea>

        </div>
        <div class="col-md-12 text-left mb-3">
            <label for="arquivo">Anexe seu currículo: (.doc | .docx | .pdf)</label>
            <input name="arquivo" type="file" class="form-control-file" id="arquivo" value="<?= $_POST['arquivo'] ?> required>
        </div>

    </div>
    <div class="col-md-12">
        <button onclick="ga('send','event','consulte', 'pedido_de_consulta')" type="submit" id="btnSobConsulte" name="SendAddMsg" class="btn btn-success btn-block">ENVIAR</button>
    </div>
</form>
</div>