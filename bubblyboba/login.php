<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query untuk memeriksa keberadaan pengguna dengan username dan password yang sesuai
    $query_sql = "SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query_sql);

    if (mysqli_num_rows($result) > 0) {
        // Jika login berhasil, arahkan ke halaman index.php
        header("Location: index.php");
        exit();
    } else {
        // Jika login gagal, tampilkan pesan kesalahan
        $error = "Username atau password salah. Coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-image: url(images/bgboba.jpg);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            max-width: 300px;
            background-color: #F6C391;
            padding: 50px;
            border-radius: 100px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            opacity: 0.9;
            filter: alpha(opacity=40); /* For IE8 and earlier */
        }

        h1 {
            text-align: center;
            color: #291803;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #291803;
        }

        input[type="text"],
        input[type="password"] {
            width: 91%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 10px;
            border: 2px solid #fff;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #884A39;
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 10px;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #C38154;
        }

        .error-message {
            color: red;
            margin-bottom: 10px;
        }

        a {
            color: #291803; 
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>LOGIN</h1>
        <?php if (isset($error)) { ?>
            <p class="error-message"><?php echo $error; ?></p>
        <?php } ?>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <input type="submit" value="LOGIN"> <p>
            <a href="register.php">Doesn't have an account yet? Register Here</a>
        </form>
    </div>
</body>
</html>
