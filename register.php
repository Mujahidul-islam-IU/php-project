<?php
 include 'config.php'; 

 if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
    $roll_no = mysqli_real_escape_string($conn, $_POST['roll']);
    $sess = mysqli_real_escape_string($conn, $_POST['session']);
    $dept = mysqli_real_escape_string($conn, $_POST['dept']);
    $district = mysqli_real_escape_string($conn, $_POST['district']);
    $image =  $_FILES['image'] ['name'];
    $image_size =  $_FILES['image'] ['name'];
    $image_tmp_name =  $_FILES['image'] ['tmp_name'];
    $image_folder =  'images/'.$image;
    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND
    password = '$password'") or die ('query failed'); 
    if(mysqli_num_rows($select) > 0){
        $message[] = 'user already exist';
     } else{
        if($password != $cpassword){
            $message[] = 'confirm pass not matched';
   
            } elseif ($image_size > 2000000000) {
                $message[] = 'Image size is too large';
            }
            
            else {
            $insert = mysqli_query($conn, "INSERT INTO `user_form`(name,email,password,roll,dept,district,image)
            VALUES('$name','$email','$password','$roll_no','$dept','$district','$image')") or die('query failed');
            if($insert){
                move_uploaded_file($image_tmp_name,$image_folder);
                 $message[]='Registration Successfull!!!'; 
                header('location:login.php');
             }
            
              else{
                $message[]='Registration Failed!!!'; 
            }    
    }

    }

     
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <link rel="stylesheet" href="css/style.css">
    <div class="form-control">
        
        
    <form action="" method="post" enctype="multipart/form-data">
         <h2>Registration Form</h2>
         <?php
          if(isset($message)){
            foreach($message as $message){
                echo '<div class="message">'.$message.'</div>' ;
            }
          }
         ?>
        <input type="text" name="name" placeholder="Enter user name" required class="box">  
        <input type="email" name="email" placeholder="Enter your mail" required class="box"> 
        <input type="password" name="password" placeholder="Enter password" required class="box"> 
         <input type="password" name="cpassword" placeholder=" confirm password" required class="box"> 
         <input type="number" name="roll" placeholder=" Enter roll no" required class="box"> 
         <input type="text" name="session" placeholder=" Enter session" required class="box"> 
         <input type="text" name="dept" placeholder=" Enter Department" required class="box">  
         <input type="text" name="district" placeholder=" Enter District" required class="box">  
         <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
         <input type="submit" name="submit" value="register now" class=" btn" >
         <p class="box">Already have an account? <a href="login.php ">Login Now</a></p>
         </form>
        </div>

</body>
</html>