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
    <title>Update</title>
</head>
<body>
    <div class="bg-success p-3">
        <h1 class="text-white">Edit Book</h1>
    </div>
    <div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col-12">
                <div class="form-group mt-4">
                        <label for="name" class="text-secondary">Book ISBN</label>      
                        <input type="text" name="isbn" id="" class="form-control" placeholder="new ISBN">
                </div>
                <div class="form-group mt-4">
                        <label for="name" class="text-secondary">Book Name</label>
                        <input type="text" name="name" id="" class="form-control" placeholder="new book name">
                </div>
                <div class="form-group mt-4">
                        <label for="name" class="text-secondary">Book Author</label>
                        <input type="text" name="author" id="" class="form-control" placeholder="new author">
                </div>
                <div class="form-group mt-4">
                        <label for="name" class="text-secondary">Book Date Added</label>
                        <input type="date" name="added" id="" class="form-control" placeholder="new date">
                </div>
                <div class="form-group mt-4">
                        <label for="name" class="text-secondary">Book Date Published</label>
                        <input type="date" name="published" id="" class="form-control" placeholder="new date">
                </div>
                <div class="form-group mt-4">
                        <label for="name" class="text-secondary">Book Publisher</label>
                        <input type="text" name="publisher" id="" class="form-control" placeholder="new book publisher">
                </div>
                <div class="form-group mt-4">
                        <label for="name" class="text-secondary">Book Publisher</label>
                        <input type="text" name="publisher" id="" class="form-control" placeholder="new book publisher">
                </div>
                <div class="form-group mt-4">
                    <label for="title" class="text-secondary">Edition</label>
                    <select name="text" id="" class="form-control">
                            <option value="webdevelopment"></option>
                    <?php
                        if($studinfo['stud_status'] == 'A'){
                            echo "<option value='1st'>1st Edition</option>";
                            echo "<option value='I'>Inactive</option>";
                        }else{
                            echo "<option value='A'>Active</option>";
                            echo "<option value='I'>Inactive</option>";
                        }
                    ?>
                    </select>
                </div>



            </div>
        </div>


    </form>
    </div>
</body>
</html>