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
        <h2>STUDENTS LIST</h2>
        <tr>
            <th>NO</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
        </tr>
        <?php
        include_once("connect.php");
        
        $select=mysqli_query($connection,"select * from students");
        while($row=mysqli_fetch_assoc($select)){
            echo "<tr>";
            echo "<td>{$row['s_id']}</td>";
            echo "<td>{$row['s_name']}</td>";
            echo "<td>{$row['s_email']}</td>";
            echo "<td>{$row['s_password']}</td>";
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