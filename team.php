<?php require_once "header.php"; ?>
<main>

<div class="slider-area">
    <div class="single-slider slider-bg4 hero-overly slider-height2 d-flex align-items-end"
    style="background-image: url(https://media.istockphoto.com/photos/social-media-closeup-of-hands-holding-smartphone-in-cafe-picture-id1212757122?k=20&m=1212757122&s=612x612&w=0&h=K6ZoB9ZoDp8wnHB-PkkJWPEQxdI_hx0iY5Z84yz3qhk=)">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10">

                    <div class="hero-caption hero-caption2">
                        <h2>Komanda </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="home-blog section-bg2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="cl-xl-12">

                <div
                    class="small-tittle text-center mb-25 d-flex justify-content-between flex-wrap align-items-center">
                    <h2>Komanda</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php for($i=0;$i<count($Team);$i++) { ?>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-blogs mb-50">
                    <div class="blog-img">
                        <a href="#"><img height="300" src="<?= $Team[$i]["sekil"]?>"
                                alt=""></a>
                        <a href="#" class="blog-btn">View Case</a>
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="#"><?= $Team[$i]["fullname"]?></a></h5>
                        <p><?= $Team[$i]["description"]?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

</main>
<?php require_once "footer.php" ?> 