<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Home | Admin Payment Details</title>
    <link href="aduser.css" rel="stylesheet">
    <link href="payview.css" rel="stylesheet">
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
    <div class="container1">
    <div class="topic">List of Payements</div><br>
    <table class="paymentviewtable">
        <tr>
            <th>Payment ID</th>
            <th>Name</th>
            <th>Phone No</th>
            <th>Email</th>
            <th>NIC</th>
            <th>Recidencies</th>
            <th>Method</th>
            <th>Cardholder</th>
            <th>Card No</th>
            <th>Action</th>

        </tr>
        <?php
        include ("connect.php");

        //create connection
        //$con = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

        //read data
        $sql = "SELECT * FROM payments";
        $result = $con->query($sql);

        if(!$result){
            die("Invalid query: ".$con->error);
        }

        //read all data
        while($row = $result->fetch_assoc()){
            $id=$row['Payment_ID'];
            $name=$row['Name'];
            $phoneno=$row['PhoneNo'];
            $email=$row['Email'];
            $nic=$row['NIC'];
            $residencies=$row['Residencies'];
            $method=$row['Method'];
            $cardname=$row['Card Name'];
            $cardno=$row['Card No'];

        echo'<tr>
            <td>'. $id.'</td>
            <td>'. $name.'</td>
            <td>'. $phoneno.'</td>
            <td>'. $email.'</td>
            <td>'. $nic.'</td>
            <td>'. $residencies.'</td>
            <td>'. $method.'</td>
            <td>'. $cardname.'</td>
            <td>'. $cardno.'</td>
            <td> <a href="payment.php" class="createbtn">Create</a> <a href="paydelete.php?deleteid='.$id.'" class="delebtn">Delete</a></td>
        </tr>';
        }
        ?>
    </table>
    </div>

</body>
</html>