<h1>Detalhe do Produto</h1>

<h3><?= htmlspecialchars($produto['nome']) ?></h3>
<p>Preço: R$<?= number_format($produto['preco'], 2, ',', '.') ?></p>
<p>Descrição: <?= htmlspecialchars($produto['descricao']) ?></p>

<a href="/projeto-mvc/produto">Voltar a lista de produtos</a>