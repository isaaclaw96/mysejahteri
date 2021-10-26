<?php

        include 'db.sql.php';

        function verifyTAC($verifyNum,$conn){
            $sql = "SELECT * FROM tac WHERE tac_tac = '$verifyNum';";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);

            if($row['tac_tac'] === $verifyNum){
                header("Location: ../View/index.php?tac=verified");
                exit();
            }
            else{
                header("Location: ../View/tac.php?error=wrongtac");
                exit();
            }
        }
        