
<?php
/* 
Task 4: Multidimensional Array

Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student. 
*/

$studentGrades=[
    ['Math'=>80, 'English'=>78, 'Science'=>81],
    ['Math'=>65, 'English'=>90, 'Science'=>75],
    ['Math'=>56, 'English'=>45, 'Science'=>30],
];

function avgGrades($grades) {
    foreach ($grades as $index => $student) {
        
        $total = 0;
        $count = 0;
        
        // Calculate the total grade for each subject
        foreach ($student as $subject => $grade) {
            $total += $grade;
            $count++;
        }
        
        // Calculate the average grade
        $average = $total / $count;
        
        // Print the average grade for the student
        echo "Student " . ($index + 1) . " Average Grade: " . round($average, 2) . "<br>";
    }
}

// Call the function with the $studentGrades array
avgGrades($studentGrades);


