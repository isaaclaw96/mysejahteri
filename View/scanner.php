<?php
    session_start();
    include '../Model/db.sql.php';
?>

<html>
    <body>

        <?php 
            if(isset($_GET['checkin']) == 'success'){
                echo "Check in successful!";
            }
        ?>
        <form action='../Controller/checkin.inc.php' method='post'>
            <input type="submit" name='checkin-scanner' value='Check In'>
        </form>
    </body>
</html>

<?php
    include 'landingpage.php';
?>
