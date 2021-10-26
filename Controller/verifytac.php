<?php
    session_start();
    include '../Model/db.sql.php';
    include '../Model/verifytac.model.php';

    if(isset($_POST['tac-submit'])){
        $verifyNum = $_POST['tac'];
        if(empty($verifyNum)){
            header("Location: ../View/tac.php?error=emptyfields");
            exit();
        }
        else{
            // $sql = "SELECT * FROM tac WHERE tac_tac = '$verifyNum';";
            // $result = mysqli_query($conn,$sql);
            // $row = mysqli_fetch_assoc($result);

            // if($row['tac_tac'] === $verifyNum){
            //     header("Location: index.php?tac=verified");
            //     exit();
            // }
            // else{
            //     header("Location: tac.php?error=wrongtac");
            //     exit();
            // }
            verifyTAC($verifyNum,$conn);
        }
    }
    else{
        header("Location: ../View/signup.php");
        exit();
    }