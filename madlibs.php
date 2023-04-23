<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MadLibs</title>
</head>
<body>
<form action="madlibs.php" method="get">
  Color:  <input type="text" name="color"><br>
  PNoun: <input type="text" name="pnoun"><br>
  Human:   <input type="text" name="human"><br>
<input type="submit">
</form>
<br><br>

<?php
$color = $_GET["color"];
$pnoun = $_GET["pnoun"];
$human = $_GET["human"];

echo "Roses are $color <br>";
echo "$pnoun are blue <br>";
echo "I love $human <br>";
?>
</body>
</html>