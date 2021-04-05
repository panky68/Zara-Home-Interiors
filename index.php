<?php include 'includes/head.php'; ?>   <!-- project header -->
    <body>
        <?php 
            $page = 'home';
            include 'includes/menu.php'; 
        ?>
        <section id="slideshow">    <!-- slideshow wrapper -->
            <div class="container-fluid">   <!-- Full width container -->
                <div id="fadeCarousel" class="carousel slide carousel-fade" data-ride="carousel"> <!-- bootstrap carousel -->
                    <ol class="carousel-indicators">    <!-- carousel indicators for 7 slides -->
                        <li class="active" data-target="#fadeCarousel" data-slide-to = "0"></li>
                        <li data-target="#fadeCarousel" data-slide-to = "1"></li>
                        <li data-target="#fadeCarousel" data-slide-to = "2"></li>
                        <li data-target="#fadeCarousel" data-slide-to = "3"></li>
                        <li data-target="#fadeCarousel" data-slide-to = "4"></li>
                        <li data-target="#fadeCarousel" data-slide-to = "5"></li>
                        <li data-target="#fadeCarousel" data-slide-to = "6"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox"> <!-- slides wrapper -->
                        <div class="carousel-item active">  <!-- slide 1 -->
                            <img src="img/IndexPgPics/Slideshow/slide_1.jpg" class="d-block w-100 slideshow-img" alt="">    <!-- slide img -->
                            <div class="carousel-caption">  <!-- slide caption wrapper -->
                                <h3>First Slide</h3>        <!-- caption 1 -->
                                <p>First Slide paragraph</p><!-- caption 2 -->
                            </div>
                        </div>
                        <div class="carousel-item">             <!-- slide 2 -->
                            <img src="img/IndexPgPics/Slideshow/slide_2.jpg" class="d-block w-100 slideshow-img" alt="">    <!-- slide img -->
                            <div class="carousel-caption">      <!-- slide caption wrapper -->
                                <h3>Second Slide</h3>           <!-- caption 1 -->
                                <p>Second Slide paragraph</p>   <!-- caption 2 -->
                            </div>
                        </div>
                        <div class="carousel-item"> <!-- slide 3 -->
                            <img src="img/IndexPgPics/Slideshow/slide_3.jpg" class="d-block w-100 slideshow-img" alt="">    <!-- slide img -->
                            <div class="carousel-caption">      <!-- slide caption wrapper -->
                                <h3>Third Slide</h3>            <!-- caption 1 -->
                                <p>Third Slide paragraph</p>    <!-- caption 2 -->
                            </div>
                        </div>
                        <div class="carousel-item"> <!-- slide 4 -->
                            <img src="img/IndexPgPics/Slideshow/slide_4.png" class="d-block w-100 slideshow-img" alt="">    <!-- slide img -->
                            <div class="carousel-caption">      <!-- slide caption wrapper -->
                                <h3>Forth Slide</h3>            <!-- caption 1 -->
                                <p>Forth Slide paragraph</p>    <!-- caption 2 -->
                            </div>
                        </div>
                        <div class="carousel-item"> <!-- slide 5 -->
                            <img src="img/IndexPgPics/Slideshow/slide_5.jpg" class="d-block w-100 slideshow-img" alt="">    <!-- slide img -->
                            <div class="carousel-caption">      <!-- slide caption wrapper -->
                                <h3>Fifth Slide</h3>            <!-- caption 1 -->
                                <p>Fifth Slide paragraph</p>    <!-- caption 2 -->
                            </div>
                        </div>
                        <div class="carousel-item"> <!-- slide 6 -->
                            <img src="img/IndexPgPics/Slideshow/slide_6.jpg" class="d-block w-100 slideshow-img" alt="">    <!-- slide img -->
                            <div class="carousel-caption">      <!-- slide caption wrapper -->
                                <h3>Sixth Slide</h3>            <!-- caption 1 -->
                                <p>Sixth Slide paragraph</p>    <!-- caption 2 -->
                            </div>
                        </div>
                        <div class="carousel-item"> <!-- slide 7 -->
                            <img src="img/IndexPgPics/Slideshow/slide_7.jpg" class="d-block w-100 slideshow-img" alt="">    <!-- slide img -->
                            <div class="carousel-caption">      <!-- slide caption wrapper -->
                                <h3>Seventh Slide</h3>          <!-- caption 1 -->
                                <p>Seventh Slide paragraph</p>  <!-- caption 2 -->
                            </div>
                        </div>
                        <a href="#fadeCarousel" class="carousel-control-prev" role="button" data-slide="prev">  <!-- prev button wrapper -->
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a href="#fadeCarousel" class="carousel-control-next" role="button" data-slide="next">  <!-- next button wrapper -->
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Design section wrapper -->
        <section id="design">       
            <div class="container design-container">    <!-- Design container -->
                <div class="row">                       <!-- create Row -->
                    <div class="design-content-wrapper">
                        <div class="col-md-6 design-text-container">    <!-- medium screens 50% width -->
                            <h1 class="section-header">Designs</h1>     <!-- Design Header -->
                            <p class="info">We are passionate about creating beautiful designs for every taste and budget and we follow the entire journey from your initial ideas to the finished product. Whatever your ideas we can bring this to life with an expert design team on hand.</p>   <!-- Design text -->
                            
                        </div>
                        <div class="col-md-6 design-img-container"> <!-- medium screens 50% width -->
                            <img src="img/IndexPgPics/design_img.jpg" class="design-img" alt="">    <!-- Design img -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Supply section wrapper -->
        <section id="supply">       
            <div class="container supply-container">
                <div class="row">   <!-- create Row -->
                    <div class="supply-content-wrapper">
                        <div class="col-md-6 supply-img-container"> <!-- medium screens 50% width -->
                            <img src="img/IndexPgPics/supply_img.jpg" class="supply-img" alt="">    <!-- Supply img -->
                        </div>
                        <div class="col-md-6 supply-text-container">    <!-- medium screens 50% width -->
                            <h1 class="section-header">Supply</h1>  <!-- Supply Header -->
                            <p class="info">We has access to some of the most exclusive suppliers in the industry and by cutting out the middlemen we are able to pass on the benefits to our customers.</p>    <!-- Supply text -->
                            <div class="underline"> <!-- Supply underlines -->
                                <div class="large-underline"></div>
                                <div class="small-underline"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Installation section wrapper -->
        <section id="installations">    
            <div class="container installations-container"> <!-- Installation container -->
                <div class="row">   <!-- create Row -->
                    <div class="installations-content-wrapper">
                        <div class="col-md-6 installations-text-container"> <!-- medium screens 50% width -->
                            <h1 class="section-header">Installations</h1>   <!-- Installation Header -->
                            <p class="info">We have vast amounts of experience in costing and valuing, to ensure we work within your budget, however large or small, cutting costs where possible to make the final product for you.</p>     <!-- Installation text -->
                            
                        </div>
                        <div class="col-md-6 installations-img-container">  <!-- medium screens 50% width -->
                            <img src="img/IndexPgPics/installation_img.jpg" class="installations-img" alt="">   <!-- Installation img -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallery section wrapper -->
        <section id="gallery">      
            <div class="container-fluid">   <!-- Full width container -->
                <div class="row gallery-container">
                    <img src="img/IndexPgPics/Gallery/timthumb1.jpg" class="gallery-img gallery-img-1"  alt=""> <!-- Gallery img -->
                    <img src="img/IndexPgPics/Gallery/timthumb2.jpg" class="gallery-img gallery-img-2"  alt=""> <!-- Gallery img -->
                    <img src="img/IndexPgPics/Gallery/timthumb4.jpg" class="gallery-img gallery-img-4"  alt=""> <!-- Gallery img -->
                    <img src="img/IndexPgPics/Gallery/timthumb5.jpg" class="gallery-img gallery-img-5"  alt=""> <!-- Gallery img -->
                    <img src="img/IndexPgPics/Gallery/timthumb6.jpg" class="gallery-img gallery-img-6"  alt=""> <!-- Gallery img -->
                    <img src="img/IndexPgPics/Gallery/timthumb8.jpg" class="gallery-img gallery-img-8"  alt=""> <!-- Gallery img -->
                    <img src="img/IndexPgPics/Gallery/timthumb9.jpg" class="gallery-img gallery-img-9"  alt=""> <!-- Gallery img -->
                    <img src="img/IndexPgPics/Gallery/timthumb10.jpg" class="gallery-img gallery-img-10"  alt="">   <!-- Gallery img -->
                    <img src="img/IndexPgPics/Gallery/timthumb11.jpg" class="gallery-img gallery-img-11"  alt="">   <!-- Gallery img -->
                    <img src="img/IndexPgPics/Gallery/timthumb14.jpg" class="gallery-img gallery-img-14"  alt="">   <!-- Gallery img -->
                </div>
            </div>
        </section>
        <!-- Customer Review section wrapper -->
        <section id="customers">    
            <div class="container-fluid">   <!-- Full width container -->
                <div class="row customers-wrapper">
                    <h1 class="customers-header">Our Customers</h1> <!-- Customer Header -->
                    <div class="customer-underline">    <!-- Underlines -->
                        <div class="customer-large-underline"></div>
                        <div class="customer-small-underline"></div>    
                    </div>
                    <p class="customers-text">This is customers review paragraph This is customers review paragraphThis is customers review paragraph</p>   <!-- Customer text -->
                    <div class="customer-card-wrapper">
                        
                            <div class="customer-card"> <!-- Customer 1 -->
                                <div class="customer-img-wrapper">
                                    <img src="img/customer-1.jpeg" class="customer-img" alt=""> <!-- Customer 1 img -->
                                </div>
                                <div class="customer-info">
                                    <h3 class="customer-name">Sharonjit Gill</h3>   <!-- Customer 1 Name -->
                                    <p class="customer-para1">Happy Customer</p>    <!-- Customer 1 text -->
                                    <p class="customer-para2">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled "</p> <!-- Customer 1 Review -->
                                </div>
                            </div>
                            <div class="customer-card"> <!-- Customer 2 -->
                                <div class="customer-img-wrapper">
                                    <img src="img/customer-2.jpeg" class="customer-img" alt=""> <!-- Customer 2 img -->
                                </div>
                                <div class="customer-info">
                                    <h3 class="customer-name">Pankaj Patel</h3> <!-- Customer 2 Name -->
                                    <p class="customer-para1">Happy Customer</p>    <!-- Customer 2 text -->
                                    <p class="customer-para2">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled"</p>  <!-- Customer 2 Review -->
                                </div>
                            </div>
                        
                        
                    </div>
                </div>
            </div>
        </section>

        <?php include 'includes/footer.php'; ?> <!-- project footer -->
        <?php include 'includes/scripts.php'; ?>    <!-- project JS Files -->
    </body> 
</html>
