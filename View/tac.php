<?php
    session_start();
    include 'db.sql.php';
    // include 'tac.inc.php';

    $tacNum = rand(100000,999999);

    echo $tacNum;

    $sql = "INSERT INTO tac (tac_tac) VALUES ('$tacNum')";
    mysqli_query($conn,$sql);
    // randNum();

?>

<html>
    <body>
        <form action="../Controller/verifytac.php" method="post">
            <input type="text" name="tac" placeholder="TAC Number">
            <input type='submit' name='tac-submit' value='Submit'>
        </form>
    </body>
</html>

