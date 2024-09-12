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
        $count = 0;
        $len = strlen($str);
    
        for ($i = 0; $i < $len - 1; $i++) {
            if (substr($str, $i++, 2) === 'aa') {
                $count++;
            }
        }
    
        return $count;
    }

    echo test("bbaaccaag") . "\n";
    echo "<br>";
    echo test("jjkiaaasew") . "\n";
    echo "<br>";
    echo test("JSaaakoiaa") . "\n";
    ?>
</body>
</html>