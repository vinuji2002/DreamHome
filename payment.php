<?php

//include db connection
include("connect.php");

if($_SERVER['REQUEST_METHOD']=="POST"){

    $name = $_POST['name'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $nic = $_POST['nic'];
    $residencies = $_POST['residencies'];
    $method = $_POST['method'];
    $cardname = $_POST['cardname'];
    $cardnumber = $_POST['cardnumber'];

     //send query if email,fullname,password,repassword are not empty
    $sql = "INSERT INTO `payments`(`Payment_ID`, `Name`, `PhoneNo`, `Email`, `NIC`, `Residencies`, `Method`, `Card Name`, `Card No`) VALUES (NULL,'$name','$phoneno','$email','$nic','$residencies','$method','$cardname','$cardnumber')";



    if(mysqli_query($con,$sql)){

        echo "<script>alert('Payment Added Successfully !')</script>";

        //Enter Destination
      header("Location: adminpay.php");
      }
      else{
        echo "<script>alert('Payment Failed !')</script>";
    }
}
?>

<html>
<head>
    <title>Dream Home | Online Payment Portal</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <script src="https://kit.fontawesome.com/8728c1f79f.js" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">
	<link href="pay-style.css" rel="stylesheet">
	
	<style>
		html, body{
			height: 100%;
			margin: 0;
			padding: 0;
		}
	</style>
		
</head>
<body>
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
    <form action="" method="POST">
	<div class="topic">
		<p><center>ONLINE PAYMENT PORTAL</center></p>
	</div>
	
	<div class="container1">
        
		<div class="section">
			<h2><i><center>Customer Information</center></i></h2><br>
			Name <br>
			<input type="text" name="name" size="75"> <br><br>
			Mobile number <br>
			<input type="text" name="phoneno" size="75"> <br><br>
			E-mail <br>
			<input type="text" name="email" size="75"> <br><br>
			NIC <br>
			<input type="text" name="nic" size="75"> <br><br>
			Type of residencies <br>
			<select name="residencies">
			<option value="1">Select</option>
			<option value="2">One bedroom</option>
			<option value="3">Two bedrooms</option>
			<option value="4">Three bedrooms</option>
			</select> <br><br>
			Type of payment method <br>
			<select name="method">
			<option value="1">Select</option>
			<option value="2">Credit/Debit card</option>
			<option value="3">Pay Pal</option>
			<option value="4">AMX</option>
			</select>
		</div>
		<div class="section">
			<h2><i><center>Credit / Debit Card Details</center></i></h2><br>
			
			Cardholder's Name <br> 
			<input type="text" name="cardname" size="75"> <br><br>
			Card Number <br>
			<input type="text" name="cardnumber" size="75"> <br><br>
			<label for="monthInput">Expiry</label> <br>
			<input type="month" id="monthInput" name="monthInput"> <br><br>
			CVC <br>
			<input type="text" name="cvc" size="3"> <font size="1">128-bit secured</font><br><br>
			<input type="checkbox" name="q1" value="a" checked> Accept User Agreement <br><br>
			<input type="checkbox" name="q2" value="p" checked> Accept privacy & policy <br><br>
			<button type="button" onclick="window.location.href='index.html';">Cancel</button>
			<input type ="submit" value="Proceed">
		</div>

    
	</div>
	</form>
	
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