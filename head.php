<?php
include_once("connect.php");
session_start();
$id=$_SESSION['id'];
$select=mysqli_query($connection,"select * from users where u_id=$id");
$row=(mysqli_fetch_assoc($select));

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
<header>
    <div class="logo">
        <img src="image/rplogo copy.png" alt="logo">
        <h2>RP KARONGI | MIS</h2>
    </div>
    <div class="user">
        <img src="image/user.png" alt="user">
        <p><?php echo $row['u_name'];?></p>
        <a href="logout.php">logout</a>
    </div>
</header>   
</body>
</html>
