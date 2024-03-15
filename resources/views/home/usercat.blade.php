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
            .maincontainer{
                margin-top: 100px;
                margin-left: 90px;
            }
            .container-product{
                display: flex;
                flex-wrap: wrap;
                gap: 30px;
            }
            .card {
                width: 18rem;
                margin-right: 30px;
                margin-bottom: 30px;
            }
        </style>
    </head>

    <body>
        <div class="maincontainer">
            <h1 class="text text-center">Cat products</h1>
            <h1>Products</h1>
            <div class="container-product">
                @foreach ($product as $products)
                @if ($products->pet_type=='Cat')
                <div class="card">
                    <a href="{{url('product_details',$products->product_id)}}"><img src="/product/{{$products->image}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">{{$products->product_name}}</h5>
                        <p class="card-text">{{$products->description}}</p>
                        <p>Price: Rs.{{$products->price}}</p>
                        
                        <form action="{{url('add_cart', $products->product_id)}}" method="POST">
                            @csrf
                            Quantity: <input type="number" name="quantity" id="" min="0" max="{{$products->quantity}}" class="form-control-sm" placeholder="Select Quantity" required>
                            <div class="row" style="padding-top:10px ">
                                <div class="col-sm-6">
                                   
                                    <input type="submit" name="" id="" class="btn btn-primary" value="Add To Cart">
                                </div>
                                <div class="col-sm-6" >
                                    <a href="#" class="btn btn-success">Buy Now</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                    
                @endif
                @endforeach
            </div>
            {{ $product->withQueryString()->links('pagination::bootstrap-5') }}
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
