<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
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