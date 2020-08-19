<?php
$pageTitle = 'Contacts';
require_once('../blocks/head.php');
?>

<link rel="stylesheet" href="../css/contact.css">

</head>

<body>
    <?php
    require_once('../blocks/nav.php');
    ?>

    <div class="container-fluid p-0">
        <img src="../images/about/top-img.jpg" class="w-100" alt="">
        <div class="carousel-caption text-left">
            <h1 class="display-4">Get in Touch</h1>
            <h2>Contact us Today</h2>
        </div>
    </div>


    <div class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <h3>Office Info</h3>
                <h4>People Behind the Success of our Company</h4>
                <hr>
                <p><span>Office Hours:</span> Mon-Friday 8am - 10pm</p>

                <p><span>Address:</span> Igbalangao, Bugasong, Antique</p>

                <p><span>Tell:</span> 123-456-7890<br>
                    <span>Fax:</span> 123-456-7890</p>
            </div>
            <div class="col-md-8">
                <form action="../php/email.php" method="post" class="form-inline justify-content-between">
                    <div class="input-group mb-3 mr-2">
                        <input type="text" class="form-control rounded-sm" placeholder="Name" aria-label="Name" name="name" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control rounded-sm" placeholder="Email" aria-label="Email" name="email" required>
                    </div>
                    <div class="input-group mb-3">
                        <textarea type="text" class="form-control rounded-sm" placeholder="Message" aria-label="Message" rows="3" name="massage" required></textarea>
                    </div>
                    <button role="button">Send Message</button>
                </form>
            </div>
        </div>
    </div>
    <div class="map mt-5">
        <img src="../images/contact/map.jpg" alt="" class="img-fluid w-100">

        <div class="container-fluid">
            <div class="map-inf">
                <i id="close" class="fa fa-times"></i>
                <p><span>Mulitix Big Wordpress Theme</span></p>
                <p>110-00 Rockaway Blvd</p>
                <p>South Ozone Park, NY 11420</p>

                <i class="fa fa-caret-down"></i>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="row text-center justify-content-center mt-5">
                <h1 class="w-100">Our Values</h1>
                <p class="w-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                    tincidunt ut laoreet dolore
                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                    suscipit.</p>
            </div>
            <div class="card-deck my-5">
                <div class="card w-100 w-md-25">
                    <img src="../images/contact/card-1.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Who We Are</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                            nibh euismod tincidunt ut laoreet dolore
                            magna aliquam.</p>
                    </div>
                </div>
                <div class="card w-100 w-md-25">
                    <img src="../images/contact/card-2.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Our Vision</h5>
                        <p class="card-text">Typi non habent claritatem insitam; est usus legentis in iis qui facit
                            eorum claritatem. Investigationes demonstraverunt
                            lectores legere me.</p>
                    </div>
                </div>
                <div class="card w-100 w-md-25">
                    <img src="../images/contact/card-3.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Our Mission</h5>
                        <p class="card-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                            molestie consequat, vel illum dolore eu feugiat
                            nulla facilisis at vero eros et accumsan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php require_once('../blocks/footer.php'); ?>