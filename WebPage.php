<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            /* margin: 20px; */
        }   
        .container {
            max-width: 100%;
            margin: 0 auto;
            background-color: #846565;
            padding: 20px;
        }
        </style>
</head>
<body>
    <div class="container">
        <h1>Let's Learn PHP</h1>
        <p> Your party status is here! </p>
        <?php
            $age = 34;
            if($age >= 18){
                echo "You are eligible to vote.<br>";
            } else {
                echo "You are not eligible to vote.<br>";
            }
        ?>
    </div>
    
</body>
</html>