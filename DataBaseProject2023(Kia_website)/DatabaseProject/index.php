<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Cookie&family=EB+Garamond:wght@500&family=Permanent+Marker&display=swap"
        rel="stylesheet">
    <link href="assets/css/all.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>

<?php

include_once 'connect.php';

?>
    <!--header section-->
    <div class="header" id="header-section">

        <div class="navbar">
            <div class="logo">
                <p>KIA</p>
            </div>
            <div class="links">
                <ul>
                    <li>
                        <a href="#header-section">Home</a>
                    </li>
                    <li>
                        <a href="#about-section">About</a>
                    </li>
                    <li>
                        <a href="#newcars">New Cars</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                    <li>
                        <a href="login.php" class="active">Login</a>
                    </li>
                    <li>
                        <a href="register.php">Register</a>
                    </li>
                    <li>
                        <a href="cars.php" class="active"> Watch Now </a>
                    </li>
                    <li>
                    <div class="clr"></div>
                </ul>
            </div>
            <div class="clr"></div>
        </div>


        <div class="header_contents">
            <h1>KIA Movement that inspires</h1>
            <h2>The Car We Drive Say A Lot About Us</h2>

        </div>

    </div>

    <!--about section-->
    <div class="about" id="about-section">
        <div class="container">
            <div class="img-about">
                <img src="assets/img/kia-hd-png-are-you-looking-for-a-car-1023.png" />
            </div>

            <div class="info-about">
                <h2>We Are Kia Automobiles</h2>
                <h3>And we all love what we do.</h3>
                <p>Movement inspires ideas. That is why Kia creates space to inspire new ideas!</p>
                <ul>
                    <li>
                        <i class="fa-brands fa-envira"></i> <span>We care about environment.</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-shield-heart"></i><span>We care about safety</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-users"></i> <span>We are trusted by hundreds of clients.</span>
                    </li>

                </ul>
            </div>
            <div class="clr"></div>
        </div>
    </div>

    <!--general image section-->
    <div class="general-images" id="newcars">
        <div class="container">
            <h2>Our new cars</h1>
                <div class="car">
                    <img src="assets/img/stinger2023.webp" />
                </div>
                <div class="car">
                    <img src="assets/img/1674510306574.webp" />
                </div>
                <div class="car">
                    <img src="assets/img/1674510319499.webp" />
                </div>
                <div class="clr"></div>
        </div>

    </div>

    <!--stinger2023 section-->
    <div class="stinger2023">
        <div class="container">
            <div class="stinger-img">
                <img src="assets/img/stinger2023.webp" />
            </div>
            <div class="stinger-abt">
                <h2>2023 STINGER</h2>
                <h3>Launch-ready.</h3>
                <div class="stinger-abt-p">
                    <p>It drives as exhilarating as it looks. With the GT2’s 0–60 in 4.7 seconds and 167 mph top speed,
                        Launch Control System to maximize off-the-line acceleration, and an elegant, premium,
                        feature-filled cabin, the Stinger luxury sports sedan pays its respects to the GT classics of
                        the past, while asserting itself as an icon going forward</p>
                </div>

                <a href="https://www.kia.com/us/en/stinger">Explore Stinger ></a>
            </div>
            <div class="clr"></div>
        </div>
    </div>

    <!--k52023 section-->
    <div class="k52023">
        <div class="container">
            <div class="k52023-abt">
                <h2>2023 K5</h2>
                <h3>The best has come.</h3>
                <div class="k52023-p">
                    <p>The K5 sports sedan is a riveting reminder of what it feels like to be alive. Forget everything
                        you know about sedans and prepare to be impressed by its 290 hp, class-leading 311 lb.-ft. of
                        torque, and 0–60 mph in 5.7 seconds</p>
                </div>

                <a href="https://www.kia.com/us/en/k5">Explore k5 ></a>
            </div>
            <div class="k52023-img">
                <img src="assets/img/1674510306574.webp" />
            </div>
            <div class="clr"></div>
        </div>
    </div>

    <!--forte2023 section-->
    <div class="forte2023">
        <div class="container">
            <div class="forte2023-img">
                <img src="assets/img/1674510319499.webp" />
            </div>
            <div class="forte2023-abt">
                <h2>2023 FORTE GT</h2>
                <h3>Rebellion in motion.</h3>
                <div class="forte2023-p">
                    <p>The fast car you didn't see coming. GT options take sporty design to the next level with a
                        turbocharged 1.6L 4-cylinder engine with 201 hp, optional 6-speed manual transmission,
                        sport-tuned multi-link rear suspension and 18-inch alloy wheels. There's nothing conventional
                        about this sports sedan.
                    </p>
                </div>
                <a href="https://www.kia.com/us/en/forte">Explore Forte ></a>
            </div>
            <div class="clr"></div>
        </div>
    </div>

    <div class="contact" id="contact">
        <div class="container">
            <div class="contact-info">
                <h2>Contact Information</h2>
                <p>Our contact details:</p>
                <ul>
                    <li>
                        <i class="fa-regular fa-map"></i> <span>Beitunia-Ramallah</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-phone"></i> <span>+970592947992</span>
                    </li>
                    <li>
                        <i class="fa-regular fa-envelope"></i> <span>kiac@gmail.com</span>
                    </li>
                </ul>
            </div>

            <div class="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3387.595933599601!2d35.18464731515978!3d31.89040198124876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x31b8fc2caea2a4b2!2zMzHCsDUzJzI1LjUiTiAzNcKwMTEnMTIuNiJF!5e0!3m2!1sen!2s!4v1675604508773!5m2!1sen!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="clr"></div>
            
            
        </div>
    </div>

</body>

</html>