<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="Mobirise v5.6.11, mobirise.com">
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:image:src" content="">
        <meta property="og:image" content="">
        <meta name="twitter:title" content="Home">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
        <meta name="description" content="Die nuutste publikasies van Boekdiva Uitgewers, 'n uitgewery vir kontemporêre Afrikaanse skryfwerk, is op hierdie blad te sien.">

        <title>Boekdiva Uitgewers - Heimwee</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="assets/animatecss/animate.css">
        <link rel="stylesheet" href="assets/dropdown/css/style.css">
        <link rel="stylesheet" href="assets/socicon/css/styles.css">
        <link rel="stylesheet" href="assets/theme/css/style.css">
        <link rel="preload"
              href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,500,600,700,800,900,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"
              as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript>
            <link rel="stylesheet"
                  href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,500,600,700,800,900,200i,300i,400i,500i,600i,700i,800i,900i&display=swap">
        </noscript>
        <link rel="preload"
              href="https://fonts.googleapis.com/css?family=Lora:400,500,600,700,400i,500i,600i,700i&display=swap"
              as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript>
            <link rel="stylesheet"
                  href="https://fonts.googleapis.com/css?family=Lora:400,500,600,700,400i,500i,600i,700i&display=swap">
        </noscript>
        <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
        <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
        <meta property='fb:app_id' content='701264160060226'/>
		<meta property='og:url' content='https://boekdiva.co.za/read.php'/>
		<meta property='og:type' content='book' />
        <meta property="og:title" content="Boekdiva Uitgewers - Heimwee" />
        <meta property="og:description" content="Heimwee - Sophia Kapp" />
        <meta property="og:image" content="https://boekdiva.co.za/assets/images/Heimwee_omslag.jpg" />
    </head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-N30QYTBGEQ"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-N30QYTBGEQ');
        </script>
    <body>

    <?php
    $vId = $_GET['id'];
    $vContent = "";
    if($vId == '9780639704494'){
        $vBanner = 'Heimwee.jpg';
        $vBannerAlt = 'Heimwee';
        $vCover = 'Heimwee_omslag.jpg';
        $vPrice = 'R350';
        $vPubDate = 'Oktober 2022';
        $vFormat = 'Sagteband 198 x 129mm';
        $vPages = '520';
        $vBuy = '<a href="https://www.graffitibooks.co.za/af/386821/Boeke" target="_blank" class="btn btn-primary display-4">Koop nou - Graffiti Boeke</a>
            <a href="https://www.wordsworth.co.za/products/heimwee-paperback" target="_blank" class="btn btn-primary display-4">Koop nou - Wordsworth Books</a>
            <a href="https://www.exclusivebooks.co.za/product/9780639704494" target="_blank" class="btn btn-primary display-4">Koop nou - Exclusive Books</a>';
        include_once "books_extracts/heimwee.php";
    }
    else if($vId == '9780639779546'){
        $vBanner = 'DieperAsDrome.jpg';
        $vBannerAlt = 'Dieper as Drome';
        $vCover = 'DieperAsDrome_omslag.jpg';
        $vPrice = 'R350';
        $vPubDate = 'Augustus 2023';
        $vFormat = 'Sagteband 230mm x 152mm';
        $vPages = '240';
        $vBuy = '<a href="https://www.graffitiboeke.co.za/af/390222/Boeke" target="_blank" class="btn btn-primary display-4">Koop nou - Graffiti Boeke</a>
            <a href="https://www.wordsworth.co.za/products/dieper-as-drome-trade-paperback?variant=43249042620594 " target="_blank" class="btn btn-primary display-4">Koop nou - Wordsworth Books</a>';
        include_once "books_extracts/dieperasdrome.php";
    }

    ?>

    <section data-bs-version="5.1" class="menu menu1 top-menu-class" once="menu" id="menu1-1">
        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="boekdiva.co.za">
                            <img src="assets/images/logo_b.png" alt="Boekdiva" style="height: 3.7rem;">
                        </a>
                    </span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse"
                        data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                        <li class="nav-item">
                            <a class="nav-link link text-warning display-4 obfuscate-it" href="#" data-name="info" data-domain="boekdiva" data-tld="co.za" data-mailto="true" data-content="true">KONTAK ONS</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section class="header-class" id="header1-0">
        <img src="assets/images/books/<?php echo $vBanner; ?>" alt="<?php echo $vBannerAlt; ?>">
    </section>

    <section data-bs-version="5.1" class="features6 feature-book-class" id="features7-7">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg">
