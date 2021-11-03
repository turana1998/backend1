<?php require_once "header.php"; ?>

<div class="slider-area">
    <div class="single-slider slider-bg4 hero-overly slider-height2 d-flex align-items-end">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10">

                    <div class="hero-caption hero-caption2">
                        <h2>Blog </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="home-blog section-bg1">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-9 col-md-8">

                <div class="section-tittle section-tittle2 mb-50">
                    <span>Our Solutions</span>
                    <h2>Our consulting solutions for the streaming era</h2>
                    <p>Our mission is to provide quality English language instruction through a variety of courses to
                        international and local.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
            <?php for($i=0;$i<count($Blog);$i++){ ?> 
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-blogs mb-40">
                        <div class="blog-img blog-img2">
                            <a href="#"><img src="<?=$Blog[$i]["sekil"]?>"
                                    alt=""></a>
                        </div>
                        <div class="blogs-cap">
                            <h5><a href="#"><?=$Blog[$i]["title"]?></a></h5>
                            <p><?=$Blog[$i]["slug"]?></p>
                        <a href="blog-<?=$Blog[$i]["id"]?>" class="red-btn2">Learn More <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php }?>
            
            </div>
        </div>
    </div>
</section>
<?php require_once "footer.php"; ?>