<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Register</title>
  <style>
    body {
      background-image: url('bg.jpg');
      background-size: cover;
      background-position: center;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      position: relative; /* Menjadikan posisi relatif untuk elemen body */
    }
    h2 {
      position: absolute; /* Mengatur posisi absolut */
      top: 0; /* Memposisikan elemen ke paling atas */
      left: 50%; /* Memposisikan elemen di tengah horizontal */
      transform: translateX(-50%); /* Menyesuaikan posisi sedikit ke kiri agar tetap berada di tengah */
      color: white;
    }
    label {
      color: white;
    }
    input[type="text"],
    input[type="password"],
    button {
      margin: 5px auto;
      display: block;
    }
    a {
      color: white;
      text-align: center;
      display: block;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <h2>Register</h2> <!-- Memposisikan judul "Register" ke paling atas -->
  <form autocomplete="off" action="" method="post">
    <input type="hidden" id="action" value="register">
    <label for="name">Name</label>
    <input type="text" id="name" value="">
    <label for="username">Username</label>
    <input type="text" id="username" value="">
    <label for="password">Password</label>
    <input type="password" id="password" value="">
    <button type="button" onclick="submitData();">Register</button>
  </form>
  <a href="login.php">Go To Login</a>
  <?php require 'script.php'; ?>
</body>
</html>
