<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form action="/task" method="POST" role="form">
    @csrf
        <legend>Form title</legend>
    
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title">
        </div>
            <br>
        <div class="form-group">
        <label for="body"></label>
            <textarea name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
        </div>
    
        
    
        <button type="submit" class="btn btn-primary">Publish</button>
    </form>
    </div>
</body>
</html>