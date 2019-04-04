<?php
require_once '../classes/bookDAO.php';
$bookDAO = new BookAccessObject;
$post = $bookDAO->retrieveBook();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Retrieve</title>
</head>
<body>
    <div class=" bg-primary text-white p-5">
        <h1>Book Reted</h1>
    </div>
    <div class="container mt-5">
        <table class="m-auto table-striped col-12 ">
            <thead>
                <th class="bg-dark text-white text-center ">ISBN</th>
                <th class="bg-dark text-white text-center">Name</th>
                <th class="bg-dark text-white text-center">Author</th>
                <th class="bg-dark text-white text-center">Added Date</th>
                <th class="bg-dark text-white text-center">Published Date</th>
                <th class="bg-dark text-white text-center">Publisher</th>
                <th class="bg-dark text-white text-center">Edition</th>
                <th class="bg-dark text-white text-center">Type</th>
                <th class="bg-dark text-white text-center">Status</th>
                <th><button type="submit" class="btn btn-danger float-right" name="delete">Delete</button></th>
                <th><button type="submit" class="btn btn-warning float-right" name="edit">Edit</button></th>
            </thead>
            <tbody>
                <?php
                    foreach($post as $key=>$values){
                        echo "<tr>";
                            echo "<td>" .$values['book_ISBN']. "</td>";
                            echo "<td>" .$values['book_name']. "</td>";
                            echo "<td>" .$values['book_author']. "</td>";
                            echo "<td>" .$values['book_date_added']. "</td>";
                            echo "<td>" .$values['book_date_published']. "</td>";
                            echo "<td>" .$values['book_publisher']. "</td>";
                            echo "<td>" .$values['book_edition']. "</td>";
                            echo "<td>" .$values['book_type']. "</td>";
                            echo "<td>" .$values['book_status']. "</td>";
                    }
                ?>
            </tbody>
        </table>
        
    </div>
    
</body>
</html>