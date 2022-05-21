<?php
require('dbconnect.php');

$stmt = $pdo->query("SELECT * FROM posts");
$posts = $stmt->fetchAll();
echo "<pre>";
print_r($posts);
echo "</pre>"; 
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Admin</1>

<form id="forms" action="" method="POST">
        <input type="text" name="title" placeholder="Title"><br>
        <input type="text" name="author" placeholder="Author"><br>
        <input type="text" name="sontent" placeholder="Content"><br>
        <input type="submit" name="addPost" value="Create new post"><br>
    </form>

<table id="posts-tbl">
    <thead>
        <tr>
            <th>Title</th>
            <th>content</th>
            <th>author</th>
            <th>published_date</th>
            
        </tr>
    </thead>

<tbody>
    <?php foreach ($posts as $post) { ?>
                <tr>
                    <td><?=htmlentities($post['title']) ?></td>
                    <td><?=htmlentities($post['content']) ?></td>
                    <td><?=htmlentities($post['author']) ?></td>
                    <td><?=htmlentities($post['published_date']) ?></td>

                    <td>
                        <form action="" method="POST">
                            <input type="hidden" name="employeeId" value="<?=$employee['id'] ?>">
                            <button>Delete</button>
                        </form>
                    </td>
                </tr>
            <?php }?>
    </tbody>   

</table>



</body>
</html>