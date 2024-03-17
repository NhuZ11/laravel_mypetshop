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
        <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
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
            table {
               text-align: center; /* Center align text within table cells */
               width: 70%; /* Make the table take full width of its container */
            }
            table,th,td{
                border: 1px solid grey;
                align-items: center;
                font-size: 20px;
                font-weight: bold;
            }
            th{
                font-size: 18px;
                padding: 5px;
                background: skyblue;
            }
            .table-image{
                height: 200px;
                width: 200px;
                padding: 5px;   
                display: block; /* To center the image */
                margin: 0 auto; /* To center the image */
                
            }
            .khaltilogo{
                margin-top: 4px; 
                width: 150px;
                height: 100px;
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
                <td>Rs. {{$ord->price}}</td>
                <td><img class="table-image" src="/product/{{$ord->image}}"></td>
                <td class="action">
                    
                <form action="{{url('/delivery')}}" method="post">
                    @csrf
                    <input type="submit" class="btn btn-primary" onclick="return confirm('Delivery charges are added')" value="Cash On Delivery">
                     
                </form>

                <form action="{{url('/pay')}}" method="post">
                    @csrf
                    <input type="hidden" name="order_id" value="{{$ord->order_id}}">
                    <input type="hidden" name="name" value="{{$ord->name}}">
                    <input type="hidden" name="email" value="{{$ord->email}}">
                    <input type="hidden" name="productname" value="{{$ord->product_name}}">
                    <input type="hidden" name="user_id" value="{{$ord->user_id}}">
                    <input type="hidden" name="price" value="{{$ord->price}}">
                    <button type="submit"> <img class="khaltilogo" src="{{url('frontend/images/esewa.png')}}" alt=""></button> 
                </form>
                <button id="payment-button">
                    <img class="khaltilogo" src="{{url('frontend/images/download.png')}}" alt=""></button>

               </td>

               

            </tr>
            <tr>
                <td colspan="2">Total Amount</td>
                <td>Rs. {{$ord->price}}</td>
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

        <script>
            var config = {
                // replace the publicKey with yours
                "publicKey": "test_public_key_dc74e0fd57cb46cd93832aee0a390234",
                "productIdentity": "1234567890",
                "productName": "Dragon",
                "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
                "paymentPreference": [
                    "KHALTI",
                    "EBANKING",
                    "MOBILE_BANKING",
                    "CONNECT_IPS",
                    "SCT",
                    ],
                "eventHandler": {
                    onSuccess (payload) {
                        // hit merchant api for initiating verfication
                        console.log(payload);
                    },
                    onError (error) {
                        console.log(error);
                    },
                    onClose () {
                        console.log('widget is closing');
                    }
                }
            };
    
            var checkout = new KhaltiCheckout(config);
            var btn = document.getElementById("payment-button");
            btn.onclick = function () {
                // minimum transaction amount must be 10, i.e 1000 in paisa.
                checkout.show({amount: 1000});
            }
        </script>
    </body>
</html>

@endsection