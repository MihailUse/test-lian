<?php
$pageTitle = 'Home';
require_once('../blocks/head.php');

require_once('../php/main.php');

$limit = 10; // limit of images
$details = getDetails();
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
            <i class="fas fa-chevron-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
            <i class="fas fa-chevron-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- раскрывающееся меню -->
    <div class="nav-img container-fluid bg-white">
        <div class="container px-4">
            <button href="#portfolio-img" id="previous" role="button"><i class="fas fa-chevron-left mx-4"></i>Previous</button>
            <button href="#portfolio-img" id="next" role="button">Next<i class="fas fa-chevron-right mx-4"></i></button>
            <button id="hideIt" class="float-right" type="button"><i class="fas fa-list-ul mr-1"></i>Show all</button>
        </div>
    </div>

    <!-- фильтр (еще не сделал)-->
    <div class="container text-center mt-md-5 mt-2">
        <div class="nav justify-content-center" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="nav-link active mt-3">All</a></li>
                <li class="breadcrumb-item"><a href="#" class="nav-link">logo</a></li>
                <li class="breadcrumb-item"><a href="#" class="nav-link">Mobile App</a></li>
                <li class="breadcrumb-item"><a href="#" class="nav-link">Wordpress</a></li>
                <li class="breadcrumb-item"><a href="#" class="nav-link">WEB design</a></li>
                <li class="breadcrumb-item"><a href="#" class="nav-link">UI/IX</a></li>
                <li class="breadcrumb-item"><a href="#" class="nav-link">Branding</a></li>
            </ol>
        </div>

        <!-- img details -->
        <div class="row my-4 details">
            <div class="col-12 col-md-6"></div>
            <div class="col-12 col-md-6 ">
                <div id="portfolio-img" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../images/index/card-1.jpg" alt="" class="">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/index/card-2.jpg" alt="" class="">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/index/card-3.jpg" alt="" class="">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/index/card-4.jpg" alt="" class="">
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
            <?php
            if (count($details) < $limit) {
                $limit = count($details);
            }
            for ($i = 0; $i < $limit; $i++) {
                echo '
                        <div class="card">
                        <img src="../images/index/card-' . $details[$i]["id"] . '.jpg" alt="' . $details[$i]["title"] . '" class="card-img">
                        <a><i class="fas fa-plus"></i></a>
                        <div class="card-info">
                            <h1>' . $details[$i]["title"] . '(' . $details[$i]["id"] . ')' . '</h1>
                            <h2>' . $details[$i]["subtitle"] . '</h2>
                            <hr>
                            <h3>' . $details[$i]["date"] . '<i class="far fa-heart ml-5"></i>  ' . $details[$i]["likes"] . ' likes</h3>
                            <p>' . $details[$i]["text"] . '</p>
                            <hr>
                            <h4>Role On Project:</h4>
                            <h5>' . $details[$i]["role"] . '</h5>
                            <h4>Tags:</h4>
                            <h5>' . $details[$i]["tags"] . '</h5>                          
                        </div>
                        </div>
                        ';
            }
            ?>
        </div>
        <button class="btn btn-dark py-1 px-4">load more</button>
    </div>

    <?php require_once('../blocks/footer.php'); ?>