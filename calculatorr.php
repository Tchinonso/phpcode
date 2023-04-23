<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advance cal</title>
</head>
<body>
    <form action="calculatorr.php" method="post">
        first: <input type="number" step="0.00000000000001" name="num1"><br>
        sign: <input type="text" name="op"><br>
        second: <input type="number" step="0.0000000000001" name="num2"><br>
        <input type="submit">
    </form>
    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if($op == "+"){
        echo  $num1 + $num2;
    }elseif($op == "-"){
        echo   $num1 - $num2;
    }elseif($op == "/"){
        echo  $num1 / $num2;
    }elseif($op == "*"){
        echo  $num1 * $num2;
    }else{
        echo "invalid";
    }

   
    ?>
</body>
</html>