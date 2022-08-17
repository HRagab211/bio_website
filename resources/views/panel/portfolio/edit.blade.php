@extends('panel/header/header')
@section('title','add experience')
<section class="py-5">
    <div class="container">
        <div class="text-center">
            <h2 class="text-capitalize" style = "margin:30px 0 0 0">Update portfolio information</h2>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="PUT" action="{{route('myportfolio.update',$port->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Project name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$port->project_name}}" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"> Image </label>
                <input type="file" name="image" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Project link</label>
                <input type="text" name="link" class="form-control" id="exampleInputPassword1" value="{{$port->project_link}}">
            </div>
            <button type="submit" name="btn_clicked" class="btn btn-primary">Update info</button>
            <a type="button" href="/portfolio" class="btn btn-outline-secondary">back</a>
        </form>

    </div>
</section>
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
</div>
</section>
</body>

</html>
