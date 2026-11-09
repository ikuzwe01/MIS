<?php
include_once("head.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
      <center>
        <h2>ADD NEW STUDENTS</h2>
  <form action="" method="POST">
    <label for="name">name</label>
    <input type="text" name="name"> <br><br>
    <label for="email">email</label>
    <input type="email" name="email"><br><br>
    <label for="password">password</label>
    <input type="password" name="password"><br><br>
    <button type="submit" name ="add_student">add student</button>
    </center>
</body>
</html>
<?php
include_once("connect.php");
session_start();
if(!isset($_SESSION['id'])){
  header("location:login.php");
}
if(isset($_POST['add_student'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $role="STUDENT";

  $insert1=mysqli_query($connection,"insert into students values('','$name','$email','$password')");
  $insert2=mysqli_query($connection,"insert into users values('','$name','$email','$password','$role')");
  

  if($insert1){
    header("location:viewstudent.php");
  }

}
?>
<?php
include_once("footer.php");
?>