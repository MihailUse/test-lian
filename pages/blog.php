<?php
$pageTitle = 'Blog';
require_once('../blocks/head.php');
?>

<link rel="stylesheet" href="../css/blog.css">

</head>

<body>

    <?php
    require_once('../blocks/nav.php');
    ?>

    <div class="container-fluid p-0">
        <div class="carousel-inner">
            <img src="../images/blog/top-img.jpg" class="w-100" alt="">
            <div class="carousel-caption text-left">
                <h1>News About Lian</h1>
                <h2>Latest News & Insights</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <!-- post -->
            <div class="mt-5 col-md-8 order-md-first">
                <div class="card-columns">

                    <div class="card">
                        <span class="badge badge-dark rounded-sm">WordPress</span>
                        <div class="card-body">
                            <h3 class="card-title mt-1">I am a Blog Post Title</h3>
                            <h6 class="card-subtitle text-muted"><i class="fas fa-user"></i>by Jenn Pereira</h6>
                            <p class="card-text">Phasellus et nisl tellus. Etiam facilisis eu nisi scelerisque faucibus.
                                Proin
                                semper suscipit magna, nec imperdiet lacus
                                semper vitae. Sed hendrerit enim non justo posuere placerat eget purus mauris. Etiam
                                facilisis
                                eu nisi scelerisque
                                faucibus...</p>

                            <div class="card-footer text-muted">
                                <p class="date float-left"><i class="far fa-calendar"></i>on July 19, 2016</p>
                                <p class="like float-right"><i class="fas fa-share-alt"></i><i class="fas fa-heart mx-2"></i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="../images/blog/post-2.jpg" alt="" class="card-img-top" style=" transform: scale(1.3);">
                        <div class="card-body">
                            <h3 class="card-title mt-3">I am a Blog Post with an Awesome Image</h3>
                            <h6 class="card-subtitle text-muted"><i class="fas fa-user"></i>by Jenn Pereira</h6>
                            <p class="card-text">
                                Proin semper suscipit magna, nec imperdiet lacus semper vitae. Sed
                                hendrerit enim non justo posuere placerat eget purus
                                mauris...
                            </p>
                            <div class="card-footer text-muted">
                                <p class="date float-left"><i class="far fa-calendar"></i>on July 19, 2016</p>
                                <p class="like float-right"><i class="fas fa-share-alt"></i><i class="fas fa-heart mx-2"></i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="../images/blog/post-5.jpg" alt="" class="card-img-top" style="transform: scale(1.1); height: 300px;">
                        <div class="card-body-hover">
                            <span class="badge badge-dark rounded-sm">WordPress</span>
                            <h3 class="card-title mt-3">I am a Blog Post with an Awesome Image</h3>
                            <h6 class="card-subtitle text-muted"><i class="fas fa-user"></i>by Jenn Pereira</h6>
                            <p class="card-text">
                                Proin semper suscipit magna, nec imperdiet lacus semper vitae. Sed
                                hendrerit enim non justo posuere placerat eget purus
                                mauris...
                            </p>
                            <div class="card-footer text-muted">
                                <p class="date float-left"><i class="far fa-calendar"></i>on July 19, 2016</p>
                                <p class="like float-right"><i class="fas fa-share-alt"></i><i class="fas fa-heart mx-2"></i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="../images/blog/post-1.jpg" alt="" class="card-img-top" style=" transform: scale(1.3);">
                        <div class="card-body">
                            <h3 class="card-title mt-3">I am a Blog Post with an Awesome Image</h3>
                            <h6 class="card-subtitle text-muted"><i class="fas fa-user"></i>by Jenn Pereira</h6>
                            <p class="card-text">
                                Proin semper suscipit magna, nec imperdiet lacus semper vitae. Sed
                                hendrerit enim non justo posuere placerat eget purus
                                mauris...
                            </p>
                            <div class="card-footer text-muted">
                                <p class="date float-left"><i class="far fa-calendar"></i>on July 19, 2016</p>
                                <p class="like float-right"><i class="fas fa-share-alt"></i><i class="fas fa-heart mx-2"></i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="../images/blog/post-4.jpg" alt="" class="card-img-top" style=" transform: translate(-2rem, -1rem) scale(1.3);">
                        <a href="#"><i class="fas fa-play"></i></a>
                    </div>

                    <div class="card">
                        <img src="../images/blog/post-3.jpg" alt="" class="card-img-top" style=" transform: translate(6rem, -5rem) scale(2);">
                        <div class="card-body">
                            <h3 class="card-title mt-3">I am a Blog Post with an Awesome Image</h3>
                            <h6 class="card-subtitle text-muted"><i class="fas fa-user"></i>by Jenn Pereira</h6>
                            <p class="card-text">
                                Proin semper suscipit magna, nec imperdiet lacus semper vitae. Sed
                                hendrerit enim non justo posuere placerat eget purus
                                mauris...
                            </p>
                            <div class="card-footer text-muted">
                                <p class="date float-left"><i class="far fa-calendar"></i>on July 19, 2016</p>
                                <p class="like float-right"><i class="fas fa-share-alt"></i><i class="fas fa-heart mx-2"></i>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <button type="button" class="btn btn-light py-1 px-4 text-white m-auto d-block" style="background: #959595;
                border-radius: 3px !important;">load more</button>
            </div>

            <!-- sidebar -->
            <div class="mt-5 col-md-4 sidebar order-first">
                <div class="input-group input-group-lg mb-3 p-2 bg-white align-items-center">
                    <input type="text" class="form-control border-0" placeholder="search" aria-label="search" aria-describedby="search">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-light m-1"><i class="fas fa-search text-white"></i></button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Recent Posts</div><i class="fas fa-sort-down"></i>
                    <div class="media">
                        <div class="media-img">
                            <img src="../images/blog/recent-post-1.jpg" class="mr-3" alt="...">
                        </div>
                        <div class="media-body">
                            <h5>Lorem ipsum dolor sit amet, consec</h5>
                            <p class="text-muted">July 5, 2016</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-img">
                            <img src="../images/blog/recent-post-2.jpg" class="mr-3" alt="...">
                        </div>
                        <div class="media-body">
                            <h5>Lorem ipsum dolor sit amet, consec</h5>
                            <p class="text-muted">July 5, 2016</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-img">
                            <img src="../images/blog/recent-post-3.jpg" class="mr-3" alt="...">
                        </div>
                        <div class="media-body">
                            <h5>Lorem ipsum dolor sit amet, consec</h5>
                            <p class="text-muted">July 5, 2016</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-img">
                            <img src="../images/blog/recent-post-4.jpg" class="mr-3" alt="...">
                        </div>
                        <div class="media-body">
                            <h5>Lorem ipsum dolor sit amet, consec</h5>
                            <p class="text-muted">July 5, 2016</p>
                        </div>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">Popular tags</div><i class="fas fa-sort-down"></i>
                    <div class="card-body mt-n4 p-1 text-left">
                        <button class="btn btn-outline-light">construction</button>
                        <button class="btn btn-outline-light">engineering</button>
                        <button class="btn btn-outline-light">architecture</button>
                        <button class="btn btn-outline-light">structural design</button>
                        <button class="btn btn-outline-light">civil engineer</button>
                        <button class="btn btn-outline-light">industrial</button>
                        <button class="btn btn-outline-light">management</button>
                        <button class="btn btn-outline-light">mechanical</button>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">Instagram</div><i class="fas fa-sort-down"></i>
                    <div class="card-body mt-n4 p-1">
                        <div class="insta-img">
                            <img src="../images/blog/insta-1.jpg" alt="">
                        </div>
                        <div class="insta-img">
                            <img src="../images/blog/insta-2.jpg" alt="">
                        </div>
                        <div class="insta-img">
                            <img src="../images/blog/insta-3.jpg" alt="">
                        </div>
                        <div class="insta-img">
                            <img src="../images/blog/insta-4.jpg" alt="">
                        </div>
                        <div class="insta-img">
                            <img src="../images/blog/insta-5.jpg" alt="">
                        </div>
                        <div class="insta-img">
                            <img src="../images/blog/insta-6.jpg" alt="">
                        </div>
                        <div class="insta-img">
                            <img src="../images/blog/insta-7.jpg" alt="">
                        </div>
                        <div class="insta-img">
                            <img src="../images/blog/insta-8.jpg" alt="">
                        </div>
                        <div class="insta-img">
                            <img src="../images/blog/insta-9.jpg" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('../blocks/footer.php'); ?>