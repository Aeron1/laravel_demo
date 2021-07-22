<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="/employees" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter Email ID" name="email">
            </div>

            <div class="form-group">
                <label>Post</label>
                <input type="text" class="form-control" placeholder="Enter Post" name="post">
            </div>

            <div class="form-group">
                <div class="custom-file">
                    <label class="custom-file-label">Choose File</label>
                    
                    <input type="file" class="custom-file-input" name="image">
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm mt-4">Save Data</button>


        </form>
    </div>
    
</body>
</html>