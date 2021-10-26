<?php
    include '../Model/db.sql.php';
    include '../Model/tac.model.php';
        
    
    function randNum(){
        $tacNum = rand(100000,999999);

        echo $tacNum;

        // $sql = "INSERT INTO tac (tac_tac) VALUES ('$tacNum')";
        // mysqli_query($conn,$sql);
        storeTac($tacNum,$conn);
    }
    