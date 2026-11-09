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
        <h2>LIST OF MODULES</h2>
    <form action="" method="POST">
        <label for="name">module name</label>
        <input type="text" name="name"><br><br>
        <label for="code"> module code</label>
        <input type="text" name="code"><br><br>
        <label for="credits">module credits</label>
        <input type="number" name="credits"><br><br>
        <label for="name">choose lecture</label>
        <select name="mlecture" id="">
            <option value="">---select lecture----</option>
            
            <?php
            include_once("connect.php");
            $select=mysqli_query($connection,"select * from lectures");
            while($row=mysqli_fetch_assoc($select)){
                ?>
                <option value="<?php echo $row['l_id'];?>"><?php echo $row['l_name'];?></option>
<?php
            }
            ?>
        </select><br><br>
        <button type="submit" name="add_module">add module</button>

    </form>
    </center>
 
</body>
</html>
   <?php
    include_once("connect.php");
    if(isset($_POST['add_module'])){
        $name=$_POST['name'];
        $code=$_POST['code'];
        $credits=$_POST['credits'];
        $mlecture=$_POST['mlecture'];


        $insert=mysqli_query($connection,"insert into modules values('','$name','$code','$credits','$mlecture')");
        
    }
    ?>
    <?php
include_once("footer.php");
?>