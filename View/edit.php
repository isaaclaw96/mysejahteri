<?php 

    session_start();
    include '../Model/db.sql.php';

?>
<html>
    <body>
        <form action="../Controller/update.php" method='post'>
            <input type='text' name='newname'>
            <input type='submit' name='submit-name' value='Submit'>
            <br>
            <label>Please Fill In Your New Name!</label>
        </form>

        <a href="profile.php">Go Back</a>
    </body>
</html>