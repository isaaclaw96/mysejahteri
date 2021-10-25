<?php
    session_start();

    if(isset($_POST['login-submit'])){
        require 'db.sql.php';

        //establish variables from index page

        $cusEmail = mysqli_real_escape_string($conn,$_POST['email']);
        $cusPhone = mysqli_real_escape_string($conn,$_POST['phone']);

        //first check for empty fields

        if (empty($cusEmail) || empty($cusPhone)){
            header("Location: index.php?error=emptyfields");
            exit();
        }
        else{
            $sql = "SELECT * FROM customers WHERE customer_email = '$cusEmail' AND customer_phone = '$cusPhone';";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
            if (mysqli_num_rows($result) == 1){
                $_SESSION['phone'] = $cusPhone;
                $_SESSION['id'] = $row['customer_id'];
                $_SESSION['email'] = $cusEmail;
                $_SESSION['name'] = $row['customer_name'];
                $_SESSION['datecreated'] = $row['date_created'];
                header("Location: scanner.php");
                exit();
            }
            else{
                header("Location: index.php?error=invaliduser");
                exit();
            }
        }
    }
    else{
        header("Location: index.php");
        exit();
    }