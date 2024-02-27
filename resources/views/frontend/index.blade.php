@extends('frontend.layouts.main')
@section('main-container')
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.1/css/bootstrap.min.css">

    <!-- Bootstrap Bundle JS (includes Popper) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.2.1/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('frontend/css/whole.css') }}">
</head>
<body>
    <!-- Sliding image or carousel -->
    <div class="firstpart">
        <div class="row g-0">
            <div class="col-lg-6 vh-100">
                <img src="{{url('frontend/images/Pink and Yellow Playful Pet Shop Promo Instagram Post.png')}}" alt="ad" class="advert img-fluid">
            </div>
            <div class="col-lg-6 vh-100">
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                        <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                    </ol>
                    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{url('frontend/images/pexels-lumn-406014.jpg')}}" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="text-center">hey whats up</h1>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{url('frontend/images/pexels-helena-lopes-1378849.jpg')}}" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="{{url('frontend/images/pexels-rk-jajoria-1189673.jpg')}}" class="d-block w-100" alt="dog">
                        </div>
                    </div>
                    
                    <!-- Left and right controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="flex-container">
        <h1 class="bg-primary">Select your pet</h1>
    </div>

    <div class="second-container">
        <div class="row">
            <div class="col-md-3 ">
              <div class="thumbnail">
                <a href="{{url('dog')}}">
                  <img src="{{url('frontend/images/pexels-poodles-doodles-1458916.jpg')}}" alt="dog" style="width:100%">
                  <div class="info">
                    <p class="text-center">Dogs</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-3 ">
              <div class="thumbnail">
                <a href="{{url('cat')}}">
                  <img src="{{url('frontend/images/pexels-maree-zimny-2759566.jpg')}}" alt="cat" style="width:100%">
                  <div class="caption">
                    <p class="text-center">Cats</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-3 ">
              <div class="thumbnail">
                <a href="{{url('aquarium')}}">
                  <img src="{{url('frontend/images/pexels-guillaume-meurice-1894349.jpg')}}" alt="fish" style="width:100%">
                  <div class="caption">
                    <p class="text-center">Aquarium</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-3 ">
              <div class="thumbnail">
                <a href="{{url('bird')}}">
                  <img src="{{url('frontend/images/pexels-andré-lisatchok-2226006.jpg')}}" alt="parrot" style="width:100%">
                  <div class="caption">
                    <p class="text-center">Birds</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
       
    </div>
</body>
</html>

@endsection  