<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Form</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        form {
            width: 100%;
        }
        label {
            font-weight: bold;
            display: block;
            text-align: left;
            margin-top: 10px;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background:rgb(40, 57, 167);
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            margin-top: 20px;
            border-radius: 5px;
            font-size: 16px;
            transition: background 0.3s ease;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background:rgb(40, 156, 154);
        }
        .message {
            margin-top: 20px;
            font-weight: bold;
        }
        .success {
            color: blue;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>User Information</h2>


    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required>

        <label for="place">Place:</label>
        <input type="text" name="place" id="place" required>

        <input type="submit" value="Submit">
    </form>

    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $age = htmlspecialchars($_POST["age"]);
        $place = htmlspecialchars($_POST["place"]);
        
        if (!empty($name) && !empty($email) && !empty($age) && !empty($place)) {
            echo "<div class='message success'>Thank you, $name. Your email is $email, you are $age years old, and you are from $place.</div>";
        } else {
            echo "<div class='message error'>Please fill in all fields.</div>";
        }
    }
    ?>
</div>

</body>
</html>
