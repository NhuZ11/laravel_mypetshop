@extends('frontend.layouts.main')

@section('main-container')

    
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
  />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="{{ asset('frontend/css/whole2.css') }}">

  </head>

  <body>
       <!-- below is for the sliding image or carousel  -->
       <div class="firstpart">
        <div class="row g-0">
          <div class="col-lg-6 vh-100">.
              <img src="{{url('frontend/images/Pink and Yellow Playful Pet Shop Promo Instagram Post.png')}}" alt="ad" class="advert">
          </div>
          <div class="col-lg-6 vh-100">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
            
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="{{url('frontend/images/pexels-lumn-406014.jpg')}}" alt="" position="relative">
                  <div class="carousel-caption">
                    <h1 class="text-center">hey whats up</h1>
                  </div>
                </div>
            
                <div class="item">
                  <img src="{{url('frontend/images/pexels-helena-lopes-1378849.jpg')}}" >
                </div>
            
                <div class="item">
                  <img src="{{url('frontend/images/pexels-rk-jajoria-1189673.jpg')}}" alt="dog">
                </div>
              </div>
            
              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
       </div>
  
       <div class="flex-container">
        <h1 class="bg-success">Select your pet</h1>
       </div>
       <div class="second-container">
        <div class="row">
          <div class="col-md-3 ">
            <div class="thumbnail">
              <a href="#">
                <img src="{{url('frontend/images/pexels-poodles-doodles-1458916.jpg')}}" alt="dog" style="width:100%">
                <div class="info">
                  <p class="text-center">Dogs</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="thumbnail">
              <a href="/w3images/nature.jpg">
                <img src="{{url('frontend/images/pexels-maree-zimny-2759566.jpg')}}" alt="cat" style="width:100%">
                <div class="caption">
                  <p class="text-center">Cats</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="thumbnail">
              <a href="/w3images/fjords.jpg">
                <img src="{{url('frontend/images/pexels-guillaume-meurice-1894349.jpg')}}" alt="fish" style="width:100%">
                <div class="caption">
                  <p class="text-center">Aquarium</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="thumbnail">
              <a href="/w3images/fjords.jpg">
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

      
      
  
      

