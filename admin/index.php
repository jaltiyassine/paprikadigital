<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.ico" />
    <title>To You, 2,000 Years From Now</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            text-align: center;
            padding: 20px;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: 0 auto;
        }

        input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="password"]:focus {
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #FF5C5C;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php
    define('KUTLIN', '@9zKLq6P2oyFXu3gE1sT7r0&');
    session_start();
    error_reporting(0);
    if (isset($_SESSION['is_admin'])) {
        header("location:manager.php?s=projects");
        exit(0);
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['password'])) {
            $password = $_POST['password'];

            if ($password == KUTLIN) {
                $_SESSION['is_admin'] = true;
                header("location:manager.php?s=projects");
                exit(0);
            }
        }
    }
    ?>
    <div class="container">
        <h2>Login</h2>
        <form method="post" action="">
            <input type="password" id="password" name="password" placeholder="Password" required>
            <br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>