<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function test($str) {
        $last_char = substr($str, -1);
        
        $new_str = $last_char . $str . $last_char;
        
        return $new_str;
    }
    
    echo test("Red") . "\n";
    echo "<br>";
    echo test("Green") . "\n";
    echo "<br>";
    echo test("1") . "\n";
    ?>
</body>
</html>