<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="assets/css/accountant&manager.css" rel="stylesheet">
</head>

<body>

  <?php



  include_once 'connect.php';
  session_start();
  if (isset($_POST['addE'])) {

    $nameE = ($_POST['employee_name']);
    $ide = ($_POST['employee_id']);
    $passw = ($_POST['employee_pass']);
    $email = ($_POST['employee_email']);
    $phone = ($_POST['employee_phone']);
    $salary = ($_POST['employee_salary']);
    mysqli_select_db($conn, 'kia_website');


    $sql8 = "INsert into employees (emp_id, emp_name, pass, salary, phone, email, url) 
                values ('$ide', '$nameE', '$passw', '$salary', '$phone', '$email', 'www.kia.com')";


    if (mysqli_query($conn, $sql8)) {
      echo "New record created successfully!";
    } else {
      echo "Error: " . mysqli_error($conn);
    }
  }

  //////////////////////// search employee ///////////////////////////
  if (isset($_POST['searchE'])) {
    $ide = $_POST['employee_id'];

    $sql7 = "SELECT emp_id, emp_name, pass, salary, phone, email, url FROM employees WHERE emp_id = $ide";

    $result = mysqli_query($conn, $sql7);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $nameE = "" . $row["emp_name"];
      $ide = "" . $row["emp_id"];
      $passw = "" . $row["pass"];
      $salary = "" . $row["salary"];
      $phone = "" . $row["phone"];
      $email = "" . $row["email"];
    } else {
      echo "No data found for this ID.";
    }
  }
  ////////////////////////////   delete employee  error  /////////////////////////////////

  if (isset($_POST['deleteE'])) {
    $ide = ($_POST['employee_id']);
    mysqli_select_db($conn, 'kia_website');

    $sql6 = "DELETE FROM employees WHERE emp_id=$ide";

    if (mysqli_query($conn, $sql6)) {
      echo "employee deleted successfully.";
    } else {
      echo "Error: " . mysqli_error($conn);
    }
  }



  /////////////////////update employee////////////////////////////////
  if (isset($_POST['updateE'])) {

    $nameE = ($_POST['employee_name']);
    $ide = ($_POST['employee_id']);
    $passw = ($_POST['employee_pass']);
    $email = ($_POST['employee_email']);
    $phone = ($_POST['employee_phone']);
    $salary = ($_POST['employee_salary']);
    mysqli_select_db($conn, 'kia_website');



    $sql5 = "UPDATE employees SET emp_name='$nameE', pass='$passw', salary='$salary',
   phone='$phone', email='$email' WHERE emp_id=$ide";

    if (mysqli_query($conn, $sql5)) {
      echo "Record updated successfully !";
    } else {
      echo "Error updating record : " . mysqli_error($conn);
    }
  }

  //
  ///
  ////
  /////

  #add car
  if (isset($_POST['addC'])) {
    $name = $_POST['car_name'];
    $id = $_POST['car_ID'];
    $type = $_POST['car_type'];
    $price = $_POST['car_price'];
    $model = $_POST['car_model'];
    $_SESSION['cars'] = $id;
    mysqli_select_db($conn, 'kia_website');
    #www.kia.com
    $sql4 = " INSERT INTO cars(car_id , car_name , car_type , car_price , car_model ,url ,accountant_id)
                VALUES ('$id', '$name' , '$type' , '$price' , '$model' , 'www.kia.com' , '120111'); ";

    if (mysqli_query($conn, $sql4)) {
      echo "New record  created successfully !";
    } else {
      echo " Error!!!";
    }
  }

  //***************************** SEARCH car**********************************88 */
  #search for a car by its id 
  if (isset($_POST['searchC'])) {
    $id = $_POST['car_ID'];

    $sql3 = "SELECT car_id , car_name , car_type , car_price , car_model  FROM cars WHERE car_id = '$id'";

    $result = mysqli_query($conn, $sql3);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $name = "" . $row["car_name"];
      $id = "" . $row["car_id"];
      $type = "" . $row["car_type"];
      $price = "" . $row["car_price"];
      $model = "" . $row["car_model"];
    } else {
      echo "No data found for this ID.";
    }
  }

  //***************************  UPDATE car   **************************************** */

  if (isset($_POST['update'])) {

    $id = $_POST['car_ID'];
    $name = $_POST['car_name'];
    $type = $_POST['car_type'];
    $price = $_POST['car_price'];
    $model = $_POST['car_model'];

    mysqli_select_db($conn, 'kia_website');

    $sql2 = "UPDATE cars SET car_name='$name', car_type='$type', car_price='$price',
                 car_model='$model' WHERE car_ID='$id'";

    if (mysqli_query($conn, $sql2)) {
      echo "Record updated successfully !";
    } else {
      echo "Error updating record : " . mysqli_error($conn);
    }
  }
  /////// /*********************************** DELETE car *************************** */

  if (isset($_POST['deleteC'])) {
    $id = $_POST['car_ID'];
    $sql1 = "DELETE FROM cars WHERE car_id='$id'";

    if (mysqli_query($conn, $sql1)) {
      echo "Car deleted successfully.";
    } else {
      echo "Error deleting car: " . mysqli_error($conn);
    }
  }

  ?>



  <header>
    <h1>Manager Dashboard</h1>
  </header>
  <main>
    <div class="goback">
      <a href="index.php">Go to main page</a>
    </div>
    <section>
      <h3>Add Employee</h3>
      <form action="manager.php" method="post">
        <label for="employee_name">Employee Name:</label>
        <input type="text" id="employee_name" name="employee_name" value=" <?php echo (isset($nameE)) ?  $nameE : '';  ?>">
        <br>
        <label for="employee_id">Employee ID:</label>
        <input type="text" id="employee_id" name="employee_id" value="<?php echo (isset($ide)) ?  $ide : ''; ?> ">
        <br>
        <label for="employee_pass">Employee password:</label>
        <input type="text" id="employee_pass" name="employee_pass" value="<?php echo (isset($passw)) ? $passw : ''; ?> ">
        <br>
        <label for="employee_email">Employee E-mail:</label>
        <input type="text" id="employee_email" name="employee_email" value="<?php echo (isset($email)) ? $email : ''; ?> ">
        <br>
        <label for="employee_phone">Employee Phone:</label>
        <input type="text" id="employee_phone" name="employee_phone" value="<?php echo (isset($phone)) ? $phone : ''; ?> ">
        <br>
        <label for="employee_salary">Employee Salary:</label>
        <input type="text" id="employee_salary" name="employee_salary" value="<?php echo (isset($salary)) ? $salary : ''; ?> ">
        <br><br>
        <input type="submit" name="addE" value="Add Employee">
        <br>
        <input type="submit" name="searchE" value="Search ">
        <br>
        <!--<input type="submit" name="deleteE " value="Delete">-->
      
        <input type="submit" name="updateE" value="Update">
        <br>


      </form>
    </section>
    <section>
      <h3>Add Car</h3>
      <form action="manager.php" method="post">
        <label for="car_name">Car Name:</label>
        <input type="text" id="car_name" name="car_name" value=" <?php echo (isset($name)) ? $name : ''; ?>">
        <br>
        <label for="car_ID">Car ID:</label>
        <input type="text" id="car_ID" name="car_ID" value="<?php echo (isset($id)) ? $id : ''; ?>">
        <br>
        <label for="car_type">Car Type:</label>
        <input type="text" id="car_type" name="car_type" value="<?php echo (isset($type)) ? $type : ''; ?>">
        <br>
        <label for="car_model">Car Model:</label>
        <input type="text" id="car_model" name="car_model" value=" <?php echo (isset($model)) ? $model : ''; ?> ">
        <br>
        <label for="car_price">Car Price:</label>
        <input type="text" id="car_price" name="car_price" value="<?php echo (isset($price)) ? $price : ''; ?> ">
        <br><br>
        <input type="submit" name="addC" value="Add Car">
        <br>
        <input type="submit" name="searchC" value="Search ">
        <br>
        <!--<input type="submit" name="deleteC " value="Delete">-->
        <input type="submit" name="update" value="Update">

      </form>
    </section>
    <section>
      <h3>View Employee Details</h3>
      <table>
        <tr>
          <th>Employee Name</th>
          <th>Employee ID</th>
          <th>Employee Password</th>
          <th>Employee E-mail</th>
          <th>Employee Phone</th>
          <th>Emplpyee Salary</th>
        </tr>

        <?php

        include_once 'connect.php';
        # if(isset($_POST['tableE'])){ 
        $sqlselect = "SELECT * FROM employees";
        $result = mysqli_query($conn, $sqlselect);


        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";

          echo "<td>" . $row['emp_name'] . "</td>";
          echo "<td>" . $row['emp_id'] . "</td>";
          echo "<td>" . $row['pass'] . "</td>";
          echo "<td>" . $row['email'] . "</td>";
          echo "<td>" . $row['phone'] . "</td>";
          echo "<td>" . $row['salary'] . "</td>";
          echo "</tr>";
        }
        #  }

        ?>


      </table>
    </section>
    <section>
      <h3>View Car Details</h3>
      <table>
        <tr>
          <th>Car Name</th>
          <th>Car ID</th>
          <th>Car Type</th>
          <th>Car Model</th>
          <th>Car Price</th>
        </tr>
        <?php
        include_once 'connect.php';
        $sql = "SELECT * FROM cars";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";

          echo "<td>" . $row['car_name'] . "</td>";
          echo "<td>" . $row['car_id'] . "</td>";
          echo "<td>" . $row['car_type'] . "</td>";
          echo "<td>" . $row['car_model'] . "</td>";
          echo "<td>" . $row['car_price'] . '$' . "</td>";
          echo "</tr>";
        }


        ?>