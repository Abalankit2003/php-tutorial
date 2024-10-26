<?php

    $i = 0;

    # while loop
    while($i<=15) {
        while($i >= 10) {
            break 2; // break the loop upto 2 level high. 
        }

        while($i>=8) break; // break only one level. 1 is default value.
        echo $i." ";
        $i++;
    }


    # do while loop

    do {
        echo $i;
    } while($i < 2);
    echo '<br>';
    $name = 'Ankit Raj';

    $n = strlen($name); // Gives the length of the $name variable.


    #
    for($j = 0;$j<$n;$j++) {
        echo $name[$j]. '<br>';
    }

    
    $array = ['shivam', 'yash', 'Ankit', 'adil'];


    # foreach loop
    foreach($array as $key => $ele) {
        echo $key . ':'. $ele . ',';
    }

    // $ele is not destroyed after the use of foreach. Therefore,

    unset($ele);


    $arr = [
        'user' => 'Gio',
        'email' => 'ankitraj@gmail.com',
        'skills' => ['C', 'C++', 'Java']
    ];

    foreach($arr as $key => $value) {

        // Value is an array so echo cannot print it. Or use json_encode($value);
        if(is_array($value)) {
            $value = implode(',', $value);
        } 

        echo $key . ':' . $value . '<br>';
    }



    // Alternative syntax of foreach loop
    foreach($arr as $value) :
        // Do something
    endforeach;



    // Alternative syntax of while loop
    while($i <= 15) :
        // Do something
    endwhile;



    // Alternative syntax of for loop
    for($j=0;$j<10;$j++) :
        // Do something
    endfor;

    # Switch control structure is same as all other language.
