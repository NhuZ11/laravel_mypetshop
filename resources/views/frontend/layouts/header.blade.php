{{-- <x-app-layout>
 
</x-app-layout> --}}


<!doctype html>
<html lang="en">
    <head>
        
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
      <link rel="stylesheet" href="{{ asset('frontend/css/whole.css') }}">

    </head>
    

    <body>
        <div class="header">
            <nav class="navbar navbar-fixed-top first-navbar" data-spy="affix" data-offset-top="197">
              <!-- code for first nav bar -->
              <nav class="navbar navbar-inverse ">
              <div class="container-fluid">
                 <div class="navbar-header">
               <a class="navbar-brand logo" href="#">Pet Sansar</a>
               </div>
              <ul class="nav navbar-nav navbar-right">
               <li class="nav-item active"><a href="#">Homepage</a></li>
               <li class="nav-item"><a href="#"><span class="glyphicon glyphicon-phone"></span></a></li>
               <li class="nav-item"><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
               
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
              
               </li>
               @else
               <li class="nav-item"><a href="{{ route('login') }}">Login</a></li>
               <li class="nav-item"><a href="{{ route('register') }}">Register</a></li>
               @endauth
               @endif
             </ul>
            
             </div>
             </nav>
         
             <!-- This part belong to second navbar -->
             <nav class="navbar second-navbar">
               <div class="container-fluid">   
                 <ul class="nav navbar-nav ">
                   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Dogs <span class="caret"></span></a>
                       <ul class="dropdown-menu dropdown-menu-dark">
                         <li><a href="#">shephard</a></li>
                         <li><a href="#">retriever</a></li>
                         <li><a href="#">snoop</a></li>
                       </ul>
                       
                    </li>
                     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cats <span class="caret"></span></a>
                       <ul class="dropdown-menu">
                         <li><a href="#">Pharoah</a></li>
                         <li><a href="#">sphynix</a></li>
                         <li><a href="#">local</a></li>
                       </ul>
                     </li>
                     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Select By Breed<span class="caret"></span></a>
                       <ul class="dropdown-menu">
                         <li><a href="#">Page 1-1</a></li>
                         <li><a href="#">Page 1-2</a></li>
                         <li><a href="#">Page 1-3</a></li>
                       </ul>
                     </li>
                     
                  </ul>
                  <form class="navbar-form navbar-right" action="/action_page.php">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                  </form>
               </div>
             </nav>
            </nav>
           </div>
        
      
    </body>
</html>

