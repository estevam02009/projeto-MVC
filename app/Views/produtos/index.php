<h1>Produtos</h1>

<ul>
    <?php foreach ($produtos as $produto): ?>
        <li>
            <h3><?= htmlspecialchars($produto['nome']) ?></h3>
            <p>Preço: R$<?= number_format($produto['preco'], 2, ',', '.') ?></p>
            
            <a href="/projeo-mvc/produto/<?= $produto['id'] ?>">Ver detalhes</a>
        </li>
    <?php endforeach; ?>
</ul>