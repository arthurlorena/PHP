<div class="card">
    <img src="<?= $produto["foto"]; ?>" alt="">
    <h3><?= $produto["nome"]; ?></h3>
    <div><?= $produto["nota"]; ?></div>
    <div class="preco"><?= formatarValor($produto["preco"]); ?></div>
    <div>
        <?= formatarValor($produto["preco"]); ?></div>
        R$ 5.489,00 à vista ou 
        10x <?= calcularParcela($produto["preco"],10) ?> sem juros
    <button>Comprar</button>
</div>