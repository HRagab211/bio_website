<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@extends('panel/header/header')
@section('title','experience')
<section class="py-5">
    <div class="text-center">
        <h2 class="text-capitalize" style = "margin: 30px 0 0 0;">portfolio information</h2>
    </div>
    @include('panel/header/back')
    <div class="py-5">
        <a type="button" class="btn btn-outline-dark" href="myportfolio/create">Add new record</a>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">portfolio title</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        {{$c=1}}
        @foreach($port as $item)
            <tr>
                <th scope="row">{{$c++}}</th>
                <td><a href="{{route('myportfolio.show',$item->id)}}">{{$item->project_name}}</a></td>
                <td><a type="button"  class="btn btn-primary" href="{{route('myportfolio.edit',$item->id)}}">Edit</a> <a type="button" href="{{route('myportfolio.destroy',$item->id)}}" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
        <script>
            let sidebar = document.querySelector(".sidebar");
            let sidebarBtn = document.querySelector(".sidebarBtn");
            sidebarBtn.onclick = function() {
                sidebar.classList.toggle("active");
                if(sidebar.classList.contains("active")){
                    sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
                }else
                    sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
            }
        </script>

        </tbody>
    </table>
</section>
</body>
</html>
