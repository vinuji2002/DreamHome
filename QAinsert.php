<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $Name=$_POST['name'];
  $Email=$_POST['email'];
  $Comment=$_POST['comment'];

  $sql="insert into feedback (name,email,comment) values('$Name','$Email','$Comment')";
  $sql=mysqli_query($con,$sql);
  if($sql){
    echo "<script>alert('Question is sussesfull send');</script>";

    //header('location:table1.php');
  }else{
    echo "hjb"; 
    die(mysqli_error($conn));
  }
}
else{
    echo "hjb"; 
}
?>