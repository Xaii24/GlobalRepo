<div class="fixed-banneritems"></div>
<!-- Image Logo1-->
<img src="<?= $this->Url->build('/img/logo.png') ?>" alt="logo Image" class="logo-image">
<!-- Home Button-->
<?= $this->Html->link(
    '<i class="fas fa-home"></i> Home', 
    ['controller' => 'Main', 'action' => 'index'], 
    ['class' => 'home-button', 'escape' => false]
) ?>


<h1><?= h($examinationProduct->name) ?> Gloves</h1>

<?php if (!empty($examinationProduct->items)): ?>
    <p class="total-items"><?= count($examinationProduct->items) ?> Results</p>
    <div class="items-grid"> <!-- Grid container -->
        <?php foreach ($examinationProduct->items as $item): ?>
            <div class="item" id="item-<?= h($item->id) ?>"> <!-- Dynamically assign ID -->
                <?php if (!empty($item->image_path)): ?>
                    <a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'viewItem', $item->id]) ?>">
                        <img src="<?= $this->Url->build($item->image_path) ?>" alt="<?= h($item->name) ?>" style="width:400px; height:auto;">
                    </a>
                <?php endif; ?>
                <p class="name"><?= h($item->name) ?></p>
                <p class="description"><?= $this->Text->autoParagraph($item->description) ?>

            </div>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <p>No items found for this product.</p>
<?php endif; ?>
