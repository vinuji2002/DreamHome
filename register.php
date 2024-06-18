<?php
session_start();
$_session;

//include db connection
include("connect.php");

if($_SERVER['REQUEST_METHOD']=="POST"){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $nic = $_POST['nic'];
    $dob = $_POST['dob'];
    $username = $_POST['username'];
    $password = $_POST['password'];
  
     //send query if email,fullname,password,repassword are not empty
    $sql = "INSERT INTO `registered_user` (`UserID`, `FirstName`, `LastName`, `Email`, `Address`, `PhoneNo`, `NIC`, `DOB`, `Username`, `Password`) VALUES (NULL, '$firstname', '$lastname', '$email', '$address', '$phoneno', '$nic', '$dob', '$username', '$password')";

    if($con->query($sql)) {

      //create a js alert to display successfully registered
      echo ("<script>alert('Registered Successfully !')</script>");
      
      //Enter Destination
      header("Location: login.html");
    }
    else{

      //create a js alert to display error
      echo ("<script>alert('Registration Error !')</script>");
    }
}
?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dream Home | Register</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <script src="https://kit.fontawesome.com/8728c1f79f.js" crossorigin="anonymous"></script>
    <link href="reg-style.css" rel="stylesheet">
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
<center><div class="background">
<div class="container">
    <div class="title"><i class="fa-solid fa-user-plus"></i>  Registration</div>
            <form action="register.php" method="POST">
                <div class="user-details">
                <div class="input-box">
                    <span class="details">First Name</span>
                    <input type="text" placeholder="Enter Your First Name" required name="firstname">
                </div>
                <div class="input-box">
                    <span class="details">Last Name</span>
                    <input type="text" placeholder="Enter Your Last Name" required name="lastname">
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" placeholder="Enter Your Adress" required name="address">
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="Enter Your Email" required name="email">
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" placeholder="Enter Your Phone Number" required name="phoneno">
                </div>
                <div class="input-box">
                    <span class="details">NIC</span>
                    <input type="text" placeholder="Enter Your NIC" required name="nic">
                </div>
                <div class="input-box">
                    <span class="details">Date of Birth</span>
                    <input type="date" placeholder="Enter Your Date of Birth" required name="dob">
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="Create Your Username" required name="username">
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="text" placeholder="Create Your Password" required name="password">
                </div>
                <div class="button">
                    <input type="submit" value="Register">
                </div>
                </div>
            </form>
    
</div>
</div></center>
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