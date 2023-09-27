
<?php
/* 
Task 3: Array Sorting  

Create an array called $grades with the following values: 85, 92, 78, 88, 95. Write a PHP function which takes "$grades" as an argument to sort the array in descending order and print the sorted grades as array.

*/

$grades=[85, 92, 78, 88, 95];
rsort($grades);
// print_r($grades);

function gradeChecker($grades){
    // echo $grades."\n";
    $newArray=[];
    if($grades>=80){
        $newArray["$grades"]='A+';
    }elseif($grades>=70){
        $newArray["$grades"]='A-';
    }
    return $newArray;
}

$array=array_map("gradeChecker", $grades);
print_r($array);