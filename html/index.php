<!DOCTYPE html>
<html lang="ja">


    <head>
        <meta charset="UTF-8">
        <title>PHP CRUD</title>
        <!-- bootstrap css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    </head>


    <body>
        <?php require_once './process.php'; ?>
        <div class="row justify-content-center">
        <form action="process.php" method="POST">
            <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class ="form-control" value="Enter your name">
            </div>
            <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" class="form-control" value="Enter your location">
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary" name="save">Save</button>
            </div>
        </form>
        </div>
        <!-- bootstrap js -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    </body>
</html>