<?php
include ('connect.php');
?>

<html>
<head>
<link rel="stylesheet" href="qatable1.css">
</head>
<body>
<div class="header" style="background-color: black;">
        <nav>
            <img src="Desktop/logo.png" class="logo">
            <ul class="nav-links">
                <li><a href="">Home</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Interiors</a></li>
                <li><a href="">Gallery</a></li>
                <li><a href="">Life Style</a></li>
                <li><a href="">Location</a></li>
                <li><a href="">Contact Us</a></li>
                <li><div class="dropdown">
                    <button class="dropbtn">Other <i class="fa fa-caret-down"></i></button>
                    <div class="dropdown-content">
                      <a href="#">FAQ</a>
                      <a href="#">Price</a>
                      <a href="#">Availability</a>
                    </div>
                  </div></li>
                <li class="btn">Sign Up</li>
                <li class="btn">Login</li>
            </ul>
        </nav>
    </div>

<table >
      <tr>
        <th scope="col">Comment_id</th>
        <th scope="col">Name</th>
        <th scope="col" >Email </th>
        <th scope="col">Comment</th>
      
      </tr>
      <tbody>

      <?php
    
    $sql="Select * from feedback";
    $result=mysqli_query($con,$sql);
    if($result){
      while($row=mysqli_fetch_assoc($result)){
        $Qusestions_Number=$row['id'];
        $Full_Name=$row['name'];
        $Email_Address=$row['email'];
        $Qusestions=$row['comment'];
        echo $Qusestions_Number;
        echo ' <tr>
       
        <th scope="row">'.$Qusestions_Number.'</th>
        <th scope="row">'.$Full_Name.'</th>
        <th>'.$Email_Address.'</th>
        <th>'.$Qusestions.'</th>
      
        </tr>';
      }
    }
    else

    {
      echo "dffg";
    }

      ?>

      
  </tbody> 
</table>
</body>
</html>
