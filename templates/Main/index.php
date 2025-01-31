<!-- Image Banner -->
<div class="container" style="background-image: url('<?= $this->Url->build('/img/Group 16.png') ?>');">

<div class="motion-text">
otion and  
   </div>

   <div class="motion-text1">
M 
   </div>

    <div class="motion-text2">
    D
</div>

<div class="motion-text3">
    ynamics
</div>


<div class="fixed-banneritems1"></div>

<!-- Image Logo -->
<img src="<?= $this->Url->build('/img/logo.png') ?>" alt="logo Image" class="logo-image">

  <!-- Include the Vanta.js and Three.js CDN links -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/tengbao/vanta@latest/dist/vanta.dots.min.js"></script>

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
        </div>
    </span>
    <a href="#bottom-section">
    <span class="About-Us">About Us</span>
</a>
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


</div>

<!-- New Solutions Section -->
<div class="solutions-section">
    <h2>Products</h2>
</div>

<div class="image-slider">
    <div class="slider-container">
        <div class="slide active">
            <!-- Wrap the entire slide (image + text) within the link -->
            <?= $this->Html->link(
                '<img src="' . $this->Url->build('/img/indexglove.png') . '" alt="Slide 1">' .
                '<div class="slide-text">Surgical Gloves</div>',
                ['controller' => 'Products', 'action' => 'surgicalItems'],
                ['escape' => false, 'class' => 'slide-link']
            ) ?>

            <?= $this->Html->link(
                '<div class="read-more1">View <i class="fas fa-arrow-right"></i></div>',
                ['controller' => 'Products', 'action' => 'surgicalItems'],
                ['escape' => false, 'class' => 'text-link']
             ) ?>            
             <div class="read-more1">View Surgical</div> New element for Read More -->
        </div>

        <div class="slide">
        <?= $this->Html->link(
                '<img src="' . $this->Url->build('/img/dressingtray.png') . '" alt="Slide 1">' .
                '<div class="slide-text">Trays & Kits</div>',
                ['controller' => 'Products', 'action' => 'kitItems'],
                ['escape' => false, 'class' => 'slide-link']
            ) ?>
            <?= $this->Html->link(
                '<div class="read-more1">View <i class="fas fa-arrow-right"></i></div>',
                ['controller' => 'Products', 'action' => 'kitItems'],
                 ['escape' => false, 'class' => 'text-link']
            ) ?>   
        </div>
        <div class="slide">
        <?= $this->Html->link(
                '<img src="' . $this->Url->build('/img/ppacksslide.png') . '" alt="Slide 1">' .
                '<div class="slide-text">Procedure Packs</div>',
                ['controller' => 'Products', 'action' => 'packItems'],
                ['escape' => false, 'class' => 'slide-link']
            ) ?>


          <?= $this->Html->link(
                '<div class="read-more1">View <i class="fas fa-arrow-right"></i></div>',
                ['controller' => 'Products', 'action' => 'packItems'],
                ['escape' => false, 'class' => 'text-link']
           ) ?>   
        </div>
        <div class="slide">
        <?= $this->Html->link(
                '<img src="' . $this->Url->build('/img/pdrapesslide.png') . '" alt="Slide 1">' .
                '<div class="slide-text">Procedure Drapes</div>',
                ['controller' => 'Products', 'action' => 'drapeItems'],
                ['escape' => false, 'class' => 'slide-link']
            ) ?>


          <?= $this->Html->link(
                '<div class="read-more1">View <i class="fas fa-arrow-right"></i></div>',
                ['controller' => 'Products', 'action' => 'drapeItems'],
                ['escape' => false, 'class' => 'text-link']
           ) ?>   
        </div>
        <div class="slide">
        <?= $this->Html->link(
                '<img src="' . $this->Url->build('/img/sgownsslide.png') . '" alt="Slide 1">' .
                '<div class="slide-text">Surgical Gowns</div>',
                ['controller' => 'Products', 'action' => 'gownItems'],
                ['escape' => false, 'class' => 'slide-link']
            ) ?>


          <?= $this->Html->link(
                '<div class="read-more1">View <i class="fas fa-arrow-right"></i></div>',
                ['controller' => 'Products', 'action' => 'gownItems'],
                ['escape' => false, 'class' => 'text-link']
           ) ?>   
        </div>
        <!-- <div class="slide">
            <img src="<?= $this->Url->build('/img/img5.jpg') ?>" alt="Slide 5">
            <div class="slide-text">Comprehensive Services</div>
            <div class="slide-arrow"><i class="fas fa-arrow-right"></i></div> <!-- Font Awesome arrow icon -->
            <!-- <div class="hover-text">Infection control for dental professionals and your patients. Dental professionals must be more active than ever…</div> -->
            <!-- <div class="read-more">Read More</div> New element for Read More -->
        <!-- </div> --> -->
    </div>
    <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
    <button class="next" onclick="moveSlide(1)">&#10095;</button>
</div>

<!-- Add the new image below the slider -->
<div id="bottom-section" class="blur-image-container">
    <img src="<?= $this->Url->build('/img/blur.jpg') ?>" alt="Blur Effect" class="blur-image">
    <div class="blur-text">Total Value</div>
    <div class="blur-text1">We are committed to being the strategic partner that helps you deliver care to build a better, healthier future for our world. We are focused on and have been purpose-built to help you take on today's healthcare complexities.</div>

    <!-- Card placed inside the blur image container -->
    <div class="card">
        <div class="icon"><i class="fas fa-user-shield"></i></div>
        <h3 class="card-title2">Mission Statement</h3>
        <p class="card-content">Our mission is to empower Caribbean healthcare providers with high-quality medical, surgical, dental, dialysis, and laboratory products. Through global partnerships, we deliver innovative solutions, exceptional service, and unmatched value—improving patient outcomes and strengthening healthcare across the region.</p>
    </div>
    <div class="card1">
        <div class="icon"><i class="fas fa-star"></i></div>
        <h3 class="card-title">Value Statement</h3>
        <p class="card-content1">At Global Trading, we are committed to being the strategic partner that helps you deliver exceptional care, building a better, healthier future for our Caribbean community. With a global network of renowned manufacturers, we provide access to innovative medical solutions, tailored to address the unique challenges of our region.</p>
    </div>
    <div class="card2">
        <div class="icon"><i class="fas fa-graduation-cap"></i></div>
        <h3 class="card-title1">Partnership</h3>
        <p class="card-content"><span style="font-weight: 500;">Partnership:</span> Working closely with providers to deliver tailored solutions.<br>
<span style="font-weight: 590;">Innovation:</span> Providing top practices & advanced products.<br>
<span style="font-weight: 590;">Quality:</span> Ensuring superior standards & reliability.<br>
<span style="font-weight: 590;">Service Excellence:</span> Offering top-tier support & logistics.<br>
<span style="font-weight: 590;">Integrity:</span> Committed to transparency & ethics.
    </div>
</div>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <style>
    .background--custom {
      background: linear-gradient(90deg, #DAC7EB, #D7B9DF, #DCD2DF);
      background-size: 300% 300%;
      animation: gradient 3s alternate infinite;
      position: absolute;
      top: 200px;
      left: 0;
      height: 320%;
      width: 100%;
      z-index: -999;
    }
    @keyframes gradient {
      0% {
        background-position: 0%;
      }
      100% {
        background-position: 100%;
      }
    }
    </style>
  </head>
  <body>
    <div class="background--custom"></div>
  </body>
</html>