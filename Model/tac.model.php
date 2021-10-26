<?php
    include 'db.sql.php';
    function storeTac($tacNum,$conn){
        $sql = "INSERT INTO tac (tac_tac) VALUES ('$tacNum');";
        mysqli_query($conn,$sql);
    }