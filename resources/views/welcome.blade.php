<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Mynotepaper.com</title>
</head>
<body>

<div class="container" style="margin-top: 50px;">
    <div class="text-center">
        <h4>Welcome to mynotepaper.com</h4><br>
        <a href="{{url('upload_file')}}">Upload File</a>
    </div>
</div>
</body>
</html>
