<?php
include_once('conn.php');
session_start();
$user = $_SESSION['user'];
if (isset($_POST['aaa'])) {

    $name = ($_POST['avb_cars']);
    $sql = "SELECT * FROM `cars` where car_name ='$name' limit 1";
    $db = new Database();
    $result = $db->read($sql);
    $row =  $result[0];


    $sql_user = "SELECT * FROM users where user_id  ='$user' limit 1";
    $result2 = $db->read($sql_user);
    $row2 =  $result2[0];

    $sql_in = "INSERT INTO `users_buy_car`(`user_id`, `car_id`, `car_price`, `car_name`, `user_name`) 
        VALUES ( $user,'$row[car_id]','$row[car_price]','$row[car_name]','$row2[user_name]')";
    $db->save($sql_in);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=EB+Garamond:wght@500&family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="assets/css/cars.css" rel="stylesheet">
</head>

<body>
    <div class="background"></div>
    <div class="title">
        <h1>Our available cars</h1>
    </div>
    <div class="cars">
        <div class="container">
            <div class="item">
                <div class="info">
                    <h2>Cerato 2023</h2>
                    <p>A sign of greatness.</p>

                    <img src="assets/img/TheNewCerato.jpg" />
                    <br>
                    <a href="assets/img/rio spec.jpg">view car spec sheet</a>
                </div>

            </div>
            <div class="item">
                <div class="info">
                    <h2>Seltos 2023</h2>
                    <p>Made to do more.</p>
                    <img src="assets/img/TheNewSeltos.jpeg" />
                    <br>
                    <a href="assets/img/rio spec.jpg">view car spec sheet</a>
                </div>

            </div>


            <div class="item">
                <div class="info">
                    <h2>Niro 2023</h2>
                    <p>Powerfully efficient</p>
                    <img src="assets/img/TheNewNiro.jpg" />
                    <br>
                    <a href="assets/img/rio spec.jpg">view car spec sheet</a>
                </div>

            </div>


            <div class="item">
                <div class="info">
                    <h2>Stonic 2023</h2>
                    <p>Own the road</p>
                    <img src="assets/img/TheNewStonic.jpeg" />
                    <br>
                    <a href="assets/img/rio spec.jpg">view car spec sheet</a>
                </div>

            </div>


            <div class="item">
                <div class="info">
                    <h2>Rio 2023</h2>
                    <p>Five doors of fun</p>
                    <img src="assets/img/TheNewRio.jpg" />
                    <br>
                    <a href="assets/img/rio spec.jpg">view car spec sheet</a>
                </div>

            </div>


            <div class="item">
                <div class="info">
                    <h2>Sportage 2023</h2>
                    <p>Endless possibilities</p>
                    <img src="assets/img/TheNewSportage.jpg" />
                    <br>
                    <a href="assets/img/rio spec.jpg">view car spec sheet</a>
                </div>

            </div>


            <div class="item">
                <div class="info">
                    <h2>Picanto 2023</h2>
                    <p>Always in style</p>
                    <img src="assets/img/TheNewPicanto.jpeg" />
                    <br>
                    <a href="assets/img/rio spec.jpg">view car spec sheet</a>
                </div>

            </div>


            <div class="item">
                <div class="info">
                    <h2>Sorento 2023</h2>
                    <p>Let the adventures begin</p>
                    <img src="assets/img/TheNewSorento.jpg" />
                    <br>
                    <a href="assets/img/rio spec.jpg">view car spec sheet</a>
                </div>

            </div>

            <table class="available-cars-table">
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
                    echo "<tr>
          <td>" . $row['car_name'] . "</td>
          <td>" . $row['car_id'] . "</td>
          <td>" . $row['car_type'] . "</td>
          <td>" . $row['car_model'] . "</td>
          <td>" . $row['car_price'] . "</td>
          
         
        </tr>";
                }

                ?>

            </table>
            <form method="post">
                <select name="avb_cars">
                    <?php
                    include_once 'connect.php';
                    $sql = "SELECT * FROM cars";

                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                  <option>" . $row['car_name'] . "</option>
                  ";
                    }
                    ?>


                </select>
                <br>
                <button name="aaa">
                    Buy
                </button>

            </form>
            <div class="goback">
                <a href="index.php">Go to main page</a>
            </div>
        </div>
    </div>

</body>

</html>