@include('panel/header/sidebar')
@include('panel/header/image')
      <main>
        <a href="{{route('index')}}" class="home-button"><span class="fa fa-home"></span></a>
        <h1 class="mb-5">Contact Me</h1>
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
        <form action="{{route('contact.store')}}" method="post">
            @csrf
            <div class="row mb-4">
            <div class="col-md-12">
              <input type="text" name="name" class="form-control" placeholder="Full Name">
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-md-12">
              <input type="text" name="email" class="form-control" placeholder="Email Address">
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-md-12">
              <input type="text" name="phone" class="form-control" placeholder="Phone">
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-md-12">
              <textarea name="desc" id="" class="form-control" placeholder="Write some words of encouragement" cols="30" rows="10"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <input type="submit" class="btn btn-primary btn-block" value="Send Message">
            </div>
          </div>

        </form>

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
