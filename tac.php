<?php
    session_start();
    include 'db.sql.php';

    $tacNum = rand(100000,999999);

    echo $tacNum;

    $sql = "INSERT INTO tac (tac_tac) VALUES ('$tacNum')";
    mysqli_query($conn,$sql);

?>

<html>
    <body>
        <form action="verifytac.php" method="post">
            <input type="text" name="tac" value="TAC Number">
            <input type='submit' name='tac-submit' value='Submit'>
        </form>
    </body>
</html>

