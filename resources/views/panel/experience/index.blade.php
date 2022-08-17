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
        <h2 class="text-capitalize" style = "margin: 30px 0 0 0;">experiences information</h2>
    </div>
    @include('panel/header/back')
    <div class="py-5">
        <a type="button" class="btn btn-outline-dark" href="add/experience">Add new record</a>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">job title</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
{{$c=1}}
       @foreach($experiences as $item)
           <tr>
               <th scope="row">{{$c++}}</th>
               <td><a href="{{route('experience.item',$item->id)}}" >{{$item->job_title}}</a></td>
               <td><a type="button"  class="btn btn-primary" href="{{route('experience.edit',$item->id)}}">Edit</a> <a type="button" href="{{route('exp.delete',$item->id)}}" class="btn btn-danger">Delete</a></td>
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