<!--                    <h1 class="d-none">Boekdiva Uitgewers</h1>-->
<!--                    <h2 class="d-none">Die nuutste publikasies van Boekdiva Uitgewers, 'n uitgewery vir kontemporêre Afrikaanse skryfwerk, is op hierdie blad te sien.</h2>-->
                    <figure class="figure float-start m-4">
                        <img src="assets/images/books/<?php echo $vCover; ?>" class="shadow" alt="<?php echo $vBannerAlt; ?>">
                    </figure>
                    <h5 class="mbr-title mbr-fonts-style display-2 mt-3"><?php echo $vBannerAlt; ?></h5>
                    <p class="mbr-text mbr-fonts-style display-7 text-start"><?php echo $vContent; ?></p>
                    <div class="mbr-section-btn pt-3 float-end pe-5"><a href="index.php" class="btn btn-warning btn-sm display-4">Terug</a></div>
                </div>
            </div>
            <div class="row border-top mt-2 pb-2 pt-2 ps-5">
                <div class="col-12 col-md-4 mbr-text mbr-fonts-style display-7 text-left">
                    <b>ISBN</b>: <?php echo $vId; ?>
                </div>
                <div class="col-12 col-md-4 mbr-text mbr-fonts-style display-7 text-left">
                    <b>Prys</b>: <?php echo $vPrice; ?>
                </div>
                <div class="col-12 col-md-4 mbr-text mbr-fonts-style display-7 text-left">
                    <b>Publikasie datum</b>: <?php echo $vPubDate; ?>
                </div>
<!--            </div>-->
<!--            <div class="row border-top border-bottom border-top mt-2 pb-2 pt-2 ps-5">-->
                <div class="col-12 col-md-4 mbr-text mbr-fonts-style display-7 text-left">
                    <b>Uitgewer</b>: Boekdiva Uitgewers
                </div>
                <div class="col-12 col-md-4 mbr-text mbr-fonts-style display-7 text-left">
                    <b>Formaat</b>: <?php echo $vFormat; ?>
                </div>
                <div class="col-12 col-md-4 mbr-text mbr-fonts-style display-7 text-left">
                    <b>Bladsye</b>: <?php echo $vPages; ?>
                </div>
            </div>
            <div class="row ps-5 border-top">
                <div class="col-12">
                    <div class="mbr-section-btn pt-3">
                        <?php echo $vBuy; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="footer4 footer-class" once="footers" id="footer4-3">
        <div class="container">

            <div class="row mbr-white">
                <div class="col-10 col-md-6 col-lg-4">
                    <div class="media-wrap col-4">
                        <a href="index.php">
                            <img src="assets/images/logo_w.png" alt="Boekdiva">
                        </a>
                    </div>
                </div>
                <div class="col-10 col-md-6 col-lg-4">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-4 text-primary">
                        <strong>Volg Ons</strong>
                    </h5>
                    <div class="social-row display-7 ps-2">
                        <div class="soc-item">
                            <a href="https://www.facebook.com/Boekdiva" target="_blank">
                                <span class="mbr-iconfont socicon socicon-facebook"></span>
                            </a>
                        </div>
<!--                        <div class="soc-item">-->
<!--                            <a href="https://twitter.com/boekdiva" target="_blank">-->
<!--                                <span class="mbr-iconfont socicon socicon-twitter"></span>-->
<!--                            </a>-->
<!--                        </div>-->
                        <div class="soc-item">
                            <a href="https://www.instagram.com/boekdivauitgewers/" target="_blank">
                                <span class="mbr-iconfont socicon socicon-instagram"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-md-6 col-lg-4 pb-4 mb-4">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-4 text-primary">
                        <strong>Kontak Ons</strong>
                    </h5>
                    <p class="mbr-text mbr-fonts-style mb-4 display-7 text-white">
                        <a href="#" class="obfuscate-it text-white" data-name="info" data-domain="boekdiva" data-tld="co.za" data-mailto="true"></a>
                    </p>
                </div>
            </div>

        </div>
    </section>
<?php
include_once "parts/htmlEnd.php";