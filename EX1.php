<?php

const COLLEGE_NAME = "Marwadi University";

$Student_Name = "Kathiria Diya";
$Enrollment_Number = "92400527070";
$Course = "BCA";
$Semester =  "4th";
$Subject1 = "OS";
$Subject2 = "Python";
$Subject3 = "LS";
$Subject4 = "CN";
$Subject5 = "C#.NET";
$Marks1 = 80;
$Marks2 = 85;
$Marks3 = 90;
$Marks4 = 85;
$Marks5 = 95;
$Total_Marks = $Marks1 + $Marks2 + $Marks3 + $Marks4 + $Marks5;
$Percentage = ($Total_Marks / 500) * 100;

echo "<center>";
echo "<h1>" . COLLEGE_NAME . "</h1><br>";
echo "<h2>Student Details</h2><br>";
echo "Student Name: " . $Student_Name . "<br>";
echo "Enrollment Number: " . $Enrollment_Number . "<br>";
echo "Course: " . $Course . "<br>";
echo "Semester: " . $Semester . "<br>";
echo "<h2>Marks Details</h2><br>";
echo " " . $Subject1 . " - Marks: " . $Marks1 . "<br>";
echo " " . $Subject2 . " - Marks: " . $Marks2 . "<br>";
echo " " . $Subject3 . " - Marks: " . $Marks3 . "<br>";
echo " " . $Subject4 . " - Marks: " . $Marks4 . "<br>";
echo " " . $Subject5 . " - Marks: " . $Marks5 . "<br>";
echo "Total Marks: " . $Total_Marks . "<br>";
echo "Percentage: " . $Percentage . "%<br>";
echo "</center>";

?>