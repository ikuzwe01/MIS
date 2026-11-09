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
    <center>
    <table border=1 cellspacing=0>
        <h2>LECTURES LIST</h2>
        <tr>
            <th>no</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
        </tr>
        <?php
        include_once("connect.php");
        session_start();
        $select=mysqli_query($connection," select * from lectures");
        while($row=mysqli_fetch_assoc($select)){
        
        echo "<tr>";
        echo "<td>{$row['l_id']}</td>";
        echo "<td>{$row['l_name']}</td>";
        echo "<td>{$row['l_email']}</td>";
        echo "<td>{$row['l_password']}</td>";
        echo "</tr>";
       
        }
        ?>
    </table>
    </center>
</body>
</html>
<?php
include_once("footer.php");
?>