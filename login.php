<?php
 include 'config.php'; 
 session_start();


 if(isset($_POST['submit'])){
  
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    
    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND
    password = '$password'") or die ('query failed'); 
    if(mysqli_num_rows($select) > 0){
        $row = mysqli_fetch_assoc($select);
        $_SESSION['user_id'] = $row['id'];
        header('location:home.php');
    }
      else{
        $message[] = 'Incorrect email or password!!';
     }

    }

     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <link rel="stylesheet" href="css/style.css">
    <div class="form-control">
        
        
    <form action="" method="post" enctype="multipart/form-data">
         <h2>Log in Form</h2>
         <?php
          if(isset($message)){
            foreach($message as $message){
                echo '<div class="message">'.$message.'</div>' ;
            }
          }
         ?>
        
        <input type="email" name="email" placeholder="Enter your mail" required class="box"> 
        <input type="password" name="password" placeholder="Enter password" required class="box"> 
        
         <input type="submit" name="submit" value="Log in" class=" btn" >
         <p class="box">Don't have any account? <a href="register.php ">Register Now!</a></p>
         </form>
        </div>

</body>
</html>