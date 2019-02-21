<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <div class="container">
    <br>
        <form action="/updatetasks" method="POST">
        {{ csrf_field() }}
            <input type="text" class="form-control" name="task" value="{{$taskdata->task}}"> <br>
            <input type="hidden" name="id" value="{{$taskdata->id}}">
            <input type="submit" class="btn btn-warning" value="Update">&nbsp;&nbsp;
            <input type="button" class="btn btn-danger" value="Cancel">
        </form>
    </div>
</body>
</html>