<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>COMIC</title>
</head>
<body>
    <div class="container" style="margin-top:50px">
        <div class="row">
            <div class="col-md-3">
                <div class="row">
                   <h4>HOME</h4>
                </div>
                <div class="row">
                    <a href="{{route('cates.index')}}">Category</a>
                </div>
                <div class="row">
                    <a href="{{route('comics.index')}}">Comic</a>
                </div>
            </div>
            <div class="col-md-9">
                <div>
                @yield('content')
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>