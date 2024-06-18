<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "dreamhome";

$con = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

//database connection
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
 die("Connection faild !");
}
/*else{
     //create a script alert success
     echo ("<script>alert('User Admin Page Loaded Successfully !')</script>");
}*/
?>