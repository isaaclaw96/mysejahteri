<?php
    include 'db.sql.php';

    function loginCheck($cusEmail,$cusPhone,$conn){
        $sql = "SELECT * FROM customers WHERE customer_email = '$cusEmail' AND customer_phone = '$cusPhone';";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
            if (mysqli_num_rows($result) == 1){
                $_SESSION['phone'] = $cusPhone;
                $_SESSION['id'] = $row['customer_id'];
                $_SESSION['email'] = $cusEmail;
                $_SESSION['name'] = $row['customer_name'];
                $_SESSION['datecreated'] = $row['date_created'];
                header("Location: ../View/scanner.php");
                exit();
            }
            else{
                header("Location: ../View/index.php?error=invaliduser");
                exit();
            }
    }