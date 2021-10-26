<?php
    include 'db.sql.php';

    function insertCheckIn($customerID,$conn){
        $sql = "INSERT INTO check_in (customer_id) VALUES ('$customerID');";
            mysqli_query($conn,$sql);
            header("Location: ../View/scanner.php?checkin=success");
            exit();
    }