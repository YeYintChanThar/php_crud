<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            padding:50px;
        }
    </style>
    <title>Document</title>
</head>
<body>
   <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                    <div class="card-title">Posts List</div>
                    </div>
                    <div class="col-md-6">
                    <a href="post-create.php"class="btn btn-primary float-right">+ Add New</a>
                    </div>
                </div>         
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>html</td>
                        <td>It is Hyper Type markup Language</td>
                        <td>
                            <a href="">Edit</a> |
                            <a href="">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

            </div>
        </div>
    </div>
   </div> 


   <!-- BootStrap Js -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha512-8qmis31OQi6hIRgvkht0s6mCOittjMa9GMqtK9hes5iEQBQE/Ca6yGE5FsW36vyipGoWQswBj/QBm2JR086Rkw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>