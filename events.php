<?php

// Add or remove events from array or update status to automatically reorganize events from coming soon to register or register to sold out...
// sortByDate was added to sort register events by date since date form was changed. Format sortByDate year-month-day. Ex/ '2023-04-28'

// <a href="#" onclick="return false;">

$status = [
    0 => 'SOLD OUT',
    1 => 'Register',
    2 => 'Coming Soon',
];

// events
$events = [
    'Mens Breakfast' => [
        'title' => 'Mens Breakfast',
        'cityState' => 'Parker, CO',
        'date' => 'December 25, 2024',
        'sortByDate' => '2024-01-01',
        'startTime' => '6:00 pm',
        'endTime' => '9:00 pm',
        'status' => 1,
        'link' => '#register',
        'image' => 'images/general/bread-and-cup-eaten.jpg',
        'mobile_image' => 'images/general/bread-and-cup-eaten.jpg',
        'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero laudantium neque fugiat id ullam fuga inventore autem quas iste doloribus. Quia rerum, delectus harum mollitia reiciendis perspiciatis doloremque earum repudiandae."
    ],
    'Bible Study' => [
        'title' => 'Bible Study',
        'cityState' => 'North Jersey/New York City',
        'date' => 'January 13, 2024',
        'sortByDate' => '2024-13-01',
        'startTime' => '6:00 pm',
        'endTime' => '9:00 pm',
        'status' => 1,
        'link' => 'https://www.eventbrite.com/e/impartation-breakfast-new-york-tickets-708649137647',
        'image' => 'images/events/mens-bible-study-lg.png',
        'mobile_image' => 'images/events/mens-bible-study-mobile.png',
        'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero laudantium neque fugiat id ullam fuga inventore autem quas iste doloribus. Quia rerum, delectus harum mollitia reiciendis perspiciatis doloremque earum repudiandae."
    ],
    'Outting' => [
        'title' => 'Outting',
        'cityState' => 'Tampa, FL',
        'date' => 'Coming Soon',
        'sortByDate' => null,
        'startTime' => '6:00 pm',
        'endTime' => '9:00 pm',
        'status' => 2,
        'link' => '#register',
        'image' => 'images/general/bread-and-cup-eaten.jpg',
        'mobile_image' => 'images/general/bread-and-cup-eaten.jpg',
        'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero laudantium neque fugiat id ullam fuga inventore autem quas iste doloribus. Quia rerum, delectus harum mollitia reiciendis perspiciatis doloremque earum repudiandae."
    ],
];

ksort($events);

$sold_out_array = [];
$register_array = [];
$coming_soon_array = [];

foreach ($events as $event) {
    if (0 === $event['status']) {
        array_push($sold_out_array, $event);
    } elseif (1 === $event['status']) {
        array_push($register_array, $event);
    } elseif (2 === $event['status']) {
        array_push($coming_soon_array, $event);
    }
}


usort($register_array, function ($a, $b) {
    return strcmp($a['sortByDate'], $b['sortByDate']);
});


function dayNumberOfWeek($date) {
    $day = date('w', strtotime($date));
    
    return $day;
}

function dayOfWeek($date) {
    $day = dayNumberOfWeek($date);

    $days = array('Sunday', 'Monday', 'Tuesday', 'Wednesday','Thursday','Friday', 'Saturday');
    $result = $days[$day];    
    
    return $result;
}

function abreviatedDay($date) {
    $day = dayOfWeek($date);

    return substr($day, 0, 3);
}

?>





