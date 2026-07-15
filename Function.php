<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h3>Function with Parameters</h3>";
    function Username($name){
        echo "Your Name is: <b>" . $name . "</b><br>";
    }

    Username("John Doe");

    // Function with Return Value
    echo "<h3>Function with Return Value</h3>";
    function add($a, $b){
        return $a + $b;
    }
    echo "The sum is: " . add(5, 10);

    // Function with Default Parameter
    echo "<h3>Function with Default Parameter</h3>";
    function greet($name = "Guest"){
        echo "<br>Hello, " . $name . "!";
    }
    greet();
    greet("Alice");

    // Function with Variable Number of Arguments
    echo "<h3>Function with Variable Number of Arguments</h3>";
    function sum(...$numbers){
        $total = 0;
        foreach($numbers as $num){
            $total += $num;
        }
        return $total;
    }
    echo "<br> The total sum is : " . sum(1,2,3,4,5,6,7,8);

    // Recursive Function
    echo "<h3>Recursive Function</h3>";
    function factorial($n){
        if($n <= 1){
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }
    echo "<br> The factorial of 5 is : " . factorial(5);

    // Anonymous Function
    echo "<h3>Anonymous Function</h3>";
    $greet = function($name){
        return "Hello, " . $name . "!";
    };
    echo "<br>" . $greet("Bob");

    // Arrow Function (PHP 7.4+)
    echo "<h3>Arrow Function</h3>";
    $multiply = fn($a, $b) => $a * $b;
    echo "<br> The Product is : " . $multiply(4, 5);
    
         
    ?>
</body>
</html>