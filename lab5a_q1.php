<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php  
        $name = "Amyza Apiva Binti Maijal";  // Replace with your name
        $matric_number = "AI220364";        // Replace with your matric number
        $course = "Computer Science";      // Replace with your course
        $year_of_study = "Year 3";         // Replace with your year of study
        $address = "Bangsar, Kuala Lumpur";  // Replace with your address
    ?> 

    <table border="1">
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
