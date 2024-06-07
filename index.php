<?php
require 'function.php';
if(isset($_SESSION["id"])){
  $id = $_SESSION["id"];
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id"));
}
else{
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            background-image: url('bg1.jpg');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .content {
            text-align: center;
            color: red; /* Mengubah warna teks menjadi merah */
        }
        .content a {
            color: #fff; /* Jika Anda ingin menyesuaikan warna tautan */
            text-decoration: none;
        }
        .content a:hover {
            text-decoration: underline; /* Efek ketika tautan dihover */
        }
    </style>
    <!-- Sertakan skrip JavaScript di sini -->
    <script src="script.js"></script>
</head>
<body>
    <div class="content">
        <h1 style="color: white;">HALAMAN UTAMA</h1> <!-- Mengubah warna teks langsung pada elemen h1 -->
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
