<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
<?php
// Function to calculate the area of a rectangle
function calculateArea($length, $width) {
    return $length * $width;
}

// Example: Calling the function with sample values
$length = 10; // Replace with your desired value
$width = 5;  // Replace with your desired value
$area = calculateArea($length, $width);
?>

<p>The area of a rectangle with length <?php echo $length; ?> and width <?php echo $width; ?> is: <?php echo $area; ?></p>

</body>
</html>
