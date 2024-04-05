




<?php include '../includes/events.php';?>

<!doctype html>
<html class="no-js" lang="en">

    <?php include '../includes/head.html';?>
    
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

        <!-- start services section -->
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
                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
                    <!-- start features box item -->
                    <div class="col wow animate__fadeInUp last-paragraph-no-margin d-flex " data-wow-delay="0.6s">
                        <div class="bg-white border-color-extra-medium-gray border text-center padding-eighteen-tb border-radius-4 position-relative h-100 d-flex flex-column">
                            <div class="margin-20px-bottom"><i class="fa-regular fa-calendar-days text-white-2 icon-round-small bg-blue d-flex flex-column justify-content-center"></i></div>
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div>
                                    <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom text-xxxl text-uppercase">Plan my visit</div>
                                    <p class="w-75 mx-auto md-w-80 text-extra-large padding-50px-bottom text-extra-large">Let us know you are coming so we can welcome you and pre-register your children.</p>
                                </div>

                                <div class="btn-dual">
                                    <a href="https://expecthope.churchcenter.com/people/forms/485986?open-in-church-center-modal=true" class="btn btn-black btn-extra-large sm-margin-two-all inner-link text-uppercase">I'm Coming! RSVP</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin">
                        <div class="bg-white border-color-extra-medium-gray border text-center padding-eighteen-tb border-radius-4 position-relative h-100 d-flex flex-column justify-content-between">
                            <div class="margin-20px-bottom"><i class="fa-solid fa-church text-white-2 icon-round-small bg-blue d-flex flex-column justify-content-center"></i></div>
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div>
                                    <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom text-xxxl text-uppercase">Services</div>
                                    <p class="w-75 mx-auto md-w-80 text-extra-large">Sunday at 10:00am</p>
                                    <p class="w-75 mx-auto md-w-80 font-weight-600 text-extra-large">Expect Hope Church Location</p>
                                    <p class="w-75 mx-auto md-w-80 text-extra-large padding-50px-bottom">Parker, CO 80134</p>
                                </div>
    
                                <div class="btn-dual">
                                    <a href="https://goo.gl/maps/sHgeemzpUnSKWeJz7" class="btn btn-black btn-extra-large sm-margin-two-all inner-link text-uppercase" target="_blank">Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                        <div class="bg-white border-color-extra-medium-gray border text-center padding-eighteen-tb border-radius-4 position-relative h-100 d-flex flex-column">
                            <div class="margin-20px-bottom"><i class="fa-solid fa-hands-praying text-white-2 icon-round-small bg-blue d-flex flex-column justify-content-center"></i></div>
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div>
                                    <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom text-xxxl text-uppercase">Beliefs</div>
                                    <p class="w-75 mx-auto md-w-80 text-extra-large padding-50px-bottom">We believe the Holy Bible to be the inspired and only infallible, authoritative Word of God.</p>
                                </div>
                                
                                <div class="btn-dual">
                                    <a href="/our-beliefs.html" class="btn btn-black btn-extra-large sm-margin-two-all inner-link text-uppercase" target="_blank">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                        <div class="bg-white border-color-extra-medium-gray border text-center padding-eighteen-tb border-radius-4 position-relative h-100 d-flex flex-column">
                            <div class="margin-20px-bottom"><i class="fa-solid fa-child-reaching text-white-2 icon-round-small bg-blue d-flex flex-column justify-content-center"></i></div>
                            
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div>
                                    <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom text-xxl text-uppercase">Children</div>
    
                                    <p class="w-75 mx-auto md-w-80 text-extra-large padding-50px-bottom text-extra-large">Children are at the core of our ministry and we believe it is imperative for them to grow in a relationship with Jesus and learn biblical principles.</p>
                                </div>

                                <div class="btn-dual">
                                    <a href="/childrens-ministry.html" class="btn btn-black btn-extra-large sm-margin-two-all inner-link text-uppercase">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
            </div>
        </section>
        <!-- end services section -->


        <!-- start parallax feature box -->
        <section class="p-0 wow animate__fadeIn bg-light-gray" style="display: none;">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2"> 
                    <div class="col wow animate__fadeInLeft padding-four-all md-padding-eight-all md-padding-15px-lr sm-padding-50px-tb">
                        <div class="row m-0">
                            <div class="col-12 col-xl-10 margin-six-bottom lg-margin-six-bottom md-margin-30px-bottom sm-no-margin-bottom">
                                <h4 class="alt-font text-extra-dark-gray font-weight-600 text-center text-lg-start md-w-70 mx-auto mx-lg-0 sm-w-90 xs-w-100 sm-margin-30px-bottom">We are delivering beautiful digital products for you</h4>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-xl-2 row-cols-lg-1 row-cols-sm-2 m-0">
                            <!-- start features box item -->
                            <div class="col margin-six-bottom md-margin-50px-bottom sm-margin-40px-bottom last-paragraph-no-margin">
                                <div class="feature-box-5 position-relative">
                                    <i class="icon-desktop text-medium-gray icon-medium"></i>
                                    <div class="feature-content">
                                        <div class="text-extra-dark-gray margin-5px-bottom alt-font font-weight-600">Powerful Website Builder</div>
                                        <p class="w-95 sm-w-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end features box item -->
                            <!-- start features box item -->
                            <div class="col margin-six-bottom md-margin-50px-bottom sm-margin-40px-bottom last-paragraph-no-margin" data-wow-delay="0.2s">
                                <div class="feature-box-5 position-relative">
                                    <i class="icon-book-open text-medium-gray icon-medium"></i>
                                    <div class="feature-content">
                                        <div class="text-extra-dark-gray margin-5px-bottom alt-font font-weight-600">Different Layout Type</div>
                                        <p class="w-95 sm-w-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end features box item -->
                            <!-- start features box item -->
                            <div class="col lg-margin-six-bottom sm-margin-40px-bottom last-paragraph-no-margin" data-wow-delay="0.4s">
                                <div class="feature-box-5 position-relative">
                                    <i class="icon-wallet text-medium-gray icon-medium"></i>
                                    <div class="feature-content">
                                        <div class="text-extra-dark-gray margin-5px-bottom alt-font font-weight-600">True Responsiveness</div>
                                        <p class="w-95 sm-w-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end features box item -->
                            <!-- start features box item -->
                            <div class="col last-paragraph-no-margin" data-wow-delay="0.6s">
                                <div class="feature-box-5 position-relative ">
                                    <i class="icon-camera text-medium-gray icon-medium"></i>
                                    <div class="feature-content">
                                        <div class="text-extra-dark-gray margin-5px-bottom alt-font font-weight-600">Elegant / Unique design</div>
                                        <p class="w-95 sm-w-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end features box item -->
                        </div>
                    </div> 
                    <div class="col cover-background md-h-400px wow animate__fadeInRight" style="background-image:url('https://via.placeholder.com/945x663');"></div>
                </div>
            </div>
        </section>
        <!-- end parallax feature box -->


        <!-- 
        *******************
        start beliefs section 
        *******************
        -->

        <!-- start section -->
        <section class="p-0 wow animate__fadeIn text-center text-md-start" id="beliefs" style="display: none;">
            <div class="container-fluid p-0">
                <div class="row g-0">


                <!-- Left Image -->
                <div class="col-12 col-xl-6 col-lg-6 cover-background" style="background-image: url('./images/general/praying-men-arms-out.jpg')"><div class="md-h-500px sm-h-350px"></div></div>
                    
                    <!-- Right Text Background White -->
                    <div class="col-12 col-xl-6 col-lg-6 bg-white last-paragraph-no-margin text-center text-lg-start">
                        <div class="padding-80px-all xl-padding-40px-all md-padding-60px-all sm-padding-40px-all title-xxxl">
                            <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase">06</h5>
                            <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase">Sanctification</h5>
                            <div class="separator-line-horrizontal-medium-thick bg-extra-dark-gray w-15 md-w-30 margin-25px-bottom md-margin-20px-bottom sm-w-50 mx-auto mx-lg-0 sm-margin-15px-bottom"></div>
                            <p class="w-95 lg-w-100 text-xxxl font-weight-500">We believe that sanctification, holiness and the overcoming life is God’s design for the Church, which is the Bride of Christ.</p>
                            <p class="w-95 lg-w-100 text-xxxl font-weight-500">Ephesians 5:25-27</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <?php include '../includes/footer.html';?>

    </body>
</html>