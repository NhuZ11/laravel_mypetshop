
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pet Sansar Admin</title>
    @include('admin.admincss')
     <!-- Bootstrap CSS v5.2.1 -->
     <link
     href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
     rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
     crossorigin="anonymous"
   />
   <style>
    .heading{
        padding-left: 80px;
        font-size: 28px;
    }

    .form_design {
        padding-left: 80px;
        padding-top: 10px;   
        
    }
    .text_color{
        color: black;
        
    }
    label{
        display: inline-block;
        width: 150px;
    }
   
    table, th, td {
        margin-left: 80px;
        padding-left: 20px;
        padding-top: 5px;
        width: 60%;
        border: 3px solid white;
        padding-right:20px;
        
        
        margin-top: 10px;
    }
   </style>
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
</head>
<body>
    <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
        {{-- admin navbar --}}
        @include('admin.navbar')
        <!-- partial -->
     <div class="main-panel">
        <div class="content-wrapper">
            <h1>Dog Products</h1>
            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
                {{ session()->get('message') }}
            </div>
            @endif
            
            <div class="categorytable">
                
                <table>
                    <tr>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th colspan="2" class="text-center">Action</th>
    

                    </tr>
                    
                    @foreach ($product as $products)
                    <tr>
                        @if($products->pet_type=='Dog')
                        <td>{{$products->product_id}}</td>
                        <td>{{$products->product_name}}</td>
                        <td>{{$products->description}}</td>
                        <td>{{$products->quantity}}</td>
                        <td>{{$products->price}}</td>
                        <td>{{$products->discount}}</td>
                        <td>{{$products->Category_name}}</td>
                        <td><a href="/product/{{$products->image}}"><img src="/product/{{$products->image}}" alt=""></a></td>
                        <td><a a onclick="return confirm('Are you sure you want to delete?')" href="{{url('delete_product',$products->product_id)}}" class="btn btn-danger">Delete</a></td>
                        <td><a href="{{url('update_product',$products->product_id)}}" class="btn btn-primary">Edit</a></td>
                        @endif
                        
                    </tr>
                    @endforeach
                    
                </table>
                </div>

    
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
   @include('admin.adminjs')
</body>
</html>
