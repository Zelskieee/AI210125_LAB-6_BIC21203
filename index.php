<!DOCTYPE html>
<html lang="en">
<head>
    <title>Question 1 • Lab 6</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td {
            border: 1px solid black;
            padding: 10px;
        }

        td.header {
            background-color: grey;
            color: white;
        }

        td.content {
            colspan: 2;
        }
    </style>
</head>
<body>
    <?php
    $name = "Arif Azinuddin";
    $matric = "AI210125";
    $course = "Web Development";
    $study = 3;
    $address = "C01-087, Apartment Taman Universiti, Jalan Persiaran Taman Universiti, 86400 Parit Raja, Batu Pahat, Johor"
    ?>

    <table>
        <tr>
            <td class="header">Name</td>
            <td class="content" colspan="2"><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td class="header">Matric Number</td>
            <td class="content" colspan="2"><?php echo "$matric"; ?></td>
        </tr>
        <tr>
            <td class="header">Course</td>
            <td class="content" colspan="2"><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td class="header">Year of Study</td>
            <td class="content" colspan="2"><?php echo "$study years"; ?></td>
        </tr>
        <tr>
            <td class="header">Address</td>
            <td class="content" colspan="2"><?php echo "$address"; ?></td>
        </tr>
    </table>

    <br> <!-- Added space between sections -->

    <?php 
    $students = [
        [
            'name' => 'Alice',
            'program' => 'BIP',
            'age' => 21
        ],
        [
            'name' => 'Bob',
            'program' => 'BIS',
            'age' => 20
        ],
        [
            'name' => 'Raju',
            'program' => 'BIT',
            'age' => 22
        ]
    ];
    ?> 

    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Program</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?php echo $student['name']; ?></td>
                    <td><?php echo $student['program']; ?></td>
                    <td><?php echo $student['age']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br> <!-- Added space between sections -->

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
