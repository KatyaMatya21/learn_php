<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hello</title>
  <link rel="stylesheet" href="../css/normalize.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<?php

if ($_POST['user']) {

  print "Hello, ";
  print $_POST['user'];
  print "!";

} else {

  print <<<_HTML_
  <form method="POST" action="$_SERVER[PHP_SELF]">
    <label for="user">Your name</label>
    <input type="text" name="user" id="user">
    <button type="submit">Say Hello</button>
  </form>
_HTML_;

}

?>

</body>
</html>
