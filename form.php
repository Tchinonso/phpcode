<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
   

    <form action="form.php" method="get">

    Name: <input type="text" name="name">
    <br><br>
    Age: <input type="number" name="age">
    <br><br>
    <input type='submit'>

    </form>

    <br>
    Your name is : 
    <?php 
    echo $_GET["name"]
    ?>
    <br>
    Your age is : 
    <?php 
    echo $_GET["age"]
    ?>
</body>
</html>