<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function test($n) {
        return $n % 3 == 0 || $n % 7 == 0;
    }

    var_dump(test(3));  
    echo "3 หาร 3 ลงตัว";
    echo "<br>";
    var_dump(test(14));
    echo "7 หาร 14 ลงตัว"; 
    echo "<br>";
    var_dump(test(12)); 
    echo "3 หาร 12 ลงตัว";
    echo "<br>";
    var_dump(test(37)); 
    echo "7 และ 3 หาร 37 ไม่ลงตัว";
    ?>
</body>
</html>