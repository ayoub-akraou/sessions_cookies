<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <form action="" method="POST">
      <label for="language">language:</label>
      <select name="language" id="language">
         <option value="fr">fr</option>
         <option value="en">en</option>
      </select>
      <br>
      <button type="submit">submit</button>
   </form>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $language = $_POST['language'];
   setcookie('lang', $language);
   echo '<pre>';
   var_dump($_COOKIE);
   echo '</pre>';
   "cookie created successfuly, reload the page please to see it <br>";
   if ($_COOKIE['lang']) echo "cookie lang: {$_COOKIE['lang']}";
}
