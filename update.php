<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updated</title>
</head>
<body>
    <h1>Updated</h1>
    <a href="blogslist.php">View more Blogs</a>

    <?php
        // Create Operation
        // from CRUD Operations

        // Requiring variables with database conncetion strings:
        require('config.php');

        // Connecting to database
        $conn = mysqli_connect($servername,$username,$password,$database);

        if($conn){
            echo 'Connection to database was a success';
        }
        else{
            echo 'Connection Failed!';
        }

        
    ?>
</body>
</html>