<div class="fixed-banneritems"></div>
<!-- Image Logo1-->
<img src="<?= $this->Url->build('/img/logo.png') ?>" alt="logo Image" class="logo-image">
<!-- Home Button-->
<?= $this->Html->link(
    '<i class="fas fa-home"></i> Home', 
    ['controller' => 'Main', 'action' => 'index'], 
    ['class' => 'home-button', 'escape' => false]
) ?>


<div class="view-background">
    <h1>SURGICAL GLOVES</h1>

    <?php if (!empty($surgicalProduct->items)): ?>
        <p class="total-items"><?= count($surgicalProduct->items) ?> Results</p>
        <div class="items-grid"> <!-- Grid container -->
            <?php foreach ($surgicalProduct->items as $item): ?>
                <div class="item"> <!-- Individual item in grid -->
                    <?php if (!empty($item->image_path)): ?>
                        <!-- Wrap the image with a link to the detailed item page -->
                        <a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'viewItem', $item->id]) ?>">
                            <img src="/<?= h($item->image_path) ?>" alt="<?= h($item->name) ?>" style="width:400px; height:auto;">
                        </a>
                    <?php endif; ?>
                    <p class="name"><?= h($item->name) ?></p>
                    <p class="description"><?= h($item->description) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>No items found under the "Surgical" product.</p>
    <?php endif; ?>
</div>
