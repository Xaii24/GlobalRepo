<h1>Surgical Gloves</h1>

<?php if (!empty($items)): ?>
    <ul class="items-list">
        <?php foreach ($items as $item): ?>
            <li class="item">
                <h4><?= h($item->name) ?></h4>
                <p>Description: <?= h($item->description) ?></p>
                <p><strong>Price:</strong> $<?= h($item->price) ?></p>

                <!-- Display the product image if it exists -->
                <?php if (!empty($item->image_path)): ?>
                    <div class="image-container">
                        <img src="<?= h($item->image_path) ?>" alt="<?= h($item->name) ?>" class="product-image">
                    </div>
                <?php else: ?>
                    <p>No image available for this item.</p>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No items found under the "Surgical" product.</p>
<?php endif; ?>
