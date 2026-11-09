<?php
include_once("head.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RP MIS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <H2>HR PORTAL</H2>
    <button><a href="logout.php">logout</a></button>
    <form action=""  method ="POST">
        <button ><a href="addlecture.php">add lectures</a></button>
        <button ><a href="viewlist.php">view list</a></button>
    </form>
</body>
</html>
<?php
include_once("connect.php");
session_start();
if(!isset($_SESSION['id'])){
    header("location:login.php");
}
?>
<?php
include_once("footer.php");
?>