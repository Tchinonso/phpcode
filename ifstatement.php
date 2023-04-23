<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statement</title>
</head>
<body>
    <?php
    // $isMale = false;
    // $isTall = false;
    // if($isMale && $isTall){
    //     echo "YOU ARE a tall MALE";
    // } elseif($isMale && !$isTall){
    //     echo "YOU ARE not tall but you are MALE";
    // }elseif(!$isMale && $isTall){
    //     echo "YOU ARE tall but you are not MALE";
    // }else{
    //     echo "you are a short female";
    // }
    ?>

    <?php
    function getMax($num1,$num2){
        if($num1 > $num2){
            return $num1;
        }else{
            return $num2;
        }
    }
    echo getMax(100, 18);
    ?>
</body>
</html>