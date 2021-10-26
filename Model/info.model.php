<?php
    session_start();
    include 'db.sql.php';
    

    function checkTime($currentUser,$conn){
        $sql = "SELECT * FROM customers WHERE customer_email = '$currentUser';";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['datecreated'] = $row['date_created'];
            $_SESSION['userid'] = $row['customer_id'];    
        }
    }
    function checkCheckInTime($currentID,$conn){
        $sql = "SELECT * FROM check_in WHERE customer_id = '$currentID';";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_num_rows($result);

        if ($row>0){
            $_SESSION['checkinCounter'] = $row;
        }
        
    }
