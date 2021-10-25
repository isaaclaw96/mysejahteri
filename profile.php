<?php

    session_start();
    include 'db.sql.php';

    echo "<h1> PROFILE </h1>";

    if(isset($_GET['error'])){
        if($_GET['error'] == "mysqlerror"){
            echo "<p> Update Not Successful</p>";
        }
    }
    elseif($_GET['update'] == 'success'){
        echo "<p> Update Successful!</p>";
    }
    echo "Name: ".$_SESSION['name'];    
    
    echo "<form action='edit.php' method='post'><input type='submit' name='edit' value='Edit'></form>";

    echo "Date Joined: ".$_SESSION['datecreated'];

    echo "<br><br>";

    include 'landingpage.php';  


    
