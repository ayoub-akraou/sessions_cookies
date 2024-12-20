<?php
session_start();
$_SESSION['status'] = isset($_COOKIE['id']) ? 'active' : 'inactive';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $id = $_POST['id'];
   $username = $_POST['username'];
   $password = $_POST['password'];
   $rememberMe = $_POST['remember'];
   if ($username === "admin" && $password === "password") {
      if ($rememberMe) setcookie('id', $id);
      echo "LOGGED IN SUCCESSFULY! <br>";
      echo "SESSION CREATED SUCCESSFULY!";
   }
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <p><b>status:</b> <?= $_SESSION['status'] ?></p>
   <form action="" method="POST">
      <label for="username">id:</label>
      <input type="text" name="id" id="id">
      <br>
      <label for="username">username:</label>
      <input type="text" name="username" id="username">
      <br>
      <label for="password">password:</label>
      <input type="text" name="password" id="password">
      <br>
      <label for="remember">remember me:</label>
      <input type="checkbox" name="remember" id="remember" checked>
      <br>
      <button type="submit">submit</button>
   </form>
</body>

</html>