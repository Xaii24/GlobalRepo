<h1>Category: <?= h($category->name) ?></h1>
<p><?= h($category->description) ?></p>

<h2>Products in "<?= h($category->name) ?>"</h2>
<ul>
    <?php foreach ($category->products as $product): ?>
        <li>
            <h3><?= h($product->product_name) ?></h3>
            <p><?= h($product->description) ?></p>
            <p><strong>Price:</strong> $<?= h($product->price) ?></p>
            <a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'view', $product->id]) ?>">View Product</a>
        </li>
    <?php endforeach; ?>
</ul>
