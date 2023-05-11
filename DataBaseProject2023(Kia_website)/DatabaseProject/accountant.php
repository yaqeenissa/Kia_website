<?php
// include("conn.php");
// $db = new Database();
// $db = "S";



?>
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
  <header>
    <h1>Accountant Dashboard</h1>
  </header>
  <main>
    <div class="goback">
      <a href="index.php">Go to main page</a>
    </div>
    <section>
      <h3>View sold cars</h3>
      <table>
        <tr>
          <th>Date</th>
          <th>Customer ID</th>
          <th>Customer Name</th>
          <th>Car ID</th>
          <th>Car Name</th>
          <th>Car Price</th>
        </tr>
        <tr>
          <?php
          include_once 'connect.php';
          $sql = "SELECT * from users_buy_car";
          $result = mysqli_query($conn, $sql);

          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";

            echo "<td>" . $row['buy_date'] . "</td>";
            echo "<td>" . $row['user_id'] . "</td>";
            echo "<td>" . $row['user_name'] . "</td>";
            echo "<td>" . $row['car_id'] . "</td>";
            echo "<td>" . $row['car_name'] . "</td>";
            echo "<td>" . $row['car_price'] . '$' . "</td>";
            echo "</tr>";
          }

          $sql = "SELECT COUNT(car_price) as count_price, MIN(car_price) as min_price, MAX(car_price) as max_price, AVG(car_price) as average_price from users_buy_car";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          $count_price = $row['count_price'];
          $min_price = $row['min_price'];
          $max_price = $row['max_price'];
          $average_price = $row['average_price'];

          echo "<tr class='accountant-calculations'>";
          echo "<td colspan='5'>Minimum Price</td>";
          echo "<td>" . $min_price . "$</td>";
          echo "</tr>";

          echo "<tr class='accountant-calculations'>";
          echo "<td colspan='5'>Maximum Price</td>";
          echo "<td>" . $max_price . "$</td>";
          echo "</tr>";

          echo "<tr class='accountant-calculations'>";
          echo "<td colspan='5'>Average Price</td>";
          echo "<td>" . $average_price . "$</td>";
          echo "</tr>";

          echo "<tr class='accountant-calculations'>";
          echo "<td colspan='5'>Number of Cars Sold</td>";
          echo "<td>" . $count_price . "</td>";
          echo "</tr>";

          ?>

      </table>
    </section>
    <section>
      <h3>Control Employee Salaries</h3>
      <table>
        <tr>
          <th>Employee Name </th>
          <th>Employee ID </th>
          <th>Employee Pass </th>
          <th>Employee Phone </th>
          <th>Employee Email</th>
          <th>Employee Salary </th>
        </tr>

        <?php
        include_once 'connect.php';
        $sql = "SELECT * from employees";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";

          echo "<td>" . $row['emp_name'] . "</td>";
          echo "<td>" . $row['emp_id'] . "</td>";
          echo "<td>" . $row['pass'] . "</td>";
          echo "<td>" . $row['phone'] . "</td>";
          echo "<td>" . $row['email'] . "</td>";
          echo "<td>" . $row['salary'] . '$' . "</td>";
          echo "</tr>";
        }

        $sql = "SELECT COUNT(emp_id) as count_empid, MIN(salary) as min_salary, MAX(salary) as max_salary, 
          AVG(salary) as average_salary from employees";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $count_emp = $row['count_empid'];
        $min_salary = $row['min_salary'];
        $max_salary = $row['max_salary'];
        $average_salary = $row['average_salary'];

        echo "<tr class='accountant-calculations'>";
        echo "<td colspan='5'>Minimum Salary</td>";
        echo "<td>" . $min_salary . "$</td>";
        echo "</tr>";

        echo "<tr class='accountant-calculations'>";
        echo "<td colspan='5'>Maximum Salary </td>";
        echo "<td>" . $max_salary . "$</td>";
        echo "</tr>";

        echo "<tr class='accountant-calculations'>";
        echo "<td colspan='5'>Average Salary </td>";
        echo "<td>" . $average_salary . "$</td>";
        echo "</tr>";

        echo "<tr class='accountant-calculations'>";
        echo "<td colspan='5'>Number Employees</td>";
        echo "<td>" . $count_emp . "</td>";
        echo "</tr>";

        ?>



      </table>
    </section>
  </main>

</body>

</html>