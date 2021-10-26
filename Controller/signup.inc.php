<?php

if(isset($_POST['register-submit'])){
    require '../Model/db.sql.php';
    include '../Model/signup.model.php';

    //getting variables from signup page

    $cusEmail = $_POST['email'];
    $cusName = $_POST['name'];
    $cusPhone = $_POST['phone'];

    //first check if fields are empty

    if (empty($cusEmail) || empty($cusName) || empty($cusPhone)){
        header("Location: ../View/signup.php?error=emptyfields&email=".$email."&name=".$name);
        exit();
    }
    elseif(!filter_var($cusEmail, FILTER_VALIDATE_EMAIL)){
        header("Location: ../View/signup.php?error=invalidemail&name=".$cusName);
        exit();
    }
    elseif(!preg_match("/^[0-9]*$/",$cusPhone)){
        header("Location: ../View/signup.php?error=invalidphonenum");
        exit();
    }
    else{
        //check if database already has existing email or phone
        // $sql_check = "SELECT * FROM customers WHERE customer_email = '$cusEmail' OR customer_phone = '$cusPhone'LIMIT 1;";
        // $result = mysqli_query($conn,$sql_check);
        // $row = mysqli_fetch_assoc($result);

        // //if customer email already exist
        // if ($row) { // if user exists
        //     if ($row['customer_email'] === $cusEmail) {
        //         header("Location: signup.php?error=userexists");
        //         exit();
        //     }
        
        //     if ($row['customer_phone'] == $cusPhone) {
        //         header("Location: signup.php?error=phoneexists");
        //         exit();
        //     }
        // }
        // else{
        //     // if email and phone dont exist in db, insert into db
        //     $sql = "INSERT INTO customers (customer_email,customer_name,customer_phone) VALUES ('$cusEmail','$cusName','$cusPhone');";
        //     mysqli_query($conn,$sql);

        //     header("Location: tac.php?signup=success");
        //     exit();
        //     }
        verifyCustomer($cusEmail,$cusPhone,$cusName,$conn);
    }
    
}
else{
    header("Location: ../View/index.php");
    exit();
}