<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- title -->
        <title>First Time Visitor | Expect Hope Church</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="Expect Hope Church">
        <!-- description -->
        <meta name="description" content="We can't wait to meet you. We have children's ministry for ages 0-12 and can pre-register your kids for service. We would love to meet you before service, get you connected and show you around.">
        <!-- keywords -->
        <meta name="keywords" content="Jesus, Christian, Salvation, Hope, Gospel, Bible, Fellowship, God">
        
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-C5F27Q28WK"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-C5F27Q28WK');
        </script>

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="./images/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="./images/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="./images/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="./images/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="./images/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="./images/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="./images/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="./images/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="./images/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="./images/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./images/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="./images/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./images/favicons/favicon-16x16.png">
        <link rel="manifest" href="./images/favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!-- fontawesome icons -->
        <!-- <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css" /> -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="css/bootsnav.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-v5.2/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" type="text/css" href="css/bootsnav.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
        <link rel="stylesheet" type="text/css" href="css/font-icons.min.css">
        <link rel="stylesheet" type="text/css" href="css/theme-vendors.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
        <link rel="stylesheet" type="text/css" href="css/custom.css" />
        <link rel="stylesheet" type="text/css" href="css/responsive.css" />

        <!-- scripts -->
        <script src="https://js.churchcenter.com/modal/v1"></script>
    </head>
    <body>
        <!-- start header -->
        <header id="top">


            
            <!-- 
                ****************
                start navigation 
                ****************
            -->
            <!-- <nav class="navbar navbar-default border-5px bootsnav navbar-fixed-top header-light background-white nav-box-width dark-link navbar-expand-lg menu-center border-blue-to-light-blue border-bottom-2px">
                <div class="container-fluid nav-header-container"> -->

            <nav class="navbar navbar-default bootsnav navbar-fixed-top header-light background-white nav-box-width dark-link navbar-expand-lg menu-center border-transparent border-bottom">
                <div class="container-fluid nav-header-container">
                    <!-- start logo -->
                    <div class="col-auto col-lg-2 ps-0">
                        <a href="index.html" title="Pofo" class="logo">
                            <img src="./images/logos/expect-hope-church-logo-sm.png" data-at2x="./images/logos/expect-hope-church-logo-sm.png" class="logo-dark" alt="Pofo">
                            <img src="./images/logos/expect-hope-church-logo-sm.png" data-at2x="./images/logos/expect-hope-church-logo-sm.png" alt="Pofo" class="logo-light default"></a>
                    </div>
                    <!-- end logo -->
                    <div class="col accordion-menu px-0">
                        <button type="button" class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#navbar-collapse-toggle-1">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse collapse justify-content-center" id="navbar-collapse-toggle-1">
                            <ul id="accordion" class="nav navbar-nav no-margin alt-font text-normal" data-in="animate__fadeIn" data-out="animate__fadeOut">
                                <!-- start home menu item -->
                                <li>
                                    <a href="/index.html" title="Home" class="inner-link">Home</a>
                                </li>
                                <!-- end home menu item -->

                                <!-- start about menu item -->
                                <li class="dropdown simple-dropdown"><a href="#">About</a><i class="fas fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <!-- start sub menu -->
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="/index.html#leadership" title="Leadership" class="inner-link">Leadership</a>
                                        </li>
                                        <li>
                                            <a href="/our-beliefs.html" title="Beliefs" class="inner-link">Our Beliefs</a>
                                        </li>
                                        <li>
                                            <a href="/childrens-ministry.html" title="Children's Ministry" class="inner-link">Children's Ministry</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- end about menu item -->

                                <!-- start contact menu item -->
                                <li class="dropdown simple-dropdown"><a href="#">Media</a><i class="fas fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <!-- start sub menu -->
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <li><a href="/index.html#youtube" title="Latest Sermon" class="inner-link">Latest Sermon</a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/@ExpectHope/featured" title="Sermons" class="inner-link" target="_blank">Past Sermons</a>
                                        </li>
                                        <li>
                                            <a href="/index.html#podcast" title="Podcasts" class="inner-link">Podcasts</a>
                                        </li>
                                        <li>
                                            <li><a href="https://expecthopechurch.online.church/" title="Livestream" class="inner-link" target="_blank">Livestream</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- end contact menu item -->

                                <!-- start livestream menu item -->
                                <li>
                                    <li><a href="https://expecthopechurch.online.church/" title="Livestream" class="inner-link" target="_blank">Livestream</a>
                                </li>
                                <!-- end livestream menu item -->

                                <!-- start contact menu item -->
                                <li class="dropdown simple-dropdown"><a href="#">Contact</a><i class="fas fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <!-- start sub menu -->
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <li><a href="/index.html#contact" title="Contact" class="inner-link">Location</a>
                                        </li>
                                        <li>
                                            <a href="https://expecthope.churchcenter.com/people/forms/359570?open-in-church-center-modal=true" title="Prayer Request" class="inner-link">Prayer Request</a>
                                        </li>
                                        <li>
                                            <li><a href="/index.html#contact" title="Contact" class="inner-link">Contact</a>
                                        </li>

                                    </ul>
                                </li>
                                <!-- end contact menu item -->

                                <!-- start I'm new menu item -->
                                <li>
                                    <li><a href="#" title="Visitor" class="inner-link">I'm New</a>
                                </li>
                                <!-- end I'm new menu item -->

                                <!-- start giving menu item -->
                                <li>
                                    <li><a href="https://expecthope.churchcenter.com/giving?open-in-church-center-modal=true">Give Now</a>
                                </li>
                                <!-- end giving menu item -->
                      
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto col-lg-2 pe-0 text-end d-none d-md-block">
                        <div class="header-social-icon d-none d-md-inline-block no-border-left no-padding-left no-margin-left">
                            <a href="https://www.facebook.com/Expecthopechurch/teri.l.bagwell" title="Facebook" target="_blank"><i class="fab fa-facebook-f facebook-icon" aria-hidden="true"></i></a>
                            <a href="https://instagram.com/expecthopechurch?igshid=YmMyMTA2M2Y=" title="Instagram" target="_blank"><i class="fab fa-instagram instagram-icon" aria-hidden="true"></i></a>
                            <a href="https://www.youtube.com/@ExpectHope" title="Youtube" target="_blank"><i class="fab fa-youtube youtube-icon" aria-hidden="true"></i></a>                          
                        </div>
                    </div>
                </div>
            </nav>
            <!-- 
                ****************
                end navigation 
                ****************
            -->
        </header>
        <!-- end header -->
        



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
                    <div class="swiper-slide cover-background" style="background-image:url('images/church/meet-and-greet1.jpg');"></div>
                    <!-- end slider item -->
                    <!-- start slider item -->
                    <div class="swiper-slide cover-background" style="background-image:url('images/church/church-service2.JPG');"></div>
                    <!-- end slider item -->

                </div>
                <!-- <div class="swiper-pagination swiper-pagination-01 swiper-pagination-white"></div> -->
            </div>
        </section>
        </div>


        

        <!-- 
            *******************
            start first time 
            visitor section 
            *******************
        -->

        <!-- start services section -->
        <section class="overflow-hidden wow animate__fadeIn" id="first-time">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 margin-eight-bottom text-center last-paragraph-no-margin">
                        <div class="row">
                            

                            <?php foreach ($register_array as $register) { ?>

                                <div class="col-2 border border-dark">
                                    <p class="text-uppercase pt-4"><?php echo abreviatedDay($register['sortByDate']); ?></p>
                                    <h5 class="text-uppercase"><?php echo dayNumberOfWeek($register['sortByDate']); ?></h5>
                                </div>
                                <div class="col-7 border border-dark">
                                    <div class="row pt-4 pb-2">
                                        <div class="col-6">
                                            <p class=""><?php echo $register['date']; ?></p>
                                        </div>
                                        <div class="col-6">
                                            <p class=""><?php echo $register['startTime']; ?> - <?php echo $register['endTime']; ?></p>
                                        </div>
                                    </div>
                                    
                                    <h4 class=""><?php echo $register['title']; ?></h4>
                                    <p class="pb-4"><?php echo $register['content']; ?></p>
                                    <p><?php echo $events; ?></p>
                                    
                                </div>
                                <div class="col-3 border border-dark" 

                                    <?php if (strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android')) { ?>
                                        style="background: url(<?php echo $register['mobile_image']; ?>) no-repeat center/cover;"
                                    <?php } else { ?>
                                        style="background: url(<?php echo $register['image']; ?>) no-repeat center/cover;"
                                    <?php } ?>
                                >

                                    <p class="mr-t-20">
                                        <a href=<?php echo $register['link']; ?> class="btn btn-default solid medium" target="_blank"><?php echo $status[$register['status']]; ?></a>                                                                
                                    </p> 
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


        <!-- start footer --> 
        <footer class="footer-strip-dark bg-extra-dark-gray padding-90px-tb lg-padding-70px-tb md-padding-50px-tb sm-padding-40px-tb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-7 col-12 text-center text-md-start sm-margin-30px-bottom">
                        <h5 class="text-white margin-5px-bottom">Let's make something great together</h5>
                        <span class="text-medium">Join us this Sunday! Contact us if you have any questions.</span>
                    </div>
                    <div class="col-lg-4 col-md-5 col-12 text-center text-md-end">
                        <span class="text-extra-large text-extra-dark-gray text-light-gray d-inline-block sm-d-block"><a  href="mailto:info@expecthope.com" class="btn btn-large btn-transparent-white d-table d-lg-inline-block md-margin-lr-auto">Contact Us</a></span>
                    </div> 
                </div>
                <div class="border-top border-color-medium-dark-gray padding-80px-top margin-80px-top lg-padding-60px-top lg-margin-60px-top md-padding-50px-top md-margin-50px-top sm-padding-40px-top sm-margin-40px-top">
                    <div class="row align-items-center">
                        <!-- start logo -->
                        <div class="col-lg-3 col-md-12 text-center text-md-start md-margin-50px-bottom sm-margin-30px-bottom">
                            <a href="index.html"><img class="footer-logo" src="./images/logos/expect-hope-church-logo-sm.png" data-at2x="./images/logos/expect-hope-church-logo-sm.png" alt="Expect Hope Church"></a>
                        </div> 
                        <!-- end logo -->
                        <!-- start copyright -->
                        <div class="col-lg-4 col-md-5 col-12 sm-margin-30px-bottom text-medium text-center text-md-start">
                            10461 S. Parker Rd.<br>
                            Parker, CO 80134
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 sm-margin-30px-bottom text-medium text-center text-md-start">
                            (720) 452-3000<br>
                            <a href="mailto:info@expecthope.com">info@expecthope.com</a>
                        </div>
                        <!-- end copyright -->
                        <!-- start social media -->
                        <div class="col-lg-2 col-md-3 text-center text-md-end">
                            <div class="social-icon-style-8 d-inline-block align-middle">
                                <ul class="small-icon mb-0">
                                    <li><a class="facebook text-white-2" href="https://www.facebook.com/Expecthopechurch/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a class="google text-white-2" href="https://plus.google.com" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a class="instagram text-white-2" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram me-0" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end social media -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top -->
        <!-- javascript -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootsnav.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <script type="text/javascript" src="js/hamburger-menu.js"></script>
        <script type="text/javascript" src="js/theme-vendors.min.js"></script>
        <!-- <script type="text/javascript" src="js/custom.js"></script> -->
        <!-- <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script> -->

        <!-- setting -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>