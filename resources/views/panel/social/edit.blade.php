@extends('panel/header/header')
@section('title','add experience')
<section class="py-5">
    <div class="container">
        <div class="text-center">
            <h2 class="text-capitalize" style = "margin:30px 0 0 0">add Social media information</h2>
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
        <form method="POST" action="{{route('social.update',$updated->id)}}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Social Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$updated->social_name}}" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Social Link</label>
                <input type="text" name="link" class="form-control" id="exampleInputPassword1" value="{{$updated->social_link}}">
            </div>

            <button type="submit" name="btn_clicked" class="btn btn-primary">Update info</button>
            <a type="button" href="/social" class="btn btn-outline-secondary">back</a>
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
