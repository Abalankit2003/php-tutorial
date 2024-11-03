<?php

// $dateTime = new DateTime('03/10/2024 05:57', new DateTimeZone('Asia/Kolkata'));



// $dateTime = new DateTime('03/10/2024 05:57');

// var_dump($dateTime); // object(DateTime)#1 (3) { ["date"]=> string(26) "2024-03-10 05:57:00.000000" ["timezone_type"]=> int(3) ["timezone"]=> string(3) "UTC" }


// echo '<br>';

// $dateTime->setTimeZone(new DateTimeZone('Asia/Kolkata')); // Here the time zone has changed. So the $dateTime value will adjust as well
// $dateTime->setDate(2024, 11, 7)->setTime(2, 15);

// var_dump($dateTime); // object(DateTime)#1 (3) { ["date"]=> string(26) "2024-03-10 11:27:00.000000" ["timezone_type"]=> int(3) ["timezone"]=> string(12) "Asia/Kolkata" }

// echo '<br>';

// echo $dateTime->getTimezone()->getName() . '-' . $dateTime->format('m/d/Y g:i A'); // 03/10/2024 11:27 AM

$date = '15/05/2024';

$example = DateTime :: createFromFormat('d/m/Y', $date); // If time not specified, then it will take the current time.

// print_r($example);
echo '<br>';
# normal comparison operator behaves same as original while comparing DateTime objects. These operators include '<, > , == , <=>'.


$dateTime1 = new DateTime('05/05/2024 3:55 AM'); // 'm/d/Y'
$dateTime2 = new DateTime('05/06/2024 3:55 AM');

// var_dump($dateTime1->diff($dateTime2));



// echo $dateTime1->diff($dateTime2)->days; // 1

echo $dateTime1->diff($dateTime2)->format('%Y years, %m months, %d days, %H, %i, %s'); // 00 years, 0 months, 1 days, 00, 0, 0

echo '<br>';

$interval = new DateInterval('P3M2D');

$dateTime1->add($interval);

echo $dateTime1->format('m/d/Y g:iA');

$dateTime1->sub($interval);

echo $dateTime1->format('m/d/Y g:iA');

echo '<br>';

# Since DateTime is a class so to copy an object use "clone" keyword. Other option is DateTimeImmutable();

$from = new DateTimeImmutable();

$to = $from->add(new DateInterval('P2M')); // $from->add() creates a shallow copy of $from and oprates on it and then the result is assigned to a varible. But you cannot change the $from.

echo $from->format('m/d/Y'). ' - ' . $to->format('m/d/Y');

echo '<br>';


$period = new DatePeriod(new DateTime('05/01/2024'), new DateInterval('P3D'), (new DateTime('05/31/2024'))->modify('+1 day'));


foreach($period as $date) {
    echo $date->format('m/d/Y'). '<br>';
}
