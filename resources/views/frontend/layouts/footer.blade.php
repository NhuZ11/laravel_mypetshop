<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.1/css/bootstrap.min.css">
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
    <!-- Bootstrap Bundle JS (includes Popper) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.2.1/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('frontend/css/whole.css') }}">
    <style>
      .paylogo{
        height: 60px;
        width: 120px;

      }
    </style>
</head>
<body>
    <div class="footer">
        <!-- Feature part of the footer -->
        <div class="features">
            <div class="container">
                <h3 class="text-center" style="padding-top: 20px;">Our Features</h3>
                <div class="row">
                    <div class="col-lg-3">
                        <a href="https://upaya.com.np/">Home Delivery</a>
                        <p>We deliver product to Home</p>
                    </div>
                    <div class="col-lg-3">
                        <a href="https://cityvetnepal.com/">Vet Consultant</a>
                        <p>Pet Health is important</p>
                    </div>
                    <div class="col-lg-3">
                        <a href="https://katcentre-nepal.org/">Pet Adoption</a>
                        <p>Find Home Sweet Home</p>
                    </div>
                    <div class="col-lg-3">
                        <a href="https://medvetpharma.com/">Pharmacy</a>
                        <p>Know your pet medicine</p>
                    </div>
                </div>
            </div>
        </div>

        <hr class="solid"> <!-- Solid line -->

        <!-- Another part of the footer -->
        <div class="moreinfo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <h3>Explore</h3>
                        <ul class="list-unstyled">
                            <li><a href="{{url('underprogress')}}">FAQ</a></li>
                            <li><a href="{{url('aboutus')}}">About Us</a></li>
                            <li><a href="{{url('underprogress')}}">Blogs</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3">
                        <h3>Payment</h3>
                        <ul class="list-unstyled">
                            <li><button> <img class="paylogo" src="{{url('frontend/images/esewa.png')}}" alt=""></button></li>
                            <li> <button id="payment-button">
                                <img class="paylogo" src="{{url('frontend/images/download.png')}}" alt=""></button>
                              </li>
                          
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h3>Find Us</h3>
                        <ul class="list-unstyled">
                            <li><a href="https://www.facebook.com/">Facebook</a></li>
                            <li><a href="https://www.instagram.com/">Instagram</a></li>
                            <li><a href="https://www.linkedin.com/">LinkedIn</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




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
