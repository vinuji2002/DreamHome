<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM contactus WHERE CID=$id";
    $result = $con->query($sql);

    if($result){
        
        header('Location: adminemail.php');
    }else{
        die("Connection faild !");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
</body>
</html>