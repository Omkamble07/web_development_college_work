<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marks</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 50%;
            margin: 0 auto;
            text-align: center;
        }
        form {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }
        th {
            background-color:rgb(69, 71, 197);
            color: white;
        }
        a {
            text-decoration: none;
            color: #2196F3;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        input[type="text"], input[type="number"] {
            padding: 8px;
            width: 90%;
            margin-top: 5px;
        }
        input[type="submit"] {
            background-color:rgb(64, 69, 211);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color:rgb(53, 99, 200);
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="add.php" method="post">
            <table>
                <tr>
                    <td>Name:<br><input type="text" name="name" id="name" required></td>
                    <td>Marks:<br><input type="number" name="mark" id="mark" required></td>
                    <td><br><input type="submit" name="add" id="add" value="Add"></td>
                </tr>
            </table>
        </form>

        <?php
            include('connection.php');
            $query = "SELECT * FROM dkte";
            $result = mysqli_query($con,$query);
        ?>

        <table>
            <tr>
                <th>Name</th>
                <th>Marks</th>
                <th>Operations</th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['marks'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                    <a onclick="return confirm('Are you sure you want to delete?')" href="delete.php?id=<?php echo $row['id']?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
