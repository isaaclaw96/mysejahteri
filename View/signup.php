<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>REGISTRATION</h1>

    <?php
        if(isset($_GET['error'])){
            if($_GET['error'] == "emptyfields"){
                echo "<p> Fill in all fields!</p>";
            }
            elseif($_GET['error'] == "invalidemail"){
                echo "<p> Invalid Email!</p>";
            }
            elseif($_GET['error'] == "invalidphonenum"){
                echo "<p> Invalid Phone Number!</p>";
            }
            elseif($_GET['error'] == "userexists"){
                echo "<p> Email already taken!</p>";
            }
            elseif($_GET['error'] == "phoneexists"){
                echo "<p> Phone already registered!</p>";
            }
            
        }
        else{
            echo "Please Sign Up Below!";
        }
    ?>
    <form action="../Controller/signup.inc.php" method="post">
                <input type="text" name="email" placeholder="Enter Email">
                <br>
                <input type="text" name="name" placeholder="Enter Your Name">
                <br>
                <input type="text" name="phone" placeholder="Enter Phone Number">
                <label>eg:0123456789</label>
                <br>
                <button type="submit" name="register-submit">Register</button>
    </form>

    <a href="index.php">Home</a>
</body>
</html>