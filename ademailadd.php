<?php
 include("connect.php");

  //get values from form
  if($_SERVER['REQUEST_METHOD'] == "POST"){

    $name = $_POST['name'];
    $email = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


      //sql query to insert data into order table
     $sql="INSERT INTO `contactus`(`CID`, `Name`, `Email`, `Subject`, `Message`) VALUES (NULL,'$name','$email','$subject','$message')";

      //run sql query and script alert after successful insert
      if(mysqli_query($con,$sql)){
        echo "<script>alert(' Successfully Recorded !')</script>";
      }
      else{
        echo "<script>alert(' Recording Failed !')</script>";
    }
  }
?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dream Home | Admin Email Add</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <script src="https://kit.fontawesome.com/8728c1f79f.js" crossorigin="anonymous"></script>
    <link href="cu-style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
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
<body>
    <div class="cu-back">
        <div class="cutitle">
             Get In Touch 
        </div><br>
        <div class="cutext">
            Contact Dream Home for any queries by filling in your contact details and we will get in touch with you
            shortly.
        </div><br><br>
        <div class="cucintainer">
            <div class="cuform">
                <form method="POST" action="">

                    <div class="cuformtitle">
                        Contact Us</div>
                    <div class="formlabel">
                        Name:</div>
                    <input type="text" id="name" name="name" placeholder="Name" required>

                    <div class="formlabel">Email:</div>
                    <input type="email" id="mail" name="mail" placeholder="abc@gmail.com"
                        pattern="[a-z0-9.%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required><br><br>

                    <div class="formlabel">Subject:</div>
                    <select id="subject" name="subject" required>
                        <option value="">Select a subject</option>
                        <option value="Sales Inquiry">Sales Inquiry</option>
                        <option value="Technical Support">Technical Support</option>
                        <option value="General Inquiry">General Inquiry</option>
                        <option value="Other">Other</option>
                    </select>
                    <br><br>

                    <div class="formlabel">Message:</div>
                    <div class="cuformtext">
                    <textarea class="cuformtext cuformtextarea"name="message"
						 placeholder="Your message" required></textarea><br><br></div>

                    <input type="submit" class="btn-submit" value="Send" >
                </form>
            </div>

            <div class="cu-under">
                <div class="cusocial">
                    Facebook <i class="fa-brands fa-square-facebook"></i> facebook/dreamhome <br>
                    Instagram <i class="fa-brands fa-square-instagram"></i> instagram/dreamhome<br>
                    Twitter <i class="fa-brands fa-square-twitter"></i> twitter/dreamhome<br>
                    Linkedin <i class="fa-brands fa-linkedin"></i> linkedin/dreamhome <br>
                </div>
                <div class="cumap">
                    <img src="media/map.jpg" width="300px"><br>
                </div>
                <div class="cumapunder">
                    <i class="fa-solid fa-location-dot" style="color: #ff0000;"></i>&nbsp&nbsp No 16,Galle Rd, Colombo
                    04.<br>
                    <i class="fa-solid fa-phone-flip" style="color: #003a9e;"></i>&nbsp&nbsp 011-2508066<br>
                    <i class="fa-solid fa-envelope-open-text"></i>&nbsp&nbsp inquires@dreamhome.lk<br>
                </div>
            </div>
        </div>
    </div>
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