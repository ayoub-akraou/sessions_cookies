<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <form action="" method="POST">
      <label for="username">username</label>
      <input type="text" name="username" id="username">
      <br>
      <label for="password">password</label>
      <input type="text" name="password" id="password">
      <br>
      <button type="submit">submit</button>
   </form>
</body>

</html>

<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $username = $_POST['username'];
   $password = $_POST['password'];
   if ($username === "admin" && $password === "password") {
      $_SESSION['username'] = $username;
      echo "LOGGED IN SUCCESSFULY! <br>";
      echo "SESSION CREATED SUCCESSFULY!";
   }
}
