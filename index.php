<?php require_once "header.php"; ?>
    <main>

        <div class="slider-area">
            <div class="slider-active dot-style">
              <?php for($i=0;$i<count($Slider);$i++) {?>
                <div class="single-slider slider-height hero-overly slider-bg1 d-flex align-items-center"
                style="background-image: url(<?=$Slider[$i]["sekil"]?>)">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-7 col-lg-6 col-md-9">
                                <div class="hero-caption">
                                    <h1 data-animation="pulse" data-delay=".4s">
                                    <?=$Slider[$i]["title"]?>  </h1>
                                    <a href="about" class="hero-btn" data-animation="bounceIn"
                                        data-delay=".8s">Check Our Services <i class="ti-angle-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              <?php }?>
            </div>

            <div class="slider-footer">
                <div class="footer-wrapper">

                    <div class="single-caption">
                        <div class="caption">
                            <span>Our Mission</span>
                            <h3>The Foremost & Premier Source For Everything Business.</h3>
                            <p>Our mission is to provide quality English language instruction through a variety of
                                courses
                                to international and local.</p>
                            <a href="#" class="browse-btn browse-btn2">Learn More </a>
                        </div>
                    </div>

                    <div class="single-img d-none d-xl-block">
                        <img src="assets/img/hero/hero_footer.jpg" alt="">
                    </div>
                </div>
            </div>

        </div>


        <div class="our-services2 section-padding">
            <div class="container">
                <div class="row justify-content-between">
                <?php for($i=0 ; $i<count($Blog);$i++) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services mb-30">
                            <div class="services-icon">
                                <span><?= $i+1 ?></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#"><?=$Blog[$i]["title"] ?></a></h5>
                                <p><?=$Blog[$i]["description"] ?></p>
                            </div>
                        </div>
                    </div>
                  <?php }?>
                </div>
            </div>
        </div>


        <section class="about-area fix">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8">

                        <div class="about-img about-img1  ">
                            <img src="assets/img/gallery/xabout1.jpg.pagespeed.ic.eEr279f4SU.jpg" alt="">
                        </div>
                    </div>
                    <div class="offset-xl-1 col-xxl-5 col-xl-4 col-lg-5 col-md-9">
                        <div class="about-caption about-caption1">

                            <div class="section-tittle section-tittle2 mb-25">
                                <h2>For local heroes with big hearts and growing champions</h2>
                                <p class="pt-20">Our mission is to provide quality English language instruction through
                                    a variety of courses to international and local.</p>
                            </div>
                            <a href="#" class="red-btn">Learn More <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="home-blog section-bg1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9 col-md-8">

                        <div class="section-tittle section-tittle2 mb-50">
                            <span>Our Solutions</span>
                            <h2>Our consulting solutions for the streaming era</h2>
                            <p>Our mission is to provide quality English language instruction through a variety of
                                courses to international and local.</p>
                        </div>
                    </div>
                </div>
                <div class="items-active owl-carousel">
                  <?php for($i=0 ; $i<count($Portfolio);$i++) { ?>
                    <div class="single-blogs single-blogs2">
                        <div class="blog-img blog-img2">
                            <a href="#"><img src="<?=$Portfolio[$i]["sekil"]?>"
                                    alt=""></a>
                        </div>
                        <div class="blogs-cap">
                            <h5><a href="#"><?= $Portfolio[$i]["ad"]?></a></h5>
                            <p>Our mission is to provide quality English language instruction through a variety of
                                courses to international and local.</p>
                            <a href="<?=$Portfolio[$i]["link"]?>" class="red-btn2"><?=$Portfolio[$i]["link"]?> <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                  <?php } ?>
                </div>
            </div>
        </section>


        <div class="visit-tailor-area fix">

            <div class="tailor-details">
                <h2>We boost our <br>clients’ bottom<br> line by optimizing</h2>
                <p>Quisque aliquet, libero consequat elementum convallis, erat risus imperdiet pellentesque sem neque
                    eget.</p>
                <p class="pera-bottom">Our mission is to provide quality English language instruction through a variety
                    of courses to international and local. A small river named duden flows by their place and supplies
                    it with the necessary regelialia.</p>
                <a href="#" class="red-btn">Learn More <i class="ti-arrow-right"></i></a>
            </div>

            <div class="tailor-offers position-relative">

                <div class="video-icon">
                    <a class="popup-video btn-icon" href="../../watch.html?v=up68UAfH0d0">
                        <img src="assets/img/icon/video-icon.svg" alt="">
                    </a>
                </div>
            </div>
        </div>


        <section class="home-blog section-bg2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-12">

                        <div
                            class="small-tittle text-center mb-25 d-flex justify-content-between flex-wrap align-items-center">
                            <h2>Case study</h2>
                            <a href="#" class="btn_01">Learn More<i class="ti-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-blogs mb-30">
                            <div class="blog-img">
                                <a href="#"><img src="assets/img/gallery/xblog1.jpg.pagespeed.ic.Dvjrxvu4qC.jpg"
                                        alt=""></a>
                                <a href="#" class="blog-btn">View Case</a>
                            </div>
                            <div class="blogs-cap">
                                <h5><a href="#">Behind the word mountains</a></h5>
                                <p>Our mission is to provide quality English language instruction through a variety of
                                    courses to international and local.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-blogs mb-30">
                            <div class="blog-img">
                                <a href="#"><img src="assets/img/gallery/xblog2.jpg.pagespeed.ic.eP_9onnQm3.jpg"
                                        alt=""></a>
                                <a href="#" class="blog-btn">View Case</a>
                            </div>
                            <div class="blogs-cap">
                                <h5><a href="#">Large language ocean</a></h5>
                                <p>Our mission is to provide quality English language instruction through a variety of
                                    courses to international and local.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-blogs mb-30">
                            <div class="blog-img">
                                <a href="#"><img src="assets/img/gallery/xblog3.jpg.pagespeed.ic.iPaxmretTL.jpg"
                                        alt=""></a>
                                <a href="#" class="blog-btn">View Case</a>
                            </div>
                            <div class="blogs-cap">
                                <h5><a href="#">Behind the word mountains</a></h5>
                                <p>Our mission is to provide quality English language instruction through a variety of
                                    courses to international and local.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="count-down-area section-padding border-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-8 col-lg-9  col-md-12">

                        <div class="section-tittle text-center mb-60">
                            <h2>Partner for your business</h2>
                            <p class="mb-55">We understand the complexities of modern markets and translate them into
                                real business solutions for automotive, financial, insurance, pharma & life sciences,
                                and real estate with more to come.</p>
                            <a href="#" class="btn_01">Learn More<i class="ti-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center ">
                    <div class="col-lg-12 col-md-12">
                        <div class="count-down-wrapper">
                            <div class="row justify-content-between">
                                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">

                                    <div class="single mb-30">
                                        <div class="single-counter text-center">
                                            <span class="counter ">2500</span>
                                            <p class="">+</p>
                                        </div>
                                        <div class="pera-count  text-center">
                                            <p>We understand the complexities of modern markets</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
                                    <div class="single mb-30">

                                        <div class="single-counter text-center">
                                            <span class="counter ">350</span>
                                            <p class="">+</p>
                                        </div>
                                        <div class="pera-count text-center">
                                            <p>We understand the complexities of modern markets</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
                                    <div class="single mb-30">

                                        <div class="single-counter text-center">
                                            <span class="counter ">20</span>
                                            <p class="">+</p>
                                        </div>
                                        <div class="pera-count text-center">
                                            <p>We understand the complexities of modern markets</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
<?php require_once "footer.php" ?>