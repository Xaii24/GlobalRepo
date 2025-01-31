<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
    </title>

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake']) ?>

    <!-- Vanta.js Background -->
<div id="vanta-background" style="width: 100%; height: 100vh;"></div>
<!-- src/Template/Main/index.php -->
<?= $this->Html->css('style') ?>
<!-- Slider Css Link -->
<?= $this->Html->css('slider') ?>
<!-- drop down Link -->
<?= $this->Html->css('dropdown') ?>
<!--  surgical imgs Link -->
<?= $this->Html->css('surgical') ?>
<!--  surgical details Link -->
<?= $this->Html->css('surgicaldetails') ?>
<!--  packaging  Link -->
<?= $this->Html->css('packaging') ?>
<!--  Item rec 2 -->
<?= $this->Html->css('itemrec2') ?>
<!--  standards.css -->
<?= $this->Html->css('standards') ?>
<!--  item3.css -->
<?= $this->Html->css('item3') ?>
<!--  item3.css -->
<?= $this->Html->css('homebutton') ?>
<!--  exam.css -->
<?= $this->Html->css('exam') ?>
<!--  gown.css -->
<?= $this->Html->css('gown') ?>
<!--  needle.css -->
<?= $this->Html->css('needle') ?>
<!--  canister.css -->
<?= $this->Html->css('canister') ?>
<!--  pack.css -->
<?= $this->Html->css('pack') ?>
<!--  drape.css -->
<?= $this->Html->css('drape') ?>



<!-- Include Font Awesome CDN in your <head> -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<!--google fonts link -->
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@200&display=swap" rel="stylesheet">


<!-- dropdown.jsphp -->
<script defer src="<?= $this->Url->build('/js/dropdown.js') ?>"></script>

<!-- vanta background script.jsphp -->
<script defer src="<?= $this->Url->build('/js/script.js') ?>"></script>


<div class="header-text">
    <span class="dropdown">Products
        <div class="dropdown-menu">
            <ul>
                <!-- Gloves Section -->
                <li class="dropdown-section gloves">
                    <span class="non-clickable">Gloves</span>
                    <ul class="submenu">
                        <li>
                            <?= $this->Html->link('Surgical', ['controller' => 'Products', 'action' => 'surgicalItems'], ['class' => 'dropdown-link']) ?>
                        </li>
                        <li>
                            <a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'examinationItems', 2]) ?>" class="dropdown-link">
                                Examination<br>Gloves
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Gowns Section -->
                <li class="dropdown-section gowns">
                    <span class="non-clickable">Gowns</span>
                    <ul class="submenu">
                        <li>
                            <?= $this->Html->link('Surgical Gowns', ['controller' => 'Products', 'action' => 'gownItems'], ['class' => 'dropdown-link']) ?>
                        </li>
                    </ul>
                </li>
            </ul>

                            <!-- Medical Misc Section -->
                            <li class="dropdown-section misc">
                    <span class="non-clickable">Medical Misc.</span>
                    <ul class="submenu">
                        <li>
                            <?= $this->Html->link('Needle Counters', ['controller' => 'Products', 'action' => 'needleItems'], ['class' => 'dropdown-link']) ?>
                        </li>
                        <li>
                            <?= $this->Html->link('Canisters', ['controller' => 'Products', 'action' => 'canisterItems'], ['class' => 'dropdown-link']) ?>
                        </li>
                        <li>
                            <?= $this->Html->link('Kits/Tray', ['controller' => 'Products', 'action' => 'kitItems'], ['class' => 'dropdown-link']) ?>
                        </li>
                    </ul>
                         <!-- Procedure Packs Section -->
                         <li class="dropdown-section packs">
                    <span class="non-clickable">Procedure Packs</span>
                    <ul class="submenu">
                        <li>
                            <?= $this->Html->link('Packs', ['controller' => 'Products', 'action' => 'packItems'], ['class' => 'dropdown-link']) ?>
                        </li>
                </li>
            </ul>
                  <!-- Procedure Drapes Section -->
                  <li class="dropdown-section drapes">
                    <span class="non-clickable">Procedure Drapes</span>
                    <ul class="submenu">
                        <li>
                        <?= $this->Html->link('Drapes', ['controller' => 'Products', 'action' => 'drapeItems'], ['class' => 'dropdown-link']) ?>
                        </li>
                </li>
            </ul>
        </div>
    </span>

    <span class="About-Us">
    <a href="<?= $this->Url->build(['controller' => 'Main', 'action' => 'index']) ?>#bottom-section" style="color: white;">About Us</a>
</span>


    
    <a href="mailto:globaltradingky@gmail.com?subject=Contact%20Us&body=Please%20enter%20your%20message%20here.">
    <span class="contact-us">Contact Us</span>
</a>
    <button class="search-button" onclick="toggleSearch()" style="cursor: pointer; border: none; background: none;">
        <i class="fas fa-search" style="color: white; font-size: 23px; vertical-align: middle;"></i>
    </button>
    <input type="text" placeholder="Search..." class="search-input" id="searchInput" 
           style="display: none; width: 150px; background-color: white; color: black; 
           border: 1px solid #ccc; border-radius: 4px; position: absolute; top: 55px; left: 40;">
</div>



    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
