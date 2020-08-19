    <?php
    $pageTitle = 'About';
    require_once('../blocks/head.php');
    ?>


    <link rel="stylesheet" href="../css/about.css">
    </head>

    <body>
        <?php
        require_once('../blocks/nav.php');
        ?>

        <div class="container-fluid p-0">
            <img src="../images/about/top-img.jpg" class="w-100" alt="">
            <div class="carousel-caption text-left">
                <h1 class="display-4">About The Agency</h1>
                <h2>Welcome to Lian</h2>
            </div>
        </div>


        <div class="container my-5">
            <div class="row">
                <div class="col-12 col-md-6">

                    <div class="carousel slide justify-content-center" dita-ride="carousel" id="slides">
                        <div class="carousel-inner">
                            <div class="carousel-item active ">
                                <img src="../images/about/slider-1.jpg" alt="coffee">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/about/slider-2.jpg" alt="man">
                            </div>

                            <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev"></a>
                            <a class="carousel-control-next" href="#slides" role="button" data-slide="next"></a>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-6">
                    <h2>Our Story</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore ad saepe natus autem,
                        voluptatibus necessitatibus, eveniet harum beatae maxime facilis ipsam. Veniam dicta dolore
                    </p>
                    <p>blanditiis fugiat optio esse! Recusandae ipsam pariatur placeat expedita! Debitis obcaecati dolorum,
                        magnam incidunt
                        ad corrupti perspiciatis natus atque quisquam repellat non reiciendis ea vel voluptas aspernatur
                        minima quo ratione
                        fugit omnis?</p>
                    <h2>Our SKills</h2>

                    <h5>Photoshop</h5>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        <span></span>
                        <i class="fa fa-comment-alt prog-1"></i>
                    </div>

                    <h5>Branding</h5>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        <span></span>
                        <i class="fa fa-comment-alt prog-2"></i>
                    </div>

                    <h5>Photography</h5>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        <span></span>
                        <i class="fa fa-comment-alt prog-3"></i>
                    </div>

                    <h5>Web Design</h5>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        <span></span>
                        <i class="fa fa-comment-alt prog-4"></i>
                    </div>




                </div>

                <div class="row text-center justify-content-center mt-5">
                    <h1 class="w-100">Awesome Team</h1>
                    <p class="w-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore
                        magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                        suscipit.</p>
                </div>


                <div class="card-deck my-5">
                    <div class="card w-100 w-md-25">
                        <img src="../images/about/working-1.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">Lian Joy</h3>
                            <h4 class="card-title">CEO/Founder</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, conse ctetuer adipi scing elit, sed diam nonu
                                mmy nibh euis mod tinci</p>
                        </div>
                    </div>
                    <div class="card w-100 w-md-25">
                        <img src="../images/about/working-2.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">Lian Joy</h3>
                            <h4 class="card-title">CEO/Founder</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, conse ctetuer adipi scing elit, sed nonummy
                                nibh euis mod tinci</p>
                        </div>
                    </div>
                    <div class="card w-100 w-md-25">
                        <img src="../images/about/working-3.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">Lian Joy</h3>
                            <h4 class="card-title">CEO/Founder</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, conse ctetuer adipi scing elit, sed diam nonu
                                mmy nibh euis mod
                                tinci</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php require_once('../blocks/footer.php'); ?>