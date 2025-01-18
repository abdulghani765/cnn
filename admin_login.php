<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Placeholder credentials
    if ($username === 'admin' && $password === 'secure') {
        $_SESSION['admin_logged_in'] = true;
        header('Location: manage_articles.php');
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CNN Admin Login</title>
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom right, #202020, #101010);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-attachment: fixed;
        }
        .login-container {
            width: 400px;
            background-color: #222;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            text-align: center;
            padding: 30px;
        }
        .login-header {
            background-color: #cc0000;
            color: white;
            padding: 15px;
            font-size: 1.5rem;
            font-weight: bold;
        }
        form {
            margin-top: 20px;
        }
        form input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            font-size: 1rem;
            border: 1px solid #555;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
        }
        form input:focus {
            border-color: #cc0000;
            outline: none;
            box-shadow: 0 0 5px #cc0000;
        }
        form button {
            width: 100%;
            padding: 10px;
            font-size: 1.2rem;
            font-weight: bold;
            color: #fff;
            background-color: #cc0000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        form button:hover {
            background-color: #ff3333;
        }
        .error {
            color: #ff4d4d;
            margin-bottom: 10px;
        }
        .footer {
            margin-top: 20px;
            font-size: 0.9rem;
            color: #777;
        }
        .footer a {
            color: #cc0000;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">CNN Admin Portal</div>
        <form method="POST">
            <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <div class="footer">
            <p>&copy; 2024 CNN. All Rights Reserved.</p>
            <p><a href="#">Forgot Password?</a></p>
        </div>
    </div>
</body>
</html>
