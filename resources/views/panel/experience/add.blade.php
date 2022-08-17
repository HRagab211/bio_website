@extends('panel/header/header')
@section('title','add experience')
<section class="py-5">
    <div class="container">
        <div class="text-center">
            <h2 class="text-capitalize" style = "margin:30px 0 0 0">add experience information</h2>
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
        <form method="POST" action="{{route('experience.store')}}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">job title</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="{{old('title')}}" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Experience period</label>
                <input type="text" name="period" class="form-control" id="exampleInputPassword1" value="{{old('period')}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" >job description</label>
                <textarea row=3 name="desc" class="form-control" id="exampleInputPassword1">{{old('desc')}} </textarea>
            </div>

            <button type="submit" name="btn_clicked" class="btn btn-primary">add info</button>
            <a type="button" href="/experience" class="btn btn-outline-secondary">back</a>
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
