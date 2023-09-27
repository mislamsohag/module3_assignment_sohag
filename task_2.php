
<?php
/* 
Task 2: Array Manipulation

Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array.
*/


$numbers =[1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function removeEvenNumbers($numbers){
    
    $oddNumbers=[];    
    if($numbers%2!=0){        
        array_push($oddNumbers, $numbers);
    } 
    return $oddNumbers;

}
$result=array_map('removeEvenNumbers',$numbers);
print_r($result);
