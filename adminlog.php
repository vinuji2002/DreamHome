<?php
// Database connection settings
include ("connect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $username = $_POST["username"];
    $password = $_POST["password"];

$sql = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
$result = $con->query($sql);

if ($result->num_rows == 1) {

  // Proceed to log in the user or redirect to the panel
  echo "<script>alert(' Login Successful !')</script>";
  header("Location: adminpanel.html");
            exit();
} else {
  // Authentication failed, user does not exist or wrong credentials
  // Display an error message or redirect back to the login page
  echo "<script>alert(' Login Failed !')</script>";
}
}
?>


<html>

<head>
    <title>Dream Home | Admin Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <script src="https://kit.fontawesome.com/8728c1f79f.js" crossorigin="anonymous"></script>
    <link href="log-style.css" rel="stylesheet">
</head>

<body style="background-color: black;">
    <div class="header" style="background-color: black;">
       <nav>
            <img src="media/logo.png" class="logo">
            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="interiors.html">Interiors</a></li>
                <li><a href="gallary.html">Gallery</a></li>
                <li><a href="amenities.html">Life Style</a></li>
                <li><a href="Location.html">Location</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Other <i class="fa fa-caret-down"></i></button>
                        <div class="dropdown-content">
                            <a href="QA.php">FAQ</a>
                            <a href="price.html">Price</a>
                            <a href="availability.html">Availability</a>
                        </div>
                    </div>
                </li>
                <li class="btn" onclick="window.location.href='register.php';">Sign Up</li>
                <li class="btn" onclick="window.location.href='login.php';">Login</li>
            </ul>
        </nav>
    </div>





    <!------------------------Your Contents here---------------------------------->
    <center>
        <div class="background">
            <div class="container">
                <div class="title"><i class="fa-solid fa-shield-halved"></i> Admin Login</div>
                <form action="" method="post">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Username</span>
                            <input type="text" placeholder="Enter Username" id="username" name="username" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Password</span>
                            <input type="text" placeholder="Enter Password" id="password" name="password" required>
                        </div>

                        <div class="button">
                            <input type="submit" value="Login">
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </center>

    
    <!-------------------------------------------------------------------->


<footer class="footer">
        <div class="row">
            <div class="footer-col">
                <h4>
                    Quick Links
                </h4>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
                    <li><a href="interiors.html">Interiors</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <br><br>
                <ul>
                    <li><a href="lifestyle.html">Life Style</a></li>
                    <li><a href="location.html">Location</a></li>
                    <li><a href="contactus.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <br><br>
                <ul>
                    <li><a href="QA.php">FAQ</a></li>
                    <li><a href="price.html">Price</a></li>
                    <li><a href="availability.html">Availability</a></li>
                </ul>
            </div>
            <div class="footer-col" style="width: 25%;">
                <h4>
                    Contact Us
                </h4>
                <ul>
                    <li><i class="fa-solid fa-phone"></i> +11 250 8066</li>
                    <li><i class="fa-solid fa-location-dot"></i> No 16, Galle Road, Colombo 4</li>
                    <li><i class="fa-solid fa-at"></i> inquires@dreamhome.lk</li>
                </ul>
            </div>
            <div class="footer-col" style="width: 25%;">
                <h4>
                    Enquiry
                </h4>
                <ul>
                    <li>
                        <p>Enter Email Here</p>
                        <form action="" class="email_form">
                            <input type="Email" class="txt" placeholder="Enter Email" name="">
                            <input type="submit" class="btn" value="Submit" name="">

                        </form>
                    </li>
                </ul>
            </div>



        </div>
        <br><br><br><br>
        <div class="social">
            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>


            <div class="footer_bottom"><br>
                <p>Copyright &copy;2023 Dream Home</p>
            </div>
        </div>
    </footer>
</body>

</html>