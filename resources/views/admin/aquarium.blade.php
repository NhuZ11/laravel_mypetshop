
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
            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
                {{ session()->get('message') }}
            </div>
              
            @endif
            <h1 class="heading">Add Aquarium Product</h1>
            <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data" class="form_design">
                @csrf
            <input type="text" name="pet_type" value="Aquarium" aria-hidden="true" style="display: none;">
            <label>Product Name:</label>
            <input type="text" name="product_name" placeholder="Product Name" class="text_color" required=""><br>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" class="text_color"><br>
            <label>Price</label>
            <input type="number" name="price" placeholder="Price" class="text_color" min="0" required=""><br>
            <label>Quantity</label>
            <input type="number" name="quantity" placeholder="Quantity" min="0" class="text_color"><br>
            <label>Discount Price</label>
            <input type="number" name="discount" placeholder="Discounted Price" class="text_color" min="0"><br>
            <label>Product Category</label>
            <select name="Category_name" id="" class="text_color" required="">
                <option value="">Select an Category</option>
                @foreach ($data as $category)
                <option value="{{$category->Category_name}}" class="text_color">{{$category->Category_name}}</option>
                @endforeach
            </select><br>
            <label>Image</label>
            <input type="file" name="image" class="text_color" required=""><br>
            <input type="submit" class="btn btn-success" name="submit" value="Add Product">
            
            </form>

    
        </div>
       
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
   @include('admin.adminjs')
</body>
</html>
