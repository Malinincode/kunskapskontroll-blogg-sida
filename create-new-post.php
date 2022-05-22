<?php
require('dbconnect.php');


/* ADD a post  */
if (isset($_POST['createPost'])) {
    $sql = "
       INSERT INTO posts (title, author, content) 
       VALUES (:title, :author, :content);
   ";

   $stmt = $pdo->prepare($sql);
   $stmt->bindParam(":title", $_POST['title']);
   $stmt->bindParam(":author", $_POST['author']);
   $stmt->bindParam(":content", $_POST['content']);
   $stmt->execute();
   header("Location:./admin.php");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<form action="" method="POST">
     
<h3>Create new post</h3>

    <div class="mb-3">
        <label for="formTitle" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="formTitle" placeholder="Title">
    </div>

    <div class="mb-3">
        <label for="formAuthor" class="form-label">Author</label>
        <input type="text" name="author" class="form-control" id="formAuthor" placeholder="Author">
    </div>

    <div class="mb-3">
        <label for="formContent" class="form-label">Content</label>
        <textarea name="content" class="form-control" id="formContent" rows="3"></textarea>
    </div>

    <div>
        <button type="submit" name="createPost" class="btn btn-outline-success" value="createContent">Create new post</button>
    </div>
</form>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>