<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/login.css" rel="stylesheet">
</head>
<body>

  <?php
  include_once 'connect.php';
  if(isset($_POST['signup'])){
    
  $username=$_POST['username'];
  $user_id=$_POST['user_id'];
  $email=$_POST['user_email'];
  $password=$_POST['password'];
  $phoneN=$_POST['phoneN'];

  mysqli_select_db($conn,'kia_website');
#www.kia.com
      $sql ="Insert into users (user_id,user_name,pass,email,phone,url,advisor_id)
      Values ('$user_id','$username','$password','$email','$phoneN','www.kia.com','1201211') ";
      
      if (mysqli_query($conn,$sql)){
          echo  "<div class='masg'>New record  created successfully ! </div> ";
      }else{
          echo " Error!!!"  ;
      }
    mysqli_close($conn);
    }
  
  ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="assets/css/login&register.css" rel="stylesheet">
</head>
<body>
   
    <div class="container">
      <h1>Sign Up</h1>
      <form action="" method="post">
        <label for="username">User Name:</label>
        <input type="text" id="username" placeholder="e.g zayed" name="username">
        <label for="user_id">User ID:</label>
        <input type="text" id="user_id" placeholder="e.x 1000" name="user_id">
        <label for="user_email">User E-mail:</label>
        <input type="text" id="user_email" placeholder="e.g info@gmail.com" name="user_email">
        <label for="phoneN">Phone Number</label>
        <input type="text" id="phoneN" placeholder="e.g +972 56-9109-469" name="phoneN">
        <label for="password">Password:</label>
        <input type="password" id="password" placeholder="enter your password here" name="password">
        <div class="buttons">
        <button type="submit" name="signup">Sign Up</button>
        <div class="goback">
        <a href="index.php">Go to main page</a>
        </div>
        
        </div>
      </form>
    </div>
  </body>
</html>

</body>
</html>