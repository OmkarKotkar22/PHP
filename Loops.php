<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $langs = array("PHP", "JavaScript", "Python", "Java");
        echo "<h3>While Loop</h3>";   

        $i = 0;
        while($i < 4){
            echo $langs[$i] . "<br>";
            $i++;
        }

        echo "<h3>Do-While Loop</h3>";
        $i = 0;
        do{
            echo $langs[$i] . "<br>";
            $i++;
        } while($i < 4);

        echo "<h3>For Loop</h3>";
        for($i = 0; $i < 4; $i++){
            echo $langs[$i] . "<br>";
        }

        echo "<h3>Foreach Loop</h3>";
        foreach($langs as $lang){
            echo $lang . "<br>";
        }
    ?>
</body>
</html>