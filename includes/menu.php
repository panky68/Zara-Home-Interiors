<div class="alert alert-danger website-info">Website Under Construction</div> 
<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <a class="navbar-brand" href="index.php" class="menu-links"><img src="img\logo_small.png" alt=""></a>
    <!-- <a class="navbar-brand" href="index.php" class="menu-links">ZaraHomeInteriors</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"><!-- Toggler Icon for mobile screens-->
        <!-- Modified Icon -->
        <span class="line"></span> 
        <span class="line"></span> 
        <span class="line" style="margin-bottom: 0;"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item nav-item-underline <?php if($page === 'home'){echo 'active';} ?>"><a class="nav-link" href="index.php">Home</a></li> <!-- Home Link -->
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle <?php if($page === 'bedroom'){echo 'active';} ?>" href="" id="bedroomDropdown" role="button" data-toggle="dropdown">Bedroom</a><!-- Bedroom Link dropdown -->
                <div class="dropdown-menu" aria-labelledby="bedroomDropdown"><!-- Bedroom dropdown menu -->
                    <a class="dropdown-item" href="bedrm_fitted.php">Fitted Bedroom</a><!-- Bedroom->Fitted Bedroom Link -->
                    <a class="dropdown-item" href="bedrm_slide.php">Slide Wardrobes</a><!-- Bedroom->Slide Wardrobes Link -->
                </div>
            </li>
            <li class="nav-item nav-item-underline <?php if($page === 'kitchen'){echo 'active';} ?>"><a class="nav-link" href="kitchen.php">Kitchen</a></li><!-- Kitchen Link -->
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle <?php if($page === 'flooring'){echo 'active';} ?>" href="" id="flooringDropdown" role="button" data-toggle="dropdown">Flooring</a><!-- Flooring Link dropdown -->
                <div class="dropdown-menu" aria-labelledby="flooringDropdown"><!-- Flooring dropdown menu -->
                    <a class="dropdown-item" href="laminate.php">Laminate</a><!-- Flooring->Laminate Link -->
                    <a class="dropdown-item" href="carpet.php">Carpets</a><!-- Flooring->Carpets Link -->
                </div>
            </li>
            <li class="nav-item nav-item-underline <?php if($page === 'stones'){echo 'active';} ?>"><a class="nav-link" href="stones.php">Stones</a></li><!-- Stones Link -->
            <li class="nav-item nav-item-underline <?php if($page === 'services'){echo 'active';} ?>"><a class="nav-link" href="services.php">Services</a></li><!-- Services Link -->
            <li class="nav-item nav-item-underline <?php if($page === 'contact'){echo 'active';} ?>"><a class="nav-link" href="contact.php">Contact</a></li><!-- Contact Link -->
        </ul>
    </div>
</nav>