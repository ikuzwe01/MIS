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
        <h2>STUDENTS MARKS</h2>
    <table border=1 cellspacing=0>
        <tr>
            <th>NO</th>
            <th>STUDENTS NAME</th>
            <th>MODULE NAME</th>
            <th>MARKS</th>
        </tr>
        <?php
        include_once("connect.php");
        
    $result=mysqli_query($connection,"select students.s_id,students.s_name,modules.m_id,modules.m_name,marks.mark from students   join marks on students.s_id=marks.s_id  join modules on modules.m_id=marks.m_id where students.s_id=1" );
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            
            echo "<td>{$row['s_id']}</td>";
            echo "<td>{$row['s_name']}</td>";
            echo "<td>{$row['m_name']}</td>";
            echo "<td>{$row['mark']}</td>";
            echo "<tr>";
        }
        ?>

    </table>
    </center>
</body>
</html>
<?php
include_once("footer.php");
?>