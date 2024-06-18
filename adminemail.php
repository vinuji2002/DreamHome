<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dream Home | Admin Email View</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <script src="https://kit.fontawesome.com/8728c1f79f.js" crossorigin="anonymous"></script>
    <link href="reg-style.css" rel="stylesheet">
    <link href="ab-style.css" rel="stylesheet">
	<link href="emailview.css" rel="stylesheet">

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

    <div class="adubackground">
    <div class="topic">List of Emails</div>
    <table class="adminemailviewtable">
        <tr>
            <th>CID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Action</th>

        </tr>
        <?php
        include ("connect.php");

        //create connection
        //$con = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

        //read data
        $sql = "SELECT * FROM contactus";
        $result = $con->query($sql);

        if(!$result){
            die("Invalid query: ".$con->error);
        }

        //read all data
        while($row = $result->fetch_assoc()){
            $id=$row['CID'];
            $name=$row['Name'];
            $email=$row['Email'];
            $subject=$row['Subject'];
            $message=$row['Message'];

        echo'<tr>
            <td>'. $id.'</td>
            <td>'. $name.'</td>
            <td>'. $email.'</td>
            <td>'. $subject.'</td>
            <td>'. $message.'</td>
            <td><a href="ademailadd.php" class="createbtn">Create</a> <a href="ademaildelete.php?deleteid='.$id.'" class="delebtn">Delete</a></td>
        </tr>';
        }
        ?>
    </table>
    </div>
</body>
</html>