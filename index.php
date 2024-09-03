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
        .card {
            margin-top: 20px;
           
        }
    </style>
</head>
<body>
    <div class="container-fluid mt-5 d-flex justify-content-center ">
        <div class="row w-100">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                         <h1 class="text-center">Users Management</h1>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">S.NO</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">City</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             $connection = mysqli_connect("localhost", "root", "", "usercrud", 3308);

                             // Check if the connection was successful
                             if (!$connection) {
                                 die("Connection failed: " . mysqli_connect_error());
                             }
                             $sql = "Select * from users";
                             $result = mysqli_query($connection,$sql);
                             $id =1;
                             while ($row = mysqli_fetch_array($result)) {
                                echo '<tr>';
                                echo '<td>' . $id++ . '</td>';
                                echo '<td>' . $row['Name'] . '</td>';
                                echo '<td>' . $row['Email'] . '</td>';
                                echo '<td>' . $row['Mobile'] . '</td>';
                                echo '<td>' . $row['City'] . '</td>';
                                echo '<td>
                                        <a href="update.php?id=' . $row['id'] . '" class="btn btn-success btn-sm">Update</a>
                                        <a href="delete.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this user?\');">Delete</a>
                                      </td>';
                                echo '</tr>';
                            }
                            mysqli_close($connection);
                            ?>
                        </tbody>
                    </table>
                    </div>
                    <div class="text-center">
                    <a href="add.php" class="text-light"> 
                        <button type="button" class="btn btn-primary">Add User</button></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>