@extends('panel/header/header')
    <section class="py-5">
        <div class="container">
            <div class="text-center">
                <h2 class="text-capitalize">Messages</h2>
                <p>
                <h3>to view message click on user name</h3>
                </p>
            </div>



                <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">user Name</th>
                    <th scope="col">Sent Date</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
            {{$c=1}}
                @foreach($messages as $mes)
                <tr>
                    <th scope='row'>{{$c++}}</th>
                    <td><h3><a href='{{route('message.item',$mes->id)}}'>{{$mes->Name}}</a></h3></td>
                    <td>{{$mes->created_at}}</td>
                    <td><a type='button' href='{{route('message.delete',$mes->id)}}' class='btn btn-danger'>X</a></td>
                </tr>
                @endforeach

                  </tbody>
            </table>
                    <h4></h4>


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
