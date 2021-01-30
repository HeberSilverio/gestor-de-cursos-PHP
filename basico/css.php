<div class="titulo">Integração CSS</div>

<h3 center>
    <?php
    echo 'Olá ';
    echo '<small>';
    echo 'Mundo!';
    echo '</small>';
    ?>
</h3>

<?= "<div center azul>Outra forma de me expressar!</div>" ?>
<br>
<div center><button dobro><?= "Legal" ?></button></div>

<style>
    button
    {
        padding: 5px <?= 2 * 10?>px;
        background-color: #4286f4;
        border-radius: 10px;
        color: #eee;
        font-weight: bold;
    }
    [center]
    {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    <?= "[azul]" ?>
    {
        color: #4286f4;
    }
    [dobro]
    {
        font-size: 2rem;
    }
</style>