<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/login&register.css" rel="stylesheet">
</head>
<body>

<?php

include_once 'connect.php';
if(isset($_POST['employee-login'])){
  $id=$_POST['ID'];
  $pass=$_POST['password'];

  $query =  "SELECT pass FROM employees WHERE emp_id = $id ";
  
  $res= mysqli_query($conn,$query);
  $row=mysqli_fetch_assoc($res);

 if( $id=='1190436' && $pass==$row['pass'] )
  {
    $_SESSION['user'] = $id;
    header("Location: http://localhost:3000/manager.php");
   exit;

 } elseif( $id == '120111' && $pass==$row['pass'] )
  {
    $_SESSION['user'] = $id;
   header("Location: http://localhost:3000/accountant.php");
    exit;

  }elseif( $id== '1201211' && $pass==$row['pass'])
    {
      $_SESSION['user'] = $id;
      header("Location: http://localhost:3000/advisor.php");
      exit;

    }else {
       echo "Error: Incorrect ID or password." ;
    }
 
}

if(isset($_POST['customer-login'])){ 

  // Escape user input to prevent SQL injection
  $id = mysqli_real_escape_string($conn, $_POST['ID']);
  $pass = mysqli_real_escape_string($conn, $_POST['password']);

 # Prepare and execute the query to check if the user_id and password exists in the users table

  $stmt = mysqli_prepare($conn, "SELECT user_id, pass FROM users WHERE user_id = ? AND pass = ?");
  mysqli_stmt_bind_param($stmt, "ss", $id, $pass);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  # user_id and password exist in the table
  if (mysqli_num_rows($result) > 0) {
    $_SESSION['user'] = $_POST['ID'];
    header("Location: http://localhost:3000/index.php");
    exit;
  } else {
    echo "user id or password incorrect";
  }
}

mysqli_close($conn);
?>
    <div class="container">
      <h1>Login</h1>
      <form action="" method="post">
        <label for="ID">ID:</label>
        <input type="text" id="ID" name="ID">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <div class="buttons">
          <button type="submit" name="employee-login">Login as Employee</button>
          <button type="submit" name="customer-login">Login as Customer</button>
        </div>
      </form>
      
    </div>
  </body>
</html>