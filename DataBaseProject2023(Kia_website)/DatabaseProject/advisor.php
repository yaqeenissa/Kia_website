<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Information</title>
  <link href="assets/css/accountant&manager.css" rel="stylesheet">
</head>

<body>
  <header>
    <h1>Advisor Dashboard</h1>
  </header>
  <main>
    <div class="goback">
      <a href="index.php">Go to main page</a>
    </div>
    <section>
      <h3>View Customer Details</h3>
      <table>
        <tr>
          <th>Customer Name</th>
          <th>Customer ID</th>
          <th>Customer password</th>
          <th>Customer Email</th>
          <th>Customer Phone</th>

        </tr>
        <?php
        // Connect to the database
        include_once 'connect.php';


        // Fetch the customer data from the database
        $sql = "SELECT * FROM users";

        $result = mysqli_query($conn, $sql);

        // Loop through the customer data and display it in the table
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>" . $row['user_id'] . "</td>
                  <td>" . $row['user_name'] . "</td>
                  <td>" . $row['pass'] . "</td>
                  <td>" . $row['email'] . "</td>
                  <td>" . $row['phone'] . "</td>
                
                </tr>";
        }


        $sql = "SELECT COUNT(*) AS Totaluser FROM users ;";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $count_emp = $row['Totaluser'];

        echo "</tr>";
        echo "<tr class='accountant-calculations'> ";
        echo "<td colspan='4'>Number of Customer </td>";
        echo "<td>" . $count_emp . "</td>";
        echo "</tr>";



        ?>
      </table>
    </section>

    <section>
      <h3>View Cars Details</h3>
      <table>
        <tr>
          <th>Car Name</th>
          <th>Car ID</th>
          <th> Car Type</th>
          <th>Car Price</th>
          <th>Car Model</th>

        </tr>
        <?php
        // Connect to the database
        include_once 'connect.php';


        // Fetch the customer data from the database
        $sql = "SELECT * FROM cars";

        $result = mysqli_query($conn, $sql);

        // Loop through the customer data and display it in the table
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>" . $row['car_name'] . "</td>
                  <td>" . $row['car_id'] . "</td>
                  <td>" . $row['car_type'] . "</td>
                  <td>" . $row['car_price'] . "</td>
                  <td>" . $row['car_model'] . "</td>
                
                </tr>";
        }

        // Close the connection
        mysqli_close($conn);
        ?>
      </table>
    </section>
  </main>
</body>

</html>