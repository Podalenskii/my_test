<?php
$id = $_GET['id'];
require 'database/QueryBuilder.php';
$db = new QueryBuilder;
$tasks = $db->getTask($id);

?>
<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Edit Task</h1>
                    <form action="update.php?id=<?= $task['id'];?>" method="post">
                        
                        <div class="from-group">
                            <input type="text" name="title" class="form-control" value="<?= $task['title'];?>">
                        </div>
                        
                        <div class="from-group">
                            <textarea name="content" class="form-control"><?= $task['content'];?></textarea>
                        </div>
                        
                        <div class="from-group">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </form>
                </div>    
            </div>
        </div>    
    </body>
</html>


