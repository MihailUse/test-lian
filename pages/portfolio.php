<?php
$pageTitle = 'Portfolio';
require_once('../blocks/head.php');
?>

<link rel="stylesheet" href="../css/index.css">

</head>

<body>

    <?php
    require_once('../blocks/nav.php');
    ?>

    <div class="container-fluid p-0">
        <img src="../images/index/top-img.jpg" class="w-100" alt="">
        <div class="carousel-caption text-left">
            <h1>LATEST PROJECTS</h1>
            <h2>We Deliver Quality</h2>
        </div>
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
                <li class="breadcrumb-item"><a href="#" class="nav-link">All</a></li>
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
            <div class="col-12 col-md-6">
                <div class="img-info"></div>
            </div>
            <div class="col-12 col-md-6 ">
                <div id="portfolio-img" class="carousel slide">
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
            <!-- Posts -->
        </div>
        <button class="btn btn-dark py-1 px-4" onclick="getPosts(limit += 2)">load more</button>
    </div>

    <?php require_once('../blocks/footer.php'); ?>