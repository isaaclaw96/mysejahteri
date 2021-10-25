<?php

    $dbServer = 'localhost';
    $dbUsername = 'isaac';
    $dbPassword = 'isaac96';
    $dbName = 'mysejahteri';

    $conn = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);

    if(!$conn){
        die("Connection Failed".mysqli_connect_error());
    }