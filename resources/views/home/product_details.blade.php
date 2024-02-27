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
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <style>
            .container{
                padding-top: 100px;
            }

            .card {
                width: 18rem;
                margin-right: 30px;
                margin-bottom: 30px;
            }
            .second-container{
                font-size: 32px;
                text-align: left;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h1>{{$product->product_name}}</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="/product/{{$product->image}}" class="card-img-top" alt="...">
                       
                        <div class="card-body">
                          <p class="card-text">Price: Rs.{{$product->price}}</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-8 second-container">
                    <p>Price: Rs.{{$product->price}}</p>
                    <p>Availabe Quantity: {{$product->quantity}}</p>
                    <p>Description: {{$product->description}}</p>
                    <form action="">
                        @csrf
                        Quantity: <input type="number" name="" id="" min="0" class="form-control-sm" placeholder="Select Quantity">
                        <div class="row" style="padding-top:10px ">
                            <div class="col-sm-3">
                                <a href="#" class="btn btn-primary">Add To Cart</a>
                            </div>
                            <div class="col-sm-2" >
                                <a href="#" class="btn btn-success">Buy Now</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <div>
                <h3>Reviews:</h3>
            </div>
           
        </div>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

@endsection