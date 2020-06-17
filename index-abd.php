<?php include 'includes/index_header.php'; ?>
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
                            <img class="ban" src="images/banner.png" >
                            <div class="text-block-2">                            
                                <h2 style="padding-left: 70px;">service</h2>
                                <h2 style="margin-top:-20px; padding-left: 70px; "> by excellence</h2>
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


            <footer class="ftco-footer ftco-section">
                <div class="container">
                    <div class="row mb-5">
                        
                        <div class="col-md">
                            <div class="ftco-footer-widget mb-4 ml-md-4">
                                <h2 class="ftco-heading-2">Get to Know Us</h2>
                                <ul class="list-unstyled">
                                    <li><a href="jobs.php"><span class="icon-long-arrow-right mr-2"></span>Careers</a></li>
                                    <li><a href="news.php"><span class="icon-long-arrow-right mr-2"></span>Blog</a></li>
                                    <li><a href="about.php"><span class="icon-long-arrow-right mr-2"></span>About Us</a></li>
                                    <li><a href="category.php"><span class="icon-long-arrow-right mr-2"></span>Our Products</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Have a Questions?</h2>
                                <div class="block-23 mb-3">
                                    <ul>
                                        <li><span class="icon icon-map-marker"></span><span class="text">188 Zahran Street‎‏ ‏ Amman</span></li>
                                        <li><a href="#"><span class="icon icon-phone"></span><span class="text"> (06) 200 0274</span></a></li>
                                        <li><a href="#"><span class="icon icon-envelope pr-4"></span><span class="text">info@ddcjo.com</span></a></li>
                                        <li class="ftco-animate"><a href="https://web.facebook.com/JordanianMutamayizahDistributionCo/"><span class="icon-facebook"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </footer>



            <!-- loader -->
            <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


            <script src="js/jquery.min.js"></script>
            <script src="js/jquery-migrate-3.0.1.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery.easing.1.3.js"></script>
            <script src="js/jquery.waypoints.min.js"></script>
            <script src="js/jquery.stellar.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script>
            <script src="js/aos.js"></script>
            <script src="js/jquery.animateNumber.min.js"></script>
            <script src="js/bootstrap-datepicker.js"></script>
            <script src="js/jquery.timepicker.min.js"></script>
            <script src="js/scrollax.min.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
            <script src="js/google-map.js"></script>
            <script src="js/main.js"></script>

    </body>
</html>