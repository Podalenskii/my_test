<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Create Task</h1>
                    <form action="store.php" method="post">
                        
                        <div class="from-group">
                            <input type="text" class="form-control" name="title">
                        </div>
                        
                        <div class="from-group">
                            <textarea name="content" class="form-control"></textarea>
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


