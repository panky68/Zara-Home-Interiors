<?php include 'includes/head.php'; ?>
    <body>
        <?php 
            $page = 'stones';
            include 'includes/menu.php'; 
        ?>
        <div class="container">
            <h1 class="pg_hdr">Stones</h1>  <!-- Stones Header -->
            <h4>Benefits Of Fitted Wardrobes</h4>   <!-- Stones sub Header -->
            <p>One of the major benefits of bespoke fitted wardrobes over freestanding wardrobes, is the use of maximising space. You pick out the design, and we will do the rest.</p> <!-- Stones text -->
            <div class="row">   <!-- create row -->
                <!-- Card 1 -->
                <div class="col-md-4 fitted_bedrm_card">    <!-- column 4 wide -->
                    <div class="card">  <!-- card wrapper -->
                        <div class="image-wrapper">
                            <img src="img/show_img1.jpg" class="card-img-top" alt="...">    <!-- card image -->
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Card title</h6>  <!-- card title -->
                            <p class="card-text">Lorem Ipsum is simply dummy text</p> <!-- card text -->
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4 fitted_bedrm_card">    <!-- column 4 wide -->
                    <div class="card">  <!-- card wrapper -->
                        <div class="image-wrapper">
                            <img src="img/show_img1.jpg" class="card-img-top" alt="...">    <!-- card image -->
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Card title</h6>  <!-- card title -->
                            <p class="card-text">Lorem Ipsum is simply dummy text</p>    <!-- card text -->
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4 fitted_bedrm_card">    <!-- column 4 wide -->
                    <div class="card">  <!-- card wrapper -->
                        <div class="image-wrapper">
                            <img src="img/show_img1.jpg" class="card-img-top" alt="...">    <!-- card image -->
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Card title</h6>  <!-- card title -->
                            <p class="card-text">Lorem Ipsum is simply dummy text</p>    <!-- card text -->
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-md-4 fitted_bedrm_card">    <!-- column 4 wide -->
                    <div class="card">  <!-- card wrapper -->
                        <div class="image-wrapper">
                            <img src="img/show_img2.jpg" class="card-img-top" alt="...">    <!-- card image -->
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Card title</h6>  <!-- card title -->
                            <p class="card-text">Lorem Ipsum is simply dummy text</p>    <!-- card text -->
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-md-4 fitted_bedrm_card">    <!-- column 4 wide -->
                    <div class="card">  <!-- card wrapper -->
                        <div class="image-wrapper">
                            <img src="img/show_img2.jpg" class="card-img-top" alt="...">    <!-- card image -->
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Card title</h6>  <!-- card title -->
                            <p class="card-text">Lorem Ipsum is simply dummy text</p>    <!-- card text -->
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col-md-4 fitted_bedrm_card">    <!-- column 4 wide -->
                    <div class="card">  <!-- card wrapper -->
                        <div class="image-wrapper">
                            <img src="img/show_img2.jpg" class="card-img-top" alt="...">    <!-- card image -->
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Card title</h6>  <!-- card title -->
                            <p class="card-text">Lorem Ipsum is simply dummy text</p>    <!-- card text -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Multi-Item Slider -->
        <h4>Selection of Worktops</h4>  
        <div class="parent-box owl-carousel">   <!-- boostrap owl carousel-->
            <div class="box">
                <img class="card-img-top" src="img/Stones/blackQuartzLaminte.jpg" alt="">   <!-- owl carousel img 1-->
            </div>
            <div class="box">
                <img class="card-img-top" src="img/Stones/greyMarbleSolid.jpg" alt="">  <!-- owl carousel img 2-->
            </div>
            <div class="box">
                <img class="card-img-top" src="img/Stones/greyWithFlecksQuartz.jpg" alt=""> <!-- owl carousel img 3-->
            </div>
            <div class="box">
                <img class="card-img-top" src="img/Stones/marbleVeneto.jpg" alt=""> <!-- owl carousel img 4-->
            </div>
            <div class="box">
                <img class="card-img-top" src="img/Stones/megaraBlackMarble.jpg" alt="">    <!-- owl carousel img 5-->
            </div>
            <div class="box">
                <img class="card-img-top" src="img/Stones/redSparkle.jpg" alt="">   <!-- owl carousel img 6-->
            </div>
            <div class="box">
                <img class="card-img-top" src="img/Stones/trebbiaStone.jpg" alt=""> <!-- owl carousel img 7-->
            </div>
            <div class="box">
                <img class="card-img-top" src="img/Stones/whiteQuartzGloss.jpg" alt=""> <!-- owl carousel img 8-->
            </div>
        </div>

        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/scripts.php'; ?>
        <script> //owl carousel script file
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                items:4,
                autoplay:true,
                autoplayTimeout:3000,
                responsive : {
                    0 : {           // breakpoint from 0 up
                        items:1
                    },
                    480 : {         // breakpoint from 480 up
                        items:2
                    },
                    768 : {         // breakpoint from 768 up
                        items:3
                    },
                    1100 : {        // breakpoint from 1100 up
                        items:4
                    }
                }
            });
        </script>
    </body>
</html>
