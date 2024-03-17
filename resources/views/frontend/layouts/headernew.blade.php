<!doctype html>
<html lang="en">
    <head>
        <title>Pet Sansar</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link rel="stylesheet" href="{{ asset('frontend/css/whole.css') }}">

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
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
        <style>
            .navbar{
                padding-top: 4px;
                padding-bottom: 5px;
                z-index: 2;
            }
            .nav-items{
               
            }
        </style>
    </head>

    <body>
        <div class="header">
            <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top" data-spy="affix" data-offset-top="197" style="padding-top: 10px; padding-bottom: 10px  z-index:2;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{url('index')}}">Pet Sansar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="nav navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{url('index')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('show_cart')}}">Cart</a>
                            </li>
                            @if (Route::has('login'))
                            @auth
                            <li class="nav-item">
                             {{-- <form method="POST" action="{{ route('logout') }}">
                               @csrf
                           
                               <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   this.closest('form').submit();">
                                   {{ __('Logout') }}
                               </a>
                           </form> --}}
                           <x-app-layout></x-app-layout>
                            </li>
                            @else
                            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                            <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                            @endauth
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
            
            {{-- second navbar begins here --}}

                            
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"  style="top: 55px; z-index:1;">
                <div class="container-fluid">
                    <ul class="navbar-nav">
                        <form class="d-flex my-2 my-lg-0" style="">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownDogs" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dogs
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownDogs">
                                <li><a class="dropdown-item" href="#">shephard</a></li>
                                <li><a class="dropdown-item" href="#">retriever</a></li>
                                <li><a class="dropdown-item" href="#">snoop</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCats" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Cats
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownCats">
                                <li><a class="dropdown-item" href="#">Pharoah</a></li>
                                <li><a class="dropdown-item" href="#">sphynix</a></li>
                                <li><a class="dropdown-item" href="#">local</a></li>
                            </ul>
                        </li> --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBreed" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               Category
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownBreed">
                               
                                <li><a class="dropdown-item" href="#">Toy</a></li>
                                <li><a class="dropdown-item" href="#">Food</a></li>
                                <li><a class="dropdown-item" href="#">Accessories</a></li>
                                <li><a class="dropdown-item" href="#">Medicine</a></li>
                                <li><a class="dropdown-item" href="#">Shelter</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                    
                    
                </div>
            </nav>

        </div>
           












    
    </body>
</html>
