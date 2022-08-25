<?php
    include('header.php');
?>
<body>
    <h1>All Blogs</h1>
    <nav>
        <a href="index.php">Add Blogs</a>
        
        <form action='delete.php' method="get">
            <input type="text" name="nametodelete" placeholder="insert blog id">
            <input type="submit" value="delete">
        </form>
    </nav>

    <?php
        // Read from Database
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

        $sql = "SELECT * FROM blogposts";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            // output values
            while($rows = mysqli_fetch_assoc($result)){

                echo  "<div style='border:10px solid grey;padding:10px;'>
                        <h2>Blog Author: <span style='font-weight:normal;'>" .$rows['author'] . "</span></h2>
                        <h3>Blog Title: <span style='font-weight:normal;'>" .$rows['title'] . "</span></h3>
                        <p>" .$rows['post'] . "</p>
                    </div>";
            }
        }

    ?>

</body>
</html>