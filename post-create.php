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
    <?php
     require "connect.php";
     $titleError = '';
     $descError  = '';
     if(isset($_POST['create_post_button'])){
       $title = $_POST['title'];
       $desc   = $_POST['description'];
        if(empty($title)){
            $titleError = "The Title Field is Required";
        }
        if(empty($desc)){
            $descError ="The Description Field is Required";
        }
        if( !empty($title) && !empty($desc)){
            mysqli_query($db,"INSERT INTO posts(title,description) VALUES ('$title','$desc')");
        }
     
     }
    ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <div class="row">
                    <div class="col-md-6">
                    <div class="card-title">Posts Creation Form</div>
                    </div>
                    <div class="col-md-6">
                    <a href="index.php"class="btn btn-secondary float-right"> <-Back</a>
                    </div>
                </div>  
            </div>
            <div class="card-body">
                <form action="post-create.php" method="POST">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text"
                           name="title"
                           class="form-control
                          <?php if($titleError != ''): ?> is-invalid<?php endif ?>"
                           value = "<?php echo $title;?>"
                           placeholder="Enter post title"
                           >
                    <span class="text-danger"><?php echo $titleError ?></span>
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea 
                    name="description"
                    class="form-control
                    <?php if($descError != ''): ?> is-invalid<?php endif ?>"
                    placeholder="Description...">
                    <?php echo $desc;?>
                    </textarea>
                    <span class="text-danger"><?php echo $descError ?></span>
                </div>
                
            </div>
            <div class="card-footer">
               <button type ="submit" name="create_post_button" class="btn btn-primary">Create</button>
            </div>
        </form>
        </div>
        </div>
   </div>
</div> 


   <!-- BootStrap Js -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha512-8qmis31OQi6hIRgvkht0s6mCOittjMa9GMqtK9hes5iEQBQE/Ca6yGE5FsW36vyipGoWQswBj/QBm2JR086Rkw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>