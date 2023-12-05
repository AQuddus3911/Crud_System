<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method= "post" enctype="multipart/form-data" action="{{url('/upload')}}">
        @csrf
        <div class= "container">
            <div class="form-group  mt-2">
                <label for="" >File</label>
                <input type="file" name="image" id="" class="form-control" placeholder="" aria-describedly="helped">
</div>
<button>Upload</button>
</div>
</form>
</body>
</html>