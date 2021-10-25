<?php

    $dbServer = '159.223.74.110';
    $dbUsername = 'isaac';
    $dbPassword = 'IsaacisInvoke96';
    $dbName = 'mysejahteri';

    $conn = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);

    if(!$conn){
        die("Connection Failed".mysqli_connect_error());
    }