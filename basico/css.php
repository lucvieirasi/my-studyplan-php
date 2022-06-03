<div class="titulo">Integracao com o HTML</div>

<h1>
    <?php
    echo 'Olá';
    echo '<small>';
    echo ' Mundo!';
    echo '</small>';
    ?>
</h1>

<?= "<div>Outra forma de expressar!</div>"; ?>
<br>
<div><button><?= "Legal" ?></button></div>

<style>
    button {
        padding: 2px 10px;
        background-color: #4286f4 ;
        color: #EEEEEE;
        font-weight: bold;
        border-radius: 5px;
    }
    [center] {
        display: flex;
        justify-content: center;
    }
    [azul] {
        color: #0D47A1;
    }
    [dobro] {
        font-size: 2rem ;
    }
</style>
