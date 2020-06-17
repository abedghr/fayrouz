<?php include "includes/index_header.php"?>
        <div class="hero-wrap" style="background-image: url('images/banner-bg.png');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="overlay-2"></div>
            <div class="container">
                <div class="row no-gutters slider-text justify-content-center align-items-center">
                    <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
                        <div class="text text-center w-100" style="position: relative;" >
                            
                            <div style="position: absolute; border-left:2px solid white; border-top:2px solid white; border-bottom: 2px solid white; top:58px; left:180px; width: 120px; height: 110px;">&nbsp;</div>
                            <span style="border-right: 2px solid white; position: absolute; top:58px; left:295px; height: 10px;">&nbsp;</span>
                            <span style="border-right: 2px solid white; position: absolute; top:158px; left:295px; height: 10px; ">&nbsp;</span>
                            <img class="ban" style="margin-left: -303px !important;" src="images/banner.png" >
                            <div class="text-block-2" style="">
                                <h2 style="position: absolute; left: 100px;">service</h2>
                        <h2 style="position: absolute; left: 100px; top:45px;"> by&nbsp;excellence</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <section class="ftco-section testimony-section bg-light">
                <div class="container">
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-7 text-center heading-section ftco-animate">
                            <h2 class="mb-3">Partners</h2>
                        </div>
                    </div>
                    <div class="row ftco-animate">
                        <div class="col-md-12">
                            <div class="carousel-testimony owl-carousel ftco-owl">
                                <?php
                                $query = "select * from partners";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<div class='item'>
                <div class='testimony-wrap py-4'>
                  <div class='text'>
                    <p class='mb-4'></p>
                    <div class='d-flex align-items-center'>
                    <div class='user-img'>";
                                    echo "<img src='admin/partners_img/{$row['par_logo']}'>";
                                    echo "</div></div></div></div></div>";
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


<?php include "includes/index_footer.php"?>