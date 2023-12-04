<!DOCTYPE html>
<html lang="en">
<head>
    <title>Question 3 • Lab 6</title>
</head>
<body>
<?php
function calculateArea($length, $width) {
    $area = $length * $width;
    return $area;
}

// Assign value
$length = 10;
$width = 5;

$rectangleArea = calculateArea($length, $width);

// Display output
echo "The area of the rectangle with length $length cm and width $width cm is $rectangleArea cm^2.";
?>

</body>
</html>