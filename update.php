<?php
    $connection = mysqli_connect("localhost", "root", "", "usercrud", 3308);

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $id=$_GET['id'];
    $sql = "Select * from users where id = '$id'";
    $result = mysqli_query($connection,$sql);
    while ($row = mysqli_fetch_array($result)) {
            $uid =$row['id']; 
            $name =$row['Name'];
            $email =$row['Email'];
            $mobile =$row['Mobile'];
            $city =$row['City'];
}
?>
<?php
   $connection = mysqli_connect("localhost", "root", "", "usercrud", 3308);
   if (!$connection) {
       die("Connection failed: " . mysqli_connect_error());
   }
    if(isset($_POST['submit'])){
        $id=$_GET['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $city = $_POST['city'];
        $sql = "UPDATE users SET Name='$name', Email='$email', Mobile='$mobile', City='$city' WHERE id ='$id'";
        
        if(mysqli_query($connection, $sql)){
            echo "User Updated Successfully!!..";
            header("Location: index.php");
               exit();
        }
        else{
            echo "Error inserting data: " . mysqli_error($connection);
        }
    }
    mysqli_close($connection);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users_CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(80,137,163,1) 0%);
        }
    </style>
</head>
<body>
    <div class="container-fluid mt-5 d-flex justify-content-center">
        <div class="row w-100">
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                         <h1 class="text-center">Users Management</h1>
                    </div>
                    <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="<?php echo $name;?>">
                        </div>
                        <div class="mb-3">
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email_id"value="<?php echo $email;?>">
                        </div>
                        <div class="mb-3">
                            <label>Mobile No</label>
                            <input type="tel" name="mobile" class="form-control" placeholder="Enter Your Mobile_NO."value="<?php echo $mobile;?>">
                        </div>
                        <div class="mb-3">
                            <label>City</label>
                            <input type="text" name="city" class="form-control" placeholder="Enter Your City"value="<?php echo $city;?>">
                        </div>
                        <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        </div>
                       
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

