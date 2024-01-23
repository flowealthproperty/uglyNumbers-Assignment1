<?php

// Function to check if a number is an ugly number
function isUgly($num) {
    // Base case: If the number is less than or equal to 0, it is not ugly
    if ($num <= 0) {
        return false;
    }

    // Keep dividing the number by 2, 3, and 5 as long as it is divisible
    foreach ([2, 3, 5] as $prime) {
        while ($num % $prime == 0) {
            $num /= $prime;
        }
    }

    // After the division, if the remaining number is 1, it is an ugly number
    return $num == 1;
}

// Example 
$number = 30; // You can change this number to test different cases

// Check if the given number is an ugly number
if (isUgly($number)) {
    echo $number . " is an ugly number.";
} else {
    echo $number . " is not an ugly number.";
}

?>


<!-- 
    SDLC STEPS
Check if the number is less than or equal to 0: Ugly numbers are defined as positive integers, so any number less than or equal to 0 is not considered ugly.

Divide the number by 2, 3, and 5: Keep dividing the number by 2, 3, and 5 as long as it is divisible by these primes.

Check if the remaining number is 1: After the division, if the remaining number is 1, then the original number is an ugly number, as it only has prime factors 2, 3, and 5.

Output the result: Print whether the given number is an ugly number or not.
 -->