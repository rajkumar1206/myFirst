<?php
// the messag
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("rajkumar.r.mys@gmail.com","My subject",$msg);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8"viewport="device">
    <title>basic block</title>
  </head>
  <body>
    <form action="/index.php">
      <fieldset>
        <legend>Personal information:</legend>
        First name:<br>
        <input type="text" name="firstname" value="Mickey"><br>
        Last name:<br>
        <input type="text" name="lastname" value="Mouse"><br><br>
        <input type="submit" value="Submit">
      </fieldset>
    </form>
  </body>
</html>
