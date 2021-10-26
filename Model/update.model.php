<?php

    include 'db.sql.php';
    function updateInfo($nameUpdate,$currentUser,$conn){
        $sql = "UPDATE customers SET customer_name = '$nameUpdate' WHERE customer_name = '$currentUser';";
        if(mysqli_query($conn,$sql)){
            $_SESSION['name'] = $nameUpdate;
            header("Location: ../View/profile.php?update=success");
            exit();
        }
        else{
            header("Location: ../View/profile.php?error=mysqlerror");
            exit();
        }
    }