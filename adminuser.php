<html>

<head>
    <title>Dream Home | Admin User View</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <script src="https://kit.fontawesome.com/8728c1f79f.js" crossorigin="anonymous"></script>
    <link href="reg-style.css" rel="stylesheet">
    <link href="ab-style.css" rel="stylesheet">
    <link href="aduserview.css" rel="stylesheet">
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
    <div class="adutitle">List of Users <i class="fa-solid fa-users fa-xs" style="color: #ffffff;"></i></div><br>
    <table class="usertableview">
        <tr class="tablehead">
            <th>User ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>NIC</th>
            <th>DOB</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <?php
        include ("connect.php");

        //create connection
        //$con = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

        //read data
        $sql = "SELECT * FROM registered_user";
        $result = $con->query($sql);

        if(!$result){
            die("Invalid query: ".$con->error);
        }

        //read all data
        while($row = $result->fetch_assoc()){
            $id=$row['UserID'];
            $firstname=$row['FirstName'];
            $lastname=$row['LastName'];
            $email=$row['Email'];
            $address=$row['Address'];
            $phoneno=$row['PhoneNo'];
            $nic=$row['NIC'];
            $dob = $row['DOB'];
            $username=$row['Username'];
            $password=$row['Password'];

        echo'<tr>
            <td>'. $id.'</td>
            <td>'. $firstname.'</td>
            <td>'. $lastname.'</td>
            <td>'. $email.'</td>
            <td>'. $address.'</td>
            <td>'. $phoneno.'</td>
            <td>'. $nic.'</td>
            <td>'. $dob.'</td>
            <td>'. $username.'</td>
            <td>'. $password.'</td>
            <td> <a href="aduregister.php" class="createbtn">Create</a> <a href="adudelete.php?deleteid='.$id.'" class="delebtn">Delete</a></td>
        </tr>';

        
       /* <tr>
       <td> <a href='aduedit.php'>Update</a> <a href='adudelete.php?deleteid='.$id.''>Delete</a></td>
            <td>". $row["UserID"]."</td>
            <td>". $row["FirstName"]."</td>
            <td>". $row["LastName"]."</td>
            <td>". $row["Email"]."</td>
            <td>". $row["Address"]."</td>
            <td>". $row["PhoneNo"]."</td>
            <td>". $row["NIC"]."</td>
            <td>". $row["DOB"]."</td>
            <td>". $row["Username"]."</td>
            <td>". $row["Password"]."</td>
            <td> <a href='aduedit.php'>Update</a> <a href='adudelete.php?deleteid='.$id.''>Delete</a></td>
        </tr>"*/
        }
        ?>
    </table>
    </div>
</body>
</html>