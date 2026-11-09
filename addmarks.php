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
        
    <form action="" method="POST">
        <h2>ADD MARKS</h2>
       <select name="studentname" id="">
        <option value="">--choose student--</option>
        <?php
       include_once("connect.php");
       $select=mysqli_query($connection,"select * from students");
       while($row=mysqli_fetch_assoc($select)){
        ?>
        <option value="<?php echo $row['s_id'];?>"><?php echo $row['s_name'];?></option>
        <?php
        }
        ?>
       </select> <br><br>
       <select name="modulename" id="">
    <option value="">--choose modules--</option>
       <?php
       include_once("connect.php");
       $select=mysqli_query($connection,"select * from modules");

       while($row=mysqli_fetch_assoc($select)){
       ?>
       
        <option value="<?php echo $row['m_id'];?>"><?php echo $row['m_name'];?></option>
        <?php
       }
       ?>
       </select><br><br>
      
        <label for="marks">student's marks</label>
        <input type="number" name="marks"><br><br>
        <button name="add_marks">add marks</button>
        </center>
    </form>

    <?php
    include_once("connect.php");
    if(isset($_POST['add_marks'])){
        $studentname=$_POST['studentname'];
        $modulename=$_POST['modulename'];
        $marks=$_POST['marks'];

        $insert=mysqli_query($connection,"insert into marks values('','$studentname','$modulename','$marks')");
        if($insert){
            header("location:viewmarks.php");
        }
    }
    ?>
</body>
</html>
<?php
include_once("footer.php");
?>  