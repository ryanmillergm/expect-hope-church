<?php include '../includes/events.php';?>


<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- title -->
        <title>Events | Expect Hope Church</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="Expect Hope Church">
        <!-- description -->
        <meta name="description" content="Expect Hope Church invites you to checkout our upcoming events!">
        <!-- keywords -->
        <meta name="keywords" content="Jesus, Christian, Salvation, Hope, Gospel, Bible, Fellowship, God">

        <?php include '../includes/head.html';?>
    </head>

    <body class="bg-gray-gradient">
        
        <?php include '../includes/header.html';?>

        <div class="container-md">
            <!-- start page title section -->
            <section class="p-0 one-second-screen position-relative wow animate__fadeIn">
                <div class="opacity-medium bg-extra-dark-gray z-index-0"></div>
                <div class="container position-relative">
                    <div class="row align-items-center">
                        <div class="col-12 one-second-screen d-flex flex-column justify-content-center page-title-xxl text-center">
                            <!-- start sub title -->
                            <span class="d-block text-white-2 opacity6 margin-10px-bottom alt-font">Expect Hope</span>
                            <!-- end sub title -->
                            <!-- start page title -->
                            <h1 class="alt-font text-white-2 font-weight-600 w-80 md-w-90 sm-w-100 mx-auto mb-0 text-uppercase">Events</h1>
                            <!-- end page title -->
                        </div>
                        <div class="down-section text-center"><a href="#first-time" class="inner-link"><i class="ti-arrow-down icon-extra-small text-white-2 bg-blue padding-15px-all sm-padding-10px-all rounded-circle"></i></a></div>
                    </div>
                </div>
                <div class="swiper-container z-index-minus2 position-absolute top-0 h-100" data-slider-options='{ "loop": true, "effect":"fade", "slidesPerView": "1", "allowTouchMove":true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": { "el": ".swiper-pagination-01", "clickable": true } }'>
                    <div class="swiper-wrapper">

                        <!-- start slider item -->
                        <div class="swiper-slide cover-background" style="background-image:url('../images/church/meet-and-greet1.jpg');"></div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide cover-background" style="background-image:url('../images/church/church-service2.JPG');"></div>
                        <!-- end slider item -->

                    </div>
                    <!-- <div class="swiper-pagination swiper-pagination-01 swiper-pagination-white"></div> -->
                </div>
            </section>
        </div>


        
        <!-- 
            *******************
            Events List Section
            *******************
        -->

        <!-- start services section -->
        <section class="overflow-hidden wow animate__fadeIn" id="first-time">
            <div class="container">

                <?php if (count($register_array) > 0) { ?>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                        <?php foreach ($register_array as $register) { ?>
                            <div class="col card-container" id="<?php echo $register['id']; ?>">
                                <div class="card h-100">

                                    <a href="<?php echo $register['link']; ?>" class="<?php echo $register['btn-additional-classes']; ?>" target="_blank">
                                        <img class="card-img-top" src="<?php echo $register['image']; ?>" alt="Card image cap">
                                    </a>

                                    <div class="card-body d-flex flex-column justify-content-between h-100">
                                        <div>
                                            <a href="<?php echo $register['link']; ?>" class="" target="_blank">
                                                <h5 class="card-title"><?php echo $register['title']; ?></h5>
                                            </a>
                                            <p class="fw-semibold m-0"><?php echo day($register['sortByDate']); ?></p>
                                            <p class="fw-semibold m-0"><?php echo $register['date']; ?> </p>
                                            <p class="fw-semibold m-0"><?php echo $register['startTime']; ?> - <?php echo $register['endTime']; ?></p>
                                            <p class="font-weight-bold mb-1 pb-1"><span style="font-weight:600;">Cost:</span> <?php echo $register['cost']; ?></p>
                                            <p class="card-text"><?php echo $register['content']; ?></p>
                                        </div>
                                        
                                        <div class="pt-4">
                                            <a href="<?php echo $register['link']; ?>" class="btn btn-events <?php echo $register['btn-additional-classes']; ?>" target="_blank"><?php echo $register['btn-title']; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } else { ?>
                    <div>
                        <h2 class="text-center">There are currently no upcoming events.</h2>
                    </div>
                <?php } ?>

                
                <div class="py-4"></div>
                
                
            </div>

            <div class="container my-4 py-5">
                <hr>
            </div>

            <div class="container pt-5">
                <?php include '../includes/service-cards-container.html';?>
            </div>

        </section>
        <!-- end services section -->

        <?php include '../includes/footer.html';?>

    </body>
</html>