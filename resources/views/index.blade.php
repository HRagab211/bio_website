
       @include('panel/header/sidebar')
       @include('panel/header/image')
        <main>
            <h1 class="mb-0">Hi, I'm {{$bios->name}}</h1>
            <div class="mb-5">
                <p class="lead mb-3">{{$bios->job_title}}</p>
                <p>{{$bios->desc}}</p>
            </div>

            <p>
                @foreach($social as $s)
                <a href="{{$s->social_link}}" class="mr-2 mb-2">{{$s->social_name}}</a>
                @endforeach
            </p>
{{--           <h2 class="mb-4 mt-5">Services</h2>--}}
{{--        <div class="row">--}}
{{--          <div class="col-md-6 col-lg-6 mb-4">--}}
{{--            <div class="media custom-media  d-block">--}}
{{--              <div class="icon mr-3"><span class="ion-android-cart"></span></div>--}}
{{--              <div class="media-body">--}}
{{--                <h3 class="mt-0"><a href="#">eCommerce Websites</a></h3>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed obcaecati totam.</p>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-md-6 col-lg-6 mb-4">--}}
{{--            <div class="media custom-media  d-block">--}}
{{--              <div class="icon mr-3"><span class="ion-bonfire"></span></div>--}}
{{--              <div class="media-body">--}}
{{--                <h3 class="mt-0"><a href="#">Branding Identity </a></h3>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed obcaecati, totam.</p>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="col-md-6 col-lg-6 mb-4">--}}
{{--            <div class="media custom-media  d-block">--}}
{{--              <div class="icon mr-3"><span class="ion-videocamera"></span></div>--}}
{{--              <div class="media-body">--}}
{{--                <h3 class="mt-0"><a href="#">Video Editing</a></h3>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed obcaecati totam.</p>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="col-md-6 col-lg-6 mb-4">--}}
{{--            <div class="media custom-media  d-block">--}}
{{--              <div class="icon mr-3"><span class="ion-cube"></span></div>--}}
{{--              <div class="media-body">--}}
{{--                <h3 class="mt-0"><a href="#">Web Applications </a></h3>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed obcaecati, totam.</p>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--    </div>--}}

    </main>
    </div>

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
