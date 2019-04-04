<?php
    require_once '../classes/bookDAO.php';
    $bookDAO = new BookAccessObject;
    if(isset($_POST['add'])){
        //posts variables
        $book_ISBN = $_POST['isbn'];
        $book_name = $_POST['name'];
        $book_author = $_POST['author'];
        $book_date_added = $_POST['dateadded'];
        $book_date_published = $_POST['datepublished'];
        $book_publisher = $_POST['publisher'];
        $book_edition = $_POST['edition'];
        $book_type = $_POST['type'];
        $book_status = $_POST['status'];
        
        $result = $bookDAO->addBook($book_ISBN, $book_name, $book_author, $book_date_added, $book_date_published, $book_publisher, $book_edition, $book_type, $book_status);
        header('Location: retrievecategory.php');
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="posts.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
    <form action="" method = "post">
        <div class="row">
            <div class="col-8 m-auto opacity-1 bg-light text-dark">
            <div class="form-group">
                <label for="text">BOOK ISBN:</label>
                <input type="text" name="isbn" id="" class="form-control form-control-lg" required>
            </div>
            <div class="form-group">
                <label for="text">Book Name:</label>
                <input type="text" name="name" id="" class="form-control form-control-lg" required>
            </div>
            <div class="form-group">
                <label for="text">Book Author</label>
                <input type="text" name="author" id="" class="form-control form-control-lg" required>
            </div>
            <div class="form-group">
                <label for="dateadded">Book Date Added:</label>
                <input type="date" name="dateadded" id="" class="form-control form-control-lg" required>
            </div>
            <div class="form-group">
                <label for="datepublished">Book Date Published:</label>
                <input type="date" name="datepublished" id="" class="form-control form-control-lg" required>
            </div>
            <div class="form-group">
                <label for="text">Book Publisher:</label>
                <input type="text" name="publisher" id="" class="form-control form-control-lg" required>
            </div>
            <div class="form-group">
                <label for="edition">Book Edition</label>
                <select name="edition" id="" class="form-control">
                    <option value="1st" name="edition">1st Edition</option>
                    <option value="2nd" name="edition">2nd Edition</option>
                    <option value="3rd" name="edition">3rd Edition</option>
                    <option value="special" name="edition">Special Edition</option>
                    <option value="full" name="edition">Full Edition</option>
                </select>
            </div>
            <div class="form-group">
                <label for="type">Book Type</label>
                <select name="type" id="" class="form-control">
                    <option value="science" name="type">Science</option>
                    <option value="romance" name="type">Romance</option>
                    <option value="tribia" name="type">Tribia</option>
                    <option value="law" name="type">Law</option>
                    <option value="computer" name="type">Computer</option>
                    <option value="language" name="type">Language</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Book Status</label>
                <select name="status" id="" class="form-control">
                    <option value="u">Usable</option>
                    <option value="s">Slightly Usable</option>
                    <option value="n">Not Usable</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="add">Save</button>
        </div>
    </form>
    </div>
</body>
</html>