<div class="fixed-banneritems"></div>

<!-- Home Button-->
<?= $this->Html->link(
    '<i class="fas fa-home"></i> Home', 
    ['controller' => 'Main', 'action' => 'index'], 
    ['class' => 'home-button1', 'escape' => false]
) ?>

<!-- Image Logo1-->
<img src="<?= $this->Url->build('/img/logo.png') ?>" alt="logo Image" class="logo-image">


<div class="item-detail-page">

<div class="item-name-wrapper">
<h1 class="item-name item-<?= h($item->id) ?>"><?= h($item->name) ?></h1>
</div>

    <div class="item-detail-grid">
        
        <!-- Image Section (on the left) -->
        <div class="item-image">
            <?php if (!empty($item->image_path)): ?>
                <img src="/<?= h($item->image_path) ?>" style="width:100%; height:auto;">
            <?php endif; ?>
        </div>

        <!-- Item Info Section (right side) -->
<div class="item-info" id="item-info-<?= $item->id ?>">
    <!-- Display Cardinfo -->
    <?php if (!empty($item->cardinfo)): ?>
        <div class="card-info"><?= $item->cardinfo ?></div>
    <?php else: ?>
        <p>No additional information available.</p>
    <?php endif; ?>
</div>


    </div>


   <!-- Container for Description and Extra Details -->
<div class="item-description-details">
 
<!-- Description Section -->
<div id="product-display-<?php echo $item->id; ?>" class="product-display">
    <?php echo $this->Text->autoParagraph($item->display); ?>
</div>


    <div class="item-details" id="item-<?= h($item->id) ?>">
    <!-- Display Details with Label -->
    <div class="details-label">
        <!-- Optional: Add content for the label here -->
    </div>
    <div class="details-content">
        <?= $item->details ?>
    </div>

</div>

</div>

    <!-- Display the "Recommendation" section -->
<div class="item-recommendation-section item-<?= h($item->id) ?>">
    <!-- Display the "Recommendation" section -->
    <div class="item-recommendation-content">
        <?= $this->Text->autoParagraph($item->Rec) ?>
    </div>
</div>

<div class="item-industries" id="item-<?= h($item->id) ?>">
    <?= $this->Text->autoParagraph($item->industries) ?>
</div>

<div class="item-packaging" id="item-<?= h($item->id) ?>">
    <?= $this->Text->autoParagraph($item->packaging) ?>
</div>

<div class="item-standards" id="item-<?= h($item->id) ?>">
    <?= $this->Text->autoParagraph($item->standards) ?>
</div>

<!-- Item0 image standards image item2 -->
<?php if (!empty($item->item_image)): ?>
    <div class="item-img" id="item-img-<?= h($item->id) ?>">
        <?= $this->Html->image(h($item->item_image), [
            'alt' => 'Item Image', 
            'class' => 'item-img', 
            'id' => 'image-' . h($item->id) // Set a unique ID for the image
        ]) ?>
    </div>
<?php endif; ?>

<!-- Item1 image standards image item2 -->
<?php if (!empty($item->item_image1)): ?>
    <div class="item-img1" id="item-img1-<?= h($item->id) ?>">
        <?= $this->Html->image(h($item->item_image1), [
            'alt' => 'Item Image 1', 
            'class' => 'item-img1', 
            'id' => 'image1-' . h($item->id) // Set a unique ID for the image
        ]) ?>
    </div>
<?php endif; ?>




</div>


