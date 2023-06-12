<!DOCTYPE html>
<html>
<head>
    <title>Upload</title>
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
        width: 300px;
        background-color: #F6C391;
        padding: 20px;
        border-radius: 70px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        opacity: 0.9;
        filter: alpha(opacity=40); /* For IE8 and earlier */
        position: relative; /* Tambahkan properti position */
    }

    h1 {
        color: #291803;
        text-align: center;
    }

    p {
        color: #291803;
        margin-bottom: 20px;
    }

    .message {
        color: #291803;
        /* Ubah posisi menjadi absolute dan tambahkan properti lainnya */
        position: absolute;
        bottom: 20px;
        left: 20px;
    }

    .error {
        color: red;
    }

    form {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="file"] {
        margin-bottom: 10px;
        width:92.5%;
        padding: 10px;
        background-color: #884A39;
        border: none;
        color: #fff;
        cursor: pointer;
        border-radius: 10px;
        font-size: 12px;
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

    a {
        display: flex;
        justify-content: center;
        align-items: center;
        color: #884A39;
        text-decoration: none;
        height: 50px;
    }

    a:hover {
        text-decoration: underline;
    }

    p {
        text-align:center;
    }
    </style>
    
</head>
<body>
    <div class="container">
        <h1>Upload Your Photo</h1>
        
        <?php
        require 'koneksi.php';
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Cek apakah ada file yang diupload
            if (isset($_FILES['file'])) {
                $file = $_FILES['file'];

                // Cek apakah ada error saat upload
                if ($file['error'] === UPLOAD_ERR_OK) {
                    // Baca data file
                    $filename = $file['name'];
                    $tempFilePath = $file['tmp_name'];
                    $targetDir = 'uploads/'; 
                    $targetPath = $targetDir . $filename;

                    // Pindahkan file ke folder tujuan
                    if (move_uploaded_file($tempFilePath, $targetPath)) {
                        // Persiapkan statement SQL
                        $stmt = $conn->prepare("INSERT INTO files (filename, filepath) VALUES (?, ?)");
                        $stmt->bind_param("ss", $filename, $targetPath);

                        // Eksekusi statement SQL
                        if ($stmt->execute()) {
                            echo "<p>Foto anda akan diupload ke Instagram '@bubbly___boba'</p>";
                        } else {
                            echo "<p>Terjadi kesalahan saat mengupload file ke database.</p>";
                        }

                        // Tutup statement
                        $stmt->close();
                    } else {
                        echo "<p class='error'>Terjadi kesalahan saat menyimpan file.</p>";
                    }
                } else {
                    // Tampilkan pesan error jika terjadi kesalahan saat upload
                    echo "<p class='error'>Terjadi kesalahan saat mengupload file.</p>";
                }
            }
        }
        ?>

        <form method="POST" action="" enctype="multipart/form-data">
            <label for="file">Choose Here:</label>
            <input type="file" name="file" id="file" required><br>

            <input type="submit" value="Upload">
        </form>

        <a href="index.php">Back</a>
    </div>
</body>
</html>