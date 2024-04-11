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
    'Marriage Ministry' => [
        'title' => 'Marriage Ministry - Murder Mystery Dinner',
        'location' => "Maggiano's Little Italy",
        'cityState' => 'Englewood, Co',
        'date' => 'April 12, 2024',
        'sortByDate' => '2024-04-12',
        'startTime' => '6:30 pm',
        'endTime' => '10:00 pm',
        'cost' => '$75', 
        'status' => 1,
        'link' => 'https://expecthope.churchcenter.com/registrations/events/2242477?open-in-church-center-modal=true',
        'image' => '../images/events/murder-mystery-lg.png',
        'mobile_image' => '../images/events/murder-mystery-mobile.png',
        'content' => "This is every detective's fantasy come true - an opportunity for people with a passion for murder mysteries to get plunked smack-dab in the middle of a hilarious investigation. Enjoy the atmosphere and fabulous cuisine of Maggiano's little Italy...but remember you could become the leading suspect! "
    ],
    'Water Baptism' => [
        'title' => 'Water Baptism',
        'location' => 'Expect Hope Church',
        'cityState' => 'Parker, Co',
        'date' => 'April 14, 2024',
        'sortByDate' => '2024-04-14',
        'startTime' => '10:00 am',
        'endTime' => '12:00 pm',
        'cost' => 'Free', 
        'status' => 1,
        'link' => 'https://expecthope.churchcenter.com/registrations/events/2250378?open-in-church-center-modal=true',
        'image' => '../images/events/water-baptism-2024-lg.png',
        'mobile_image' => '../images/events/water-baptism-2024-mobile.png',
        'content' => "Join us Sunday, April 14th, for water baptisms!"
    ],
    "Women's Book Study" => [
        'title' => "Women's Book Study",
        'location' => 'Expect Hope Church',
        'cityState' => 'Parker, Co',
        'date' => 'April 17, 2024',
        'sortByDate' => '2024-04-17',
        'startTime' => '7:00 pm',
        'endTime' => '9:00 pm',
        'cost' => '$15', 
        'status' => 1,
        'link' => 'https://expecthope.churchcenter.com/registrations/events/2250268?open-in-church-center-modal=true',
        'image' => '../images/events/womens-book-study-lg.png',
        'mobile_image' => '../images/events/womens-book-study-mobile.png',
        'content' => "Sign up today for EHC's Women Ministry Book Study! It will be a great time for the ladies of Expect Hope Church to spend time getting to know each other and growing in their faith. We hope you can join us! This is a 3 week series - 4/17. 4/24, 5/1"
    ],
    "Men's Ministry Clay Shooting outing" => [
        'title' => "Men's Ministry Clay Shooting outing",
        'location' => 'Kiowa Creek Sporting Club',
        'cityState' => 'Bennett, Co',
        'date' => 'April 27, 2024',
        'sortByDate' => '2024-04-27',
        'startTime' => '1:15 pm',
        'endTime' => '3:30 pm',
        'cost' => '$105', 
        'status' => 1,
        'link' => 'https://expecthope.churchcenter.com/registrations/events/2250311?open-in-church-center-modal=true',
        'image' => '../images/events/mens-ministry-clay-shooting-outing-1920x1080-lg.png',
        'mobile_image' => '../images/events/mens-ministry-clay-shooting-outing-400x600-mobile.png',
        'content' => "Get ready for an awesome time as the men's ministry heads out to a clay shooting range for an awesome day of bonding April 27th!"
    ]
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