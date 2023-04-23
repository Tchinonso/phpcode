<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple function</title>
</head>
<body>
    <?php
    function hello($name,$age){
        echo "hello $name, you are $age <br>";
    }
    hello("mike", 30 );
    hello("john", 40);
    hello("peter", 25);
    hello("paul", 20);
    hello("destiny", 30);
    hello("james", 38);
    ?>
    <?php
    function cube($num){
        return $num * $num * $num;
    }
    $cubeResult = cube(6);
    echo $cubeResult;
    ?>
</body>
</html>