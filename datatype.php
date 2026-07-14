<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="number" name="age" placeholder="Enter your age">
        <button type="submit">Submit</button>
    </form>
    <?php
    define("PI", 3.14159); // Constant
    echo "<h3>Constants</h3>";
    echo "Value of PI: " . PI . "<br>";
        if(isset($_POST['name']) && isset($_POST['age'])){
            echo "<h3>Form Data</h3>";
            $name = $_POST['name'];
            $age = $_POST['age'];
            echo "Name: " . $name . "<br>";
            echo "Age: " . $age . "<br>";
        }


        // Data Types
        echo "<h3>Data Types</h3>";
        // Integer
        $intVar = 42;
        echo "Integer: " . $intVar . "<br>";

        // Float
        $floatVar = 3.14;
        echo "Float: " . $floatVar . "<br>";

        // String
        $stringVar = "Hello, World!";
        echo "String: " . $stringVar . "<br>";

        // Boolean
        $boolVar = true;
        echo "Boolean: " . ($boolVar ? 'true' : 'false') . "<br>";

        // Array
        $arrayVar = array(1, 2, 3, 4, 5);
        echo "Array: ";
        foreach ($arrayVar as $value) {
            echo $value . " ";
        }

        echo "<br>";

        // Object
        class Person {
            public $name;
            public $age;

            public function __construct($name, $age) {
                $this->name = $name;
                $this->age = $age;
            }

            public function greet() {
                return "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
            }
        }

    ?>
</body>
</html>