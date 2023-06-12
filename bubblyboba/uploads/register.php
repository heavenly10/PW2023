<!DOCTYPE html>
<html>
<head>
    <title>Halaman Register</title>
    <style>
        body {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    margin: 0;
    padding: 0;
    background-image: url(images/bgboba.jpg);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    max-width: 300px;
    background-color: #F6C391;
    padding: 50px;
    border-radius: 100px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    opacity: 0.9;
    filter: alpha(opacity=40); /* For IE8 and earlier */
}

.container h2 {
    text-align: center;
    color: #291803;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 10px;
    color: #291803;
}

.form-group input {
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

.form-group .message {
    color: red;
    margin-bottom: 10px;
}
    </style>

</head>
<body>
    <!-- Halaman Register -->
    <div class="container">
        <h2>REGISTER</h2>

        <?php
        require 'koneksi.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fullname = $_POST["fullname"];
            $username = $_POST["username"];
            $nim = $_POST["nim"];
            $password = $_POST["password"];

    {
        // Query untuk menyimpan data pengguna baru
        $query_sql = "INSERT INTO tbl_users (fullname, username, nim, password) VALUES ('$fullname', '$username', '$nim', '$password')";
        $result = mysqli_query($conn, $query_sql);

        if ($result) {
            // Jika registrasi berhasil, arahkan ke halaman login
            header("Location: login.php");
            exit();
        } else {
            // Jika registrasi gagal, tampilkan pesan kesalahan
            $error = "Registrasi gagal. Silahkan coba lagi.";
        }
    }
}
?>

        <form action="register.php" method="POST">
            <div class="form-group">
                <label for="fullname">Fullname</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" id="nim" name="nim" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="submit" value="REGISTER">
            <?php if (isset($error)) { ?>
            <p class="form-group message"><?php echo $error; ?></p>
        <?php } ?>
        </form>
    </div>
</body>
</html>