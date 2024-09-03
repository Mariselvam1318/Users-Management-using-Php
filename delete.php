<?php
    $connection=mysqli_connect("localhost","root","","usercrud",3308);
    if(!$connection){
        die("connection failed".mysqli_connect_error());
    }
    $id=$_GET['id'];
    $sql = "delete from users where id='$id'";
    if(mysqli_query($connection,$sql)){
        header("Location: index.php");
        exit();
    }
    else{
        echo "Error inserting data: " . mysqli_error($connection);
    }
    mysqli_close($connection);
?>