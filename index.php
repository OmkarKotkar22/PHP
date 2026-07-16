<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php                           
        echo "<h3>Operators</h3>";
        // Arithmetic Operators
        $a = 10;
        $b = 5;
        echo "Addition: " . ($a + $b) . "<br>";
        echo "Subtraction: " . ($a - $b) . "<br>";
        echo "Multiplication: " . ($a * $b) . "<br>";
        echo "Division: " . ($a / $b) . "<br>";
        echo "Modulus: " . ($a % $b) . "<br>";

        // Comparison Operators
        echo "<h3>Comparison Operators</h3>";
        $x = 10;
        echo "X: " . $x . "<br>";
        $y = 20;
        echo "Y: " . $y . "<br>";
        echo "Equal: " . ($x == $y) . "<br>";
        echo "Not Equal: " . ($x != $y) . "<br>";
        echo "Less Than: " . ($x < $y) . "<br>";
        echo "Greater Than: " . ($x > $y) . "<br>";
        echo "Less Than or Equal: " . ($x <= $y) . "<br>";
        echo "Greater Than or Equal: " . ($x >= $y) . "<br>";

        // Logical Operators
        echo "<h3>Logical Operators</h3>";
        $p = true;
        $q = false;
        echo "AND: " . ($p && $q) . "<br>";
        echo "OR: " . ($p || $q) . "<br>";
        echo "NOT: " . (!$p) . "<br>";
        echo "XOR: " . ($p xor $q) . "<br>";

        //Increment and Decrement Operators
        echo "<h3>Increment and Decrement Operators</h3>";
        $num = 5;
        echo "Original Number: " . $num . "<br>";
        echo "Increment: " . (++$num) . "<br>";
        echo "Decrement: " . (--$num) . "<br>";
        echo "Post Increment: " . ($num++) . "<br>";
        echo "Post Decrement: " . ($num--) . "<br>";

        // Assignment Operators
        echo "<h3>Assignment Operators</h3>";
        $value = 10;
        echo "Original Value: " . $value . "<br>";
        $value += 5;
        echo "After += 5: " . $value . "<br>";
        $value -= 3;
        echo "After -= 3: " . $value . "<br>";
        $value *= 2;
        echo "After *= 2: " . $value . "<br>";
        $value /= 2;
        echo "After /= 2: " . $value . "<br>";

        //String Operators
        echo "<h3>String Operators</h3>";
        $str1 = "Hello";
        $str2 = "World";
        echo "Concatenation: " . ($str1 . " " . $str2) . "<br>";
        $str1 .= " " . $str2;
        echo "Modified String 1: " . $str1 . "<br>";
        $str2 .= "!";
        echo "Modified String 2: " . $str2 . "<br>";
        $str1 = $str2;
        echo "After Assignment: " . $str1 . "<br>";

        // Arrays
        echo "<h3>Arrays</h3>";
        $fruits = ["Apple", "Banana", "Cherry"];
        print_r($fruits);

        $person = [
        "name" => "Alex",
        "age" => 30,
        "skills" => ["PHP", "JavaScript"]
        ];

        print_r($person);

        echo"<br>";

        echo "<pre>";
        print_r($person);
        echo "</pre>";
        
        
    ?>
</body>
</html>