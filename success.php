<?php
    include('header.php');
?>
<body>
    <h1>Blog Added</h1>
    <a href="blogslist.php">View Blogs</a>

    <?php
        $author = $_POST['author'];
        $title = $_POST['title'];
        $post = $_POST['post'];

        echo "A very nice article $author<br>";

        // Populate blog database
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

        // Query Database to insert data
        $sql = "INSERT INTO blogposts(author,title,post)
                VALUES ('$author','$title','$post')";
        $result = mysqli_query($conn, $sql);

        // Query Test
        if($result){
            echo '<br>Blog was Successfully Added';
        }
        else{
            echo 'Error, Blog was not added!!!'. mysqli_error($conn);
        }

    ?>
</body>
</html>