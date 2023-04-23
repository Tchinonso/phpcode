<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php
    $index = 0;
    while($index <= 5){
        echo "$index <br>";
        $index++;
    }

    for($j = 0; $j <= 10; $j++){
        echo "$j <br>";
    }

    $num = array(88,50,10,5,8,15,18,26,30);

    for($i = 0; $i <= count($num); $i++){
        echo "$num[$i] <br>";
    }
    ?>
</body>
</html>