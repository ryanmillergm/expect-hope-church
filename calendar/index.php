




<?php include '../includes/events.php';?>

<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- title -->
        <title>Calendar | Expect Hope Church</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="Expect Hope Church">
        <!-- description -->
        <meta name="description" content="Checkout Expect Hope Church's calendar to see what's planned!">
        <!-- keywords -->
        <meta name="keywords" content="Jesus, Christian, Salvation, Hope, Gospel, Bible, Fellowship, God">

        <?php include '../includes/head.html';?>
    </head>
    
    <body>
        
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
            Calendar  Section
            *******************
        -->

        <!-- start calendar section -->
        <section class="overflow-hidden wow animate__fadeIn" id="first-time">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 margin-eight-bottom text-center last-paragraph-no-margin">
                        <div class="row">                            

                            <?php foreach ($register_array as $register) { ?>

                                <div class="col-2 col-md-2 border border-dark">
                                    <p class="text-uppercase pt-4"><?php echo abreviatedDay($register['sortByDate']); ?></p>
                                    <h5 class="text-uppercase"><?php echo dayNumber($register['sortByDate']); ?></h5>
                                </div>
                                <div class="col-10 col-md-7 border border-dark">
                                    <div class="row pt-4 pb-2">
                                        <div class="col-6">
                                            <p class=""><?php echo $register['date']; ?></p>
                                        </div>
                                        <div class="col-6">
                                            <p class=""><?php echo $register['startTime']; ?> - <?php echo $register['endTime']; ?></p>
                                        </div>
                                    </div>
                                    
                                    <h4 class="" style="font-weight: 500; color: #111111;"><?php echo $register['title']; ?></h4>
                                    <p class="font-weight-bold mb-1 pb-1"><?php echo $register['content']; ?></p>
                                    <p class="font-weight-bold mb-0 pb-1"><span style="font-weight:600;">Location:</span> <?php echo $register['location']; ?></p>
                                    <p class="font-weight-bold mb-1 pb-1"><span style="font-weight:600;">Cost:</span> <?php echo $register['cost']; ?></p>
                                    
                                </div>
                                <div class="d-none d-md-block col-12 col-md-3 border border-dark" 

                                    <?php if (strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android')) { ?>
                                        style="background: url(<?php echo $register['mobile_image']; ?>) no-repeat center/cover;"
                                    <?php } else { ?>
                                        style="background: url(<?php echo $register['image']; ?>) no-repeat center/cover;"
                                    <?php } ?>
                                >
                                    <p class="mr-t-20 register-link">
                                        <a href=<?php echo $register['link']; ?> class="btn btn-default solid medium" target="_blank"><?php echo $status[$register['status']]; ?></a>                                                                
                                    </p> 
                                </div>

                                <div class="col-12 col-md-3 border border-dark d-block d-md-none bg-dark">
                                    <img src=<?php echo $register['image']; ?> alt="Snow" style="width:100%;">
                                    <div class="">
                                        <p class="mr-t-20 register-link">
                                            <a href=<?php echo $register['link']; ?> class="btn btn-default solid medium" target="_blank"><?php echo $status[$register['status']]; ?></a>                                                                
                                        </p> 
                                    </div>
                                </div>

                            <?php } ?>

                        </div>
                        <!-- <h5 class="alt-font text-extra-dark-grpay font-weight-500">We know how hard it is to find the right church. Being new can be a challenge. But we think church should be fun and helpful. We encourage you to fill out the first time visitor form so we can welcome you and have your kids pre-registered for check-in prior to service. </h5> -->
                    
                    </div>
                </div>
            </div>

            <div class="container my-4 py-5">
                <hr>
            </div>

            <div class="container pt-5">
                <?php include '../includes/service-cards-container.html';?>
            </div>
            
        </section>
        <!-- end calendar section -->


        <?php include '../includes/footer.html';?>

    </body>
</html>