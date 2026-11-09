
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
    
</header>   
    <center>
        
        <form action="" method="POST">
             <h2>LOGIN ACCOUNT</h2>
            <label for="email">email</label>
            <input type="email" name="email" required><br><br>
            <label for="password">password</label>
            <input type="password" name="password" required><br><br>
            <button type="submit" name="login">login</button>
            
        </form>
    </center>
</body>
</html>
<?php
include_once("connect.php");
session_start();
if(isset($_POST['login'])){
    
    $email=$_POST['email'];
    $password=$_POST['password'];

    $select=mysqli_query($connection,"select * from users where u_email='$email' and u_password='$password'");
    if(mysqli_num_rows($select)>0){
        echo "user found";
        $user=mysqli_fetch_assoc($select);
        $_SESSION['id']=$user['u_id'];
        $role=$user['u_role'];
        if($role=="HOD"){
            header ("location:hod.php");
        }
        else if($role=="HR"){
            header ("location:hr.php");
        }
        else if($role=="LECTURE"){
            header("location:lecture.php");
        }
        else if($role=="STUDENT"){
            header ("location:student.php");
        }
        else if($role=="REGISTER"){
            header ("location:register.php");
        }
        
    }
}
?>
<?php
include_once("footer.php");
?>
<?php
include_once("footer.php");
?>