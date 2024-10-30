<?php

# match is more like the switch statement but it differs a little.

# match is an expression i.e., it can be assigned to a variable.


$paymentMethod = 2;

switch($paymentMethod) {
    case 1:
        echo 'Paid';
        break;
    
    case 2:
    case 3:
        echo 'Payment Declined';
        break;

    case 0:
        echo 'Pending Payment';
        break;

    default:
        echo 'Unknown payment method';
}

/* match is exhaustive which means each possible case has to be defined unlike switch statement. In most of cases default will be used.
It does the strict comparison while switch does loose comparison.
*/
$paymentStatusDisplay = match($paymentMethod) {
    1 => 'Paid',
    2, 3 => 'Payment Declined',
    0 => 'Pending Payment',
    default => 'Unknown Payment Status'
};

echo '<br>'.$paymentStatusDisplay;
