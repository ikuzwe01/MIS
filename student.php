<?php
include_once("head.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENTS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <h2>STUDENTS PORTAL</h2>
    <button><a href="viewmarks.php">view marks</a></button>
    </center>
    <?php
    include_once("connect.php");
    session_start();
    if(!isset($_SESSION['id'])){
        header("location:login.php");
    }
    ?>
</body>
</html>
<?php
include_once("footer.php");
?>