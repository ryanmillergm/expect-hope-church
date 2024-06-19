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
    "Men's Breakfast" => [
        'id' => "mens-breakfast",
        'title' => "Men's Breakfast",
        'location' => "Expect Hope Church",
        'cityState' => 'Parker, Co',
        'date' => 'July 20, 2024',
        'sortByDate' => '2024-07-20',
        'startTime' => '9:00 am',
        'endTime' => '12:00 pm',
        'cost' => '$15', 
        'status' => 1,
        'link' => 'https://expecthope.churchcenter.com/registrations/events/2309753?open-in-church-center-modal=true',
        'image' => '../images/events/mens-breakfast-lg.png',
        'mobile_image' => '../images/events/mens-breakfast-graphic-sm.png',
        'content' => "Come join us Saturday, July 20th, for our Men's Breakfast! Fellowship, worship, play games and get fed  spiritually & physically. A powerful message will be delivered and you won't want to miss!",
        'btn-title' => 'Register',
        'btn-additional-classes' => ''
    ],
    'Water Baptism' => [
        'id' => "water-baptism",
        'title' => 'Water Baptism',
        'location' => 'Expect Hope Church',
        'cityState' => 'Parker, Co',
        'date' => 'July 14, 2024',
        'sortByDate' => '2024-04-14',
        'startTime' => '10:00 am',
        'endTime' => '12:00 pm',
        'cost' => 'Free', 
        'status' => 1,
        'link' => 'javascript:void(0)',
        'image' => '../images/events/water-baptisms-07-2024-lg.jpg',
        'mobile_image' => '../images/events/water-baptisms-07-2024-mobile.jpg',
        'content' => "Join us Sunday, July 14th, for water baptisms!",
        'btn-title' => 'Register in Person',
        'btn-additional-classes' => 'pointer-none'
    ],
    // "Women's Book Study" => [
    //     'title' => "Women's Book Study",
    //     'location' => 'Expect Hope Church',
    //     'cityState' => 'Parker, Co',
    //     'date' => 'April 17, 2024',
    //     'sortByDate' => '2024-04-17',
    //     'startTime' => '7:00 pm',
    //     'endTime' => '9:00 pm',
    //     'cost' => '$15', 
    //     'status' => 1,
    //     'link' => 'https://expecthope.churchcenter.com/registrations/events/2250268?open-in-church-center-modal=true',
    //     'image' => '../images/events/womens-book-study-lg.png',
    //     'mobile_image' => '../images/events/womens-book-study-mobile.png',
    //     'content' => "Sign up today for EHC's Women Ministry Book Study! It will be a great time for the ladies of Expect Hope Church to spend time getting to know each other and growing in their faith. We hope you can join us! This is a 3 week series - 4/17. 4/24, 5/1"
    // ],
    // "Men's Ministry Clay Shooting outing" => [
    //     'title' => "Men's Ministry Clay Shooting outing",
    //     'location' => 'Kiowa Creek Sporting Club',
    //     'cityState' => 'Bennett, Co',
    //     'date' => 'April 27, 2024',
    //     'sortByDate' => '2024-04-27',
    //     'startTime' => '1:15 pm',
    //     'endTime' => '3:30 pm',
    //     'cost' => '$105', 
    //     'status' => 1,
    //     'link' => 'https://expecthope.churchcenter.com/registrations/events/2250311?open-in-church-center-modal=true',
    //     'image' => '../images/events/mens-ministry-clay-shooting-outing-1920x1080-lg.png',
    //     'mobile_image' => '../images/events/mens-ministry-clay-shooting-outing-400x600-mobile.png',
    //     'content' => "Get ready for an awesome time as the men's ministry heads out to a clay shooting range for an awesome day of bonding April 27th!"
    // ]
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

function dayNumber($date) {
    $array = explode("-", $date);
    $dayNumber = $array[2];
    return $dayNumber;
}

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

function day($date){
    return dayOfWeek($date);
}

function abreviatedDay($date) {
    return substr(dayOfWeek($date), 0, 3);
}

?>