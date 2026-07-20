<?php
    $insert = false;
    if(isset($_POST['name'])){
    //Create connection and 
    //Check for connection success
    $con = mysqli_connect("localhost", "root", "", "miniproj_trip_db");
    if(!$con){
        die("Connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Connection to the database was successful!";


    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $desc = $_POST['desc'];
    
    $sql = "INSERT INTO `trip_db` (`name`, `age`, `email`, `phone`, `gender`, `infomation`, `date`) VALUES ('$name', '$age', '$email', '$phone', '$gender', '$desc', current_timestamp())";

    //Execute the query and check for success
    if($con -> query($sql) == true){
        // echo "Successfully inserted";
        //flag for insertion
        $insert = true;
    }
    else{
        echo "Error: $sql <br> $con->error";
    }

    //Close the database connection
    $con->close();
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="https://www.colive.com/blog/wp-content/uploads/2023/12/Untitled-design-36.png" alt="Ahilyanagar Trip" class="bg">
    <div class="container">
        <h3>Welcome to Ahilyanagar Trip Form</h3>
        <p class="form-description">Please Enter your Details and Submit this form to confirm your participation in the trip</p>
        <?php
        if($insert == true){
            echo "<p class=\"form-thanks\">Thanks for Submitting your Form. you're happy to see you for joining the trip!</p>";
        }
        ?>
        <form action="index.php" method="post">
            <label for="name">Enter Name:</label>
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <label for="age">Enter Age:</label>
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <label for="email">Enter Email:</label>
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <label for="phone">Enter Phone:</label>
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
            <label for="gender">Enter Gender:</label>
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <label for="desc">Enter Description:</label>
            <textarea name="desc" id="desc" cols="30" rows="5" placeholder="Enter any other information here"></textarea>
            <div class="buttons">
                <button type="submit" class="btn">Submit</button>
                <button type="reset" class="btn">Reset</button>
            </div> 
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>