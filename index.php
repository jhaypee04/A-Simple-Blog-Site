<?php
    include('header.php');
?>
<body >
    <h1>A Simple Blogging Site!</h1>
    <form action="success.php" method='POST'>
        <fieldset>
            <legend>Add Blog</legend>
            <label for="author">Blog Author: </label><br/>
            <input type="text" id="author" name="author" placeholder="The Writer's name here..."><br/>
            <label for="title">Title: </label><br/>
            <input type="text" id="title" name="title"><br/>
            <label for="post">Blog Body</label><br/>
            <textarea type="text" id="post" name="post" cols="30" rows="5"></textarea><br/>
            <input type="submit"><br/>
        </fieldset>
    </form>
</body>
</html>