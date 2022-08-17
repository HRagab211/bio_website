@include('panel/header/sidebar')
<aside style="background-image: url(img/profile_big.jpg);"></aside>
      <main>
        <a href="{{route('index')}}" class="home-button"><span class="fa fa-home"></span></a>
        <h1 class="mb-5">Experience</h1>
        <div class="mb-5">
          <ul class="resume-list">
          @foreach($exp as $item)
                  <li>
                      <h3>{{$item->job_title}}</h3>
                      <p class="date">{{$item->Experience_period}}</p>
                      <p>{{$item->job_description}}</p>
                  </li>
              @endforeach
          </ul>
        </div>


        <h1 class="mb-5">Education</h1>
        <div class="mb-5">
          <ul class="resume-list">
      @foreach($edu as $item)
                  <li>
                      <h3>{{$item->University}}</h3>
                      <p class="date">{{$item->From}} - {{$item->To}}</p>
                      <p>{{$item->desc}}</p>
                  </li>

              @endforeach
          </ul>
        </div>

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
