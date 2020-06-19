<?php
$pageTitle = 'Portfolio';
require_once('../blocks/head.php');

require_once '../php/main.php';

$limit = 10; // limit of images
$details = getDetails();
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

    <!-- раскрывающееся меню -->
    <div class="nav-img container-fluid bg-white">
        <div class="container px-4">
            <button href="#portfolio-img" id="previous" role="button"><i class="fas fa-chevron-left mx-4"></i>Previous</button>
            <button href="#portfolio-img" id="next" role="button">Next<i class="fas fa-chevron-right mx-4"></i></button>
            <button id="hideIt" class="float-right" type="button"><i class="fas fa-list-ul mr-1"></i>Show all</button>
        </div>
    </div>

    <!-- фильтр (еще не сделал)-->
    <div class="container mt-5 text-center">
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
            <div class=" col-5">
            </div>
            <div class=" col-6">
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

        <div class="mt-5 card-columns">
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