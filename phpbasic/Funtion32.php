<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WriteMessage Function</title>
</head>
<body>
    <?php
        function addFunction($num1, $num2) //creat function
        { //start function
           $sum = $num1 +$num2;
           return $sum;
        } //stop function
        $return_value = addFunction(10, 20);
        echo "The value of return from addFunction is ==> $return_value <br>";

    ?>
    

</body>
</html>