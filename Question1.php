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

</body>
</html>
