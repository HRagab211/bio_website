<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>{{$edu->University}}</title>
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

<h1>{{$edu->University}}</h1>
<h2> From {{$edu->From}} - To {{$edu->To}} </h2>
<h4 class="b">{{$edu->desc}}</h4>
<a href="/education" class="btn btn-primary" role="button" data-bs-toggle="button">Back</a>
</body>
</html>
