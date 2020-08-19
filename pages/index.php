<?php
$pageTitle = 'Home';
require_once('../blocks/head.php');
?>

<link rel="stylesheet" href="../css/index.css">

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
        m[i] = m[i] || function() {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    ym(61391011, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/61391011" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
<!-- /Yandex.Metrika counter -->
</head>

<body>

    <?php
    require_once('../blocks/nav.php');
    ?>

    <div class="carousel slide justify-content-center" dita-ride="carousel" id="slides">
        <div class="carousel-indicator text-center">
            <span></span>
            <span class="active"></span>
            <span></span>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <img src="../images/index/slider-1.jpg" alt="coffee">
                <div class="carousel-caption mx-auto">
                    <h1>Lian Creative Agency</h1>
                    <h2>Minimal Freelance Portfolio</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../images/index/slider-2.jpg" alt="man">
                <div class="carousel-caption mx-auto">
                    <h1>Design & Branding</h1>
                    <h2>We Deliver Quality Results</h2>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Nav for img details  -->
    <div class="nav-img container-fluid bg-white">
        <div class="container px-4">
            <button href="#portfolio-img" id="prev" role="button"><i class="fa fa-chevron-left mx-4"></i>Previous</button>
            <button href="#portfolio-img" id="next" role="button">Next<i class="fa fa-chevron-right mx-4"></i></button>
            <button onclick="hideDetails()" class="float-right" type="button"><i class="fa fa-list-ul mr-1"></i>Show all</button>
        </div>
    </div>

    <!-- filter -->
    <div class="container text-center mt-md-5 mt-2">
        <div class="filter">
            <ol class="breadcrumb justify-content-center my-3">
                <li class="breadcrumb-item">
                    <input type="radio" value="All" id="all" name="filter" checked><label for="all" class="nav-link">All</label>
                </li>
                <li class="breadcrumb-item">
                    <input type="radio" value="logo" id="logo" name="filter"><label for="logo" class="nav-link">logo</label>
                </li>
                <li class="breadcrumb-item">
                    <input type="radio" value="Mobile App" id="mobileApp" name="filter"><label for="mobileApp" class="nav-link">Mobile App</label>
                </li>
                <li class="breadcrumb-item">
                    <input type="radio" value="Wordpress" id="wordpress" name="filter"><label for="wordpress" class="nav-link">Wordpress</label>
                </li>
                <li class="breadcrumb-item">
                    <input type="radio" value="WEB design" id="WEB design" name="filter"><label for="WEB design" class="nav-link">WEB design</label>
                </li>
                <li class="breadcrumb-item">
                    <input type="radio" value="UI/IX" id="UIIX" name="filter"><label for="UIIX" class="nav-link">UI/IX</label>
                </li>
                <li class="breadcrumb-item">
                    <input type="radio" value="Branding" id="Branding" name="filter"><label for="Branding" class="nav-link">Branding</label>
                </li>
            </ol>
        </div>

        <!-- img details -->
        <div class="row my-4 details">
            <div class="col-12 col-md-6">
                <div class="img-info"></div>
            </div>
            <div class="col-12 col-md-6 ">
                <div id="portfolio-img" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="" alt="" class="">
                        </div>
                        <div class="carousel-item">
                            <img src="" alt="" class="">
                        </div>
                        <div class="carousel-item">
                            <img src="" alt="" class="">
                        </div>
                        <div class="carousel-item">
                            <img src="" alt="" class="">
                        </div>
                    </div>
                    <div class="cousel-indicator-img">
                        <div data-target="#portfolio-img" data-slide-to="0" class="active"><img src="../images/index/card-1.jpg" alt="">
                        </div>
                        <div data-target="#portfolio-img" data-slide-to="1"><img src="../images/index/card-2.jpg" alt="">
                        </div>
                        <div data-target="#portfolio-img" data-slide-to="2"><img src="../images/index/card-3.jpg" alt="">
                        </div>
                        <div data-target="#portfolio-img" data-slide-to="3"><img src="../images/index/card-4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4 card-columns">
            <!-- Posts -->
        </div>
        <button class="btn btn-dark py-1 px-4" onclick="getPosts(limit += 2, filter)">load more</button>
    </div>

    <?php require_once('../blocks/footer.php'); ?>