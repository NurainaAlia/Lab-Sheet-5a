<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
<?php
// Variables to hold my details
$name = "Nuraina Alia Binti Mhd Hussin";
$matric_number = "DI220155"; 
$course = "Science Computer in Multimedia Computing";
$year_of_study = "Year 3";
$address = "No 85, Jalan 7/6 Seksyen 7"; 
?>

<table border="1">
    <tr>
        <th>Details</th>
        <th>Information</th>
    </tr>
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Matric Number</td>
        <td><?php echo $matric_number; ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo $course; ?></td>
    </tr>
    <tr>
        <td>Year of Study</td>
        <td><?php echo $year_of_study; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $address; ?></td>
    </tr>
</table>

</body>
</html>
