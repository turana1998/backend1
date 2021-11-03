<?php require_once "admin/settings/code/front.php";
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$Title?></title>
    <meta name="description" content="<?=$Desc?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?=$Keywords?>">
    <meta name="author" content="Ismailova Turana">
    <!-- facebook meta tags -->
    <meta property="og:url"  content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="When Great Minds Don’t Think Alike" />
    <meta property="og:description" content="How much does culture influence creative thinking?" />
    <meta property="og:image" content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />
        
     <!-- facebook meta tags end -->


     <!--  twitter meta tags -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@nytimesbits" />
    <meta name="twitter:creator" content="@nickbilton" />
    <meta property="og:url" content="http://bits.blogs.nytimes.com/2011/12/08/a-twitter-for-my-sister/" />
    <meta property="og:title" content="A Twitter for My Sister" />
    <meta property="og:description" content="In the early days, Twitter grew so quickly that it was almost impossible to add new features because engineers spent their time trying to keep the rocket ship from stalling." />
    <meta property="og:image" content="http://graphics8.nytimes.com/images/2011/12/08/technology/bits-newtwitter/bits-newtwitter-tmagArticle.jpg" />

     <!--  twitter tags end --> 


    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/xfavicon.png.pagespeed.ic.APIGfdL4Xd.png">

    <link rel="stylesheet"
        href="assets/css/A.bootstrap.min.css owl.carousel.min.css slicknav.css animate.min.css magnific-popup.css fontawesome-all.min.css themify-icons.css slick.css nice-select.css,Mcc.l2xGCPz-N4.css.pag.css">
    <link rel="stylesheet" href="assets/css/A.style.css.pagespeed.cf._n6ZwNuD8d.css">
</head>

<body>
    <header>
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <div class="left-content d-flex align-items-center">
                            <div class="logo">
                                <a href="index.php"><img src="<?=$Logo?>"
                                        alt=""></a>
                            </div>

                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index">Ana Səhifə</a></li>
                                        <li><a href="about">Haqqında</a></li>
                                        <li><a href="#">Blog</a>
                                        <ul class="submenu">
                                       <?php for($i=0;$i<count($CRUD->Select("blogkat",1,"where status=1"));$i++){ ?>
                          <li><a href="blog-category-<?=$BlogKat[$i]["id"]?>"><?= $BlogKat[$i]["name"]?></a></li>
                                        <?php }?>
                                            </ul>
                                        </li>
                                        <li><a href="#">Portfolio</a>
                                             <ul class="submenu">
                                       <?php for($i=0;$i<count($CRUD->Select("portfolio_kat",1,"where status=1"));$i++){ ?>
                          <li><a href="portfolio-category-<?=$PortKat[$i]["id"]?>"><?= $PortKat[$i]["name"]?></a></li>
                                        <?php }?>
                                            </ul>
                                        </li>
                                        <li><a href="team">Komanda</a></li>
                                        <li><a href="contact">Əlaqə</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="buttons">
                            <ul>
                                <li class="button-header">
                                    <a href="#" class="browse-btn">Söhbət</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>