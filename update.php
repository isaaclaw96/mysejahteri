<?php
    session_start();
    include 'db.sql.php';

    if(isset($_POST['submit-name'])){
        $currentUser = $_SESSION['name'];
        $nameUpdate = $_POST['newname'];

        $sql = "UPDATE customers SET customer_name = '$nameUpdate' WHERE customer_name = '$currentUser';";
        if(mysqli_query($conn,$sql)){
            $_SESSION['name'] = $nameUpdate;
            header("Location: profile.php?update=success");
            exit();
        }
        else{
            header("Location: profile.php?error=mysqlerror");
            exit();
        }

    }
    else{
        header("Location: profile.php");
        exit();
    }