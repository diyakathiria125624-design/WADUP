<?php

const COLLEGE_NAME = "Marwadi University";

echo "<center>";

echo "<h1>" . COLLEGE_NAME . "</h1>";

echo "<h2>Student Details</h2>";

echo "Student Name: Kathiria Diya<br>";
echo "Enrollment Number: 92400527070<br>";
echo "Course: BCA<br>";
echo "Semester: 4th<br>";

echo "<h2>Marks Details</h2>";

echo "OS - Marks: 80<br>";
echo "Python - Marks: 85<br>";
echo "LS - Marks: 90<br>";
echo "CN - Marks: 85<br>";
echo "C#.NET - Marks: 95<br>";

echo "Total Marks: " . (80 + 85 + 90 + 85 + 95) . "<br>";

echo "Percentage: " . ((80 + 85 + 90 + 85 + 95) / 500 * 100) . "%<br>";

echo "</center>";

?>