<?php

    session_start();
    include 'db.sql.php';

    function insertCustomer($cusEmail,$cusName,$cusPhone,$conn){
        $sql = "INSERT INTO customers (customer_email,customer_name,customer_phone) VALUES ('$cusEmail','$cusName','$cusPhone');";
            mysqli_query($conn,$sql);
            header("Location: ../View/tac.php?signup=success");
            exit();
    }

    function verifyCustomer($cusEmail,$cusPhone,$cusName,$conn){
        $sql_check = "SELECT * FROM customers WHERE customer_email = '$cusEmail' OR customer_phone = '$cusPhone'LIMIT 1;";
        $result = mysqli_query($conn,$sql_check);
        $row = mysqli_fetch_assoc($result);

        //if customer email already exist
        if ($row) { // if user exists
            if ($row['customer_email'] === $cusEmail) {
                header("Location: ../View/signup.php?error=userexists");
                exit();
            }
        
            if ($row['customer_phone'] == $cusPhone) {
                header("Location: ../View/signup.php?error=phoneexists");
                exit();
            }
        }
        else{
            // if email and phone dont exist in db, insert into db
            insertCustomer($cusEmail,$cusName,$cusPhone,$conn);
        }
    }
