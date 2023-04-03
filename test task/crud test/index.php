<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Book List</title>
    <style>
        table  td, table th{
        vertical-align:middle;
        text-align:right;
        padding:20px!important;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>Book List</h1>
            <div>
                <a href="create.php" class="btn btn-primary">Add New Book</a>
            </div>
        </header>
        <?php
        session_start();
        if (isset($_SESSION["create"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
        }
        ?>
         <?php
        if (isset($_SESSION["update"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
        }
        ?>
        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
        ?>
        
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>categories</th>
                <th>author_name</th>
                <th>post_status</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
        include('connect.php');

        $query = "SELECT * FROM articles ORDER BY id DESC";
        $statement = $conn->query($query);
        $articles = $statement->fetchAll(PDO::FETCH_OBJ);
        
        foreach($articles as $article){

            ?>
            <tr>
                <td><?php echo $article->id; ?></td>
                <td><?php echo $article->title; ?></td>
                <td><?php echo $article->categories; ?></td>
                <td><?php echo $article->author_name;  ?></td>
                <td><?php echo $article->post_status;  ?></td>
                <td>
                    <a href="view.php?id=<?php echo $article->id; ?>" class="btn btn-info">Read More</a>
                    <a href="edit.php?id=<?php echo $article->id; ?>" class="btn btn-warning">Edit</a>
                    <a href="delete.php?id=<?php echo $article->id; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
        </table>
    </div>
</body>
</html>