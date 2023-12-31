
<?php
/* 
Task 2: Array Manipulation

Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array.
*/


$numbers = range(1, 10);

function removeEvenNumbers(&$array) {
    foreach ($array as $key => $number) {
        if ($number % 2 === 0) {
            unset($array[$key]);
        }
    }
}

removeEvenNumbers($numbers);

print_r($numbers);

