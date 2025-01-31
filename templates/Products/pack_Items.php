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
    <h1>Procedure Packs</h1>

    <?php if (!empty($packProduct->items)): ?>
    <p class="total-items"><?= count($packProduct->items) ?> Results</p>
    <div class="items-grid pack-grid">
        <?php foreach ($packProduct->items as $item): ?>
            <div class="item" id="item-<?= $item->id ?>"> 
                <?php if (!empty($item->image_path)): ?>
                    <a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'viewItem', $item->id]) ?>">
                        <img src="/<?= h($item->image_path) ?>" alt="<?= h($item->name) ?>" style="width:400px; height:auto;">
                    </a>
                <?php endif; ?>
                <p class="name" id="name-<?= $item->id ?>"><?= h($item->name) ?></p>
                <p class="description"><?= $this->Text->autoParagraph($item->description) ?></p>
            </div>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <p>No items found under the "Procedurial Packs" product.</p>
<?php endif; ?>
