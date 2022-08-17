
@extends('panel/header/header')
@section('title','Panel')

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">bio information</h5>
                            <h6 class="card-subtitle mb-2 text-muted">change information</h6>
                            <p class="card-text">this feature make you change easily your info in website.</p>
                            <a href="{{route('bio.index')}}" class="card-link">Go to this feature</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">eduction information</h5>
                            <h6 class="card-subtitle mb-2 text-muted">change information</h6>
                            <p class="card-text">this feature make you change easily your education info in website.</p>
                            <a href="/education" class="card-link">Go to this feature</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">experience information</h5>
                            <h6 class="card-subtitle mb-2 text-muted">change information</h6>
                            <p class="card-text">this feature make you change easily your experience in website.</p>
                            <a href="experience" class="card-link">Go to this feature</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">portfolio information</h5>
                            <h6 class="card-subtitle mb-2 text-muted">change information</h6>
                            <p class="card-text">this feature make you change easily your portfolio in website.</p>
                            <a href="/myportfolio" class="card-link">Go to this feature</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">social media</h5>
                            <h6 class="card-subtitle mb-2 text-muted">change social media information</h6>
                            <p class="card-text">this feature make you change easily your social media in website..</p>
                            <a href="#" class="card-link">Go to this feature</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">show contacts</h5>
                            <h6 class="card-subtitle mb-2 text-muted">disply contacts list</h6>
                            <p class="card-text">this feature make you show easily how contact you in website.</p>
                            <a href="{{route('messages.all')}}" class="card-link">Go to this feature</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

</body>

</html>
