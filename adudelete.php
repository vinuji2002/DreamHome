<?php
include 'connect.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM registered_user WHERE UserID=$id";
    $result = $con->query($sql);

    if($result){
        echo ("<script>alert('Deleted Successfully !')</script>");
        header('Location: adminuser.php');
    }else{
        die("Connection faild !");
    }
}
?>