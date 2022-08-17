<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>{{$port->project_name}}</title>
    <style>
        h1,h2{
            text-align: center;
            color: red;
        }
        .b{
            text-align: center;
            margin-inline-end: fill;
        }

    </style>
</head>
<body>

<h1>    {{$port->project_name}}</h1>
<img src="{{asset('uploads/portfolio_images/'.$port->image)}}" class="rounded mx-auto d-block" awidth="500" height="600">
<h4 class="b">Link:<a href="{{$port->project_link}}">{{$port->project_link}}</a></h4>
<a href="/myportfolio" class="btn btn-primary" role="button" data-bs-toggle="button">Back</a>
</body>
</html>
