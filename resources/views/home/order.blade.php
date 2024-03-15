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
            .main{
                margin-top: 105px;
                margin-left: 90px;
                margin-bottom: 20px;
            }
        </style>
    </head>

    <body>
        <div class="main">
           <h1>Proceed to payment</h1>
           <table>
            <tr>
                <th>Product Name</th>
                <th>Product Quantity</th>
                <th>Price</th>
                <th>Image</th>
                <th colspan="2">Action</th>

            </tr>
            @foreach($orders as $ord)
            <tr>
                
                <td>{{$ord->product_name}}</td>
                <td>{{$ord->quantity}}</td>
                <td>{{$ord->price}}</td>
                <td><img class="table-image" src="/product/{{$ord->image}}"></td>
                <td class="action">
                <form action="{{url('/remove_cart',$ord->cart_id)}}" method="post">
                    @csrf
                    <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to remove it?')" value="Remove">
                    
                    
                </form>
                <form action="{{url('/order_product',$ord->cart_id)}}" method="post">
                    @csrf
                    <input type="submit" class="btn btn-success" name="" id="" value="Buy">
                    
                </form>
               </td>

               

            </tr>
            @endforeach
        </table>
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