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
    
    <?php
    include_once("connect.php");
    if(!isset($_SESSION['id'])){
        header("location:login.php");
    }
    ?>
    <form action="" method="POST">
        <CEnter>
    <h2>LECTURER PORTAL</h2>
    </CEnter>
        <button><a href="addmarks.php">add marks</a></button>

    </form>
</body>
</html>
<?php
include_once("footer.php");
?>