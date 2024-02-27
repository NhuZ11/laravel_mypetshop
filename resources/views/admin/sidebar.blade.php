@include('admin.admincss')
@include('admin.adminjs')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous"
    />
    <style>
      .nav-link {
            font-size: 16px !important; 
        }
      
    </style>
</head>
<body>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="admin/assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <!-- Your profile content goes here -->
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="index.html">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        {{-- This below is for pet type --}}
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Pet Types</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{url('view_dog')}}">Dogs</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('view_cat')}}">Cats</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('view_aquarium')}}">Aquarium</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('view_bird')}}">Birds</a></li>
                </ul>
            </div>
        </li>
        {{-- End: pet type --}}

       
        
        {{-- Start view Category --}}
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('view_category')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Category</span>
            </a>
        </li>
        {{-- End: View Category --}}

        {{-- this below is for show product category --}}
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Show Products</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{url('show_dogproduct')}}">Dogs</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('show_catproduct')}}">Cats</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('show_aquariumproduct')}}">Aquarium</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('show_birdproduct')}}">Birds</a></li>
                </ul>
            </div>
        </li>

     
        <li class="nav-item menu-items">
            <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="menu-icon">
                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">Charts</span>
            </a>
        </li>
       
       
      
    </ul>
</nav>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"
></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"
></script>
</body>
</html>
