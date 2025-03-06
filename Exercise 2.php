<?php
function checkNumber($num) {
    if ($num > 0) {
        echo "$num is positive.\n";
    } elseif ($num < 0) {
        echo "$num is negative.\n";
    } else {
        echo "The number is zero.\n";
    }

    if ($num % 2 == 0) {
        echo "$num is even.\n";
    } else {
        echo "$num is odd.\n";
    }
}

echo "Enter a number: ";
$number = trim(fgets(STDIN));
checkNumber($number);
?>
