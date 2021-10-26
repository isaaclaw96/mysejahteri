<?php
    session_start();

    if(isset($_POST['checkin-scanner'])){
        require '../Model/db.sql.php';
        include '../Model/checkin.model.php';
        $customerID = $_SESSION['id'];

        insertCheckIn($customerID,$conn);
        // $sql = "INSERT INTO check_in (customer_id) VALUES ('$customerID');";
        //     mysqli_query($conn,$sql);
        //     header("Location: scanner.php?checkin=success");
        //     exit();


    }
    else{
        header("Location: ../View/scanner.php?error=checkinfail");
    }