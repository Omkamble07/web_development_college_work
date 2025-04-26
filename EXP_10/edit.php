<?php
    include('connection.php');
    $id = $_GET['id'];
    $query = "SELECT * FROM dkte WHERE id = '$id'";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <form action="update.php" method="post">
            <table>
                <tr>
                    <input type="hidden" name="id" id="id" value = <?php echo $id ?>>
                    <td>Name : <input type="text" name="name" id="name" value = <?php echo $row['name']; ?>></td>
                    <td>Marks : <input type="number" name="mark" id="mark" value = <?php echo $row['marks']; ?>></td>
                    <td><input type="submit" name="update" id="update" value="update"></td>
                </tr>
            </table>
    </form>
</body>
</html>