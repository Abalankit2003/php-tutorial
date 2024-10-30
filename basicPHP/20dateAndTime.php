<?php

echo date_default_timezone_get().'<br>'; // This gives the default time zone if not set already
echo date_default_timezone_set('Asia/Kolkata').'<br>'; // This sets the time zone

// echo time().'<br>'; // Returns the current Unix timestamp (seconds since January 1, 1970)


// echo Date('d/m/Y g:ia', time() + 24*60*60).'<br>'; // Prints time in the provided format.

// echo Date('d/m/Y g:ia', mktime(0, 0, 0, 2, 3, null)).'<br>'; // Output => 03/02/2024 12:00am  mktime(second, minute, hour, month, date, year)


// echo Date('d/m/Y g:ia', strtotime('2021-07-08 07:00:00')).'<br>'; // strtotime Changes any valid time string to time() format

// # we can specify the english string of time in strtotime. Below is an example

// echo Date('d/m/Y g:ia', strtotime('tomorrow')).'<br>';
echo Date('d/m/Y g:ia', strtotime('last day of october 2024')).'<br>'; // prints the date as mentioned


# date parse;

$d = Date('m/d/Y g:ia', strtotime('last day of october 2024'));

echo '<pre>';

print_r(date_parse($d)); // prints an array of more details about the time
print_r(date_parse_from_format('m/d/Y g:ia', $d)); // parses in user-defined way

echo '</pre>';
