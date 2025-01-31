<h1>All Categories</h1>


<?php foreach ($categoriesWithProducts as $data): ?>
    <h2><?= h($data['category']->name) ?></h2>
    <p><?= h($data['category']->description) ?></p>

    <h3>Products in this Category</h3>
    <ul>
        <?php foreach ($data['products'] as $product): ?>
            <li>
                <h4><?= h($product->product_name) ?></h4>
                <p><?= h($product->description) ?></p>
                <p><strong>Price:</strong> $<?= h($product->price) ?></p>
                <a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'view', $product->id]) ?>">View Product</a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endforeach; ?>
