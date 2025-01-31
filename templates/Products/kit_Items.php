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
    <h1>Kits/Tray</h1>

    <?php if (!empty($kitProduct->items)): ?>
        <p class="total-items"><?= count($kitProduct->items) ?> Results</p>
        <div class="items-grid"> <!-- Grid container -->
            <?php foreach ($kitProduct->items as $item): ?>
                <div class="item" id="item-<?= $item->id ?>"> <!-- Adding a unique id for each item -->
                    <?php if (!empty($item->image_path)): ?>
                        <!-- Wrap the image with a link to the detailed item page -->
                        <a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'viewItem', $item->id]) ?>">
                            <img src="/<?= h($item->image_path) ?>" alt="<?= h($item->name) ?>" style="width:400px; height:auto;">
                        </a>
                    <?php endif; ?>
                    <p class="name"><?= h($item->name) ?></p>
                    <p class="description"><?= $this->Text->autoParagraph($item->description) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>No items found under the "Surgical Gowns" product.</p>
    <?php endif; ?>
</div>
