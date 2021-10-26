<?php
    include '../Model/db.sql.php';
    include '../Model/info.model.php';
    
    echo "<h1> USER INFORMATION </h1>";

    echo "Name: ".$_SESSION['name'];
    echo "<br>";
    $currentUser = $_SESSION['email'];
    $currentID = $_SESSION['id'];
    
    echo "<br>";
    echo "Email: ".$_SESSION['email'];
    echo "<br><br>";
    echo "Date Created: ".$_SESSION['datecreated'];
    echo "<br><br>";
    checkCheckInTime($currentID,$conn);
    echo "Check-in Time:".$_SESSION['checkinCounter'];
    
    
    include 'landingpage.php';