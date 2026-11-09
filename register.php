<?php
include_once("head.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <h2>REGISTER PORTAL</h2>

    </center>
    <form action=""  method ="POST">
        <button ><a href="addstudents.php">add students</a></button>
        <button ><a href="viewstudent.php">view </a></button>
    </form>

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