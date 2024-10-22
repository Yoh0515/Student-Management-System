<?php

include_once("connections/connection.php");

$con = connection();

$sql = "SELECT * FROM student_list";
$students = $con->query($sql) or die($con->error);
$row = $students->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Student Management System</h1>
    <br>
    <br>

    <a href="add.php">Add</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Birthday</th>
                <th>Added At</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            <?php do { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['birth_day']; ?></td>
                <td><?php echo $row['added_at']; ?></td>
                <td><?php echo $row['gender']; ?></td>
            </tr>
            <?php } while ($row = $students->fetch_assoc());?>
        </tbody>
    </table>
</body>
</html>


