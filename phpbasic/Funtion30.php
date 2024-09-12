<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WriteMessage Function</title>
</head>
<body>
    <?php
        function addFive(&$num) //creat function
        { //start function
            $num += 5;
            
        } //stop function
        function addSix(&$num)
        {
            $num += 6;
        }
        $orinum = 10 ;
        addFive($orinum);
        echo "The value of original variable is ==> $orinum <br> ";
        //call function
        addSix($orinum);
        echo "The value of original variable is ==> $orinum <br> ";

    ?>
    

</body>
</html>