<?php
    session_start();
    include 'db.sql.php';
    echo "<h1> USER INFORMATION </h1>";

    echo "Name: ".$_SESSION['name'];
    echo "<br>";
    $currentUser = $_SESSION['email'];
    $sql = "SELECT * FROM customers WHERE customer_email = '$currentUser';";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['datecreated'] = $row['date_created'];
            $_SESSION['userid'] = $row['customer_id'];    
        }
    echo "<br>";
    echo "Email: ".$_SESSION['email'];
    echo "<br><br>";
    echo "Date Created: ".$_SESSION['datecreated'];
    echo "<br><br>";
    
    include 'landingpage.php';