<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="row">

<div class="col-lg-10">
  <h2>All Products List</h2>
  <p>Time :

    <span>{{ \Carbon\Carbon::now() }}</span>
   </p>
<table class="table">
   <thead class="thead-light">
       <tr>
         <th scope="col">#</th>

         <th scope="col">Product Name</th>
         <th scope="col">Product Price</th>
         <th scope="col">Product Quantity</th>
     </tr>
   </thead>
   <tbody>
     @php
     $i = 1;
       // $i =$all_pro->perPage() * ($all_pro->currentPage() - 1)+1;
     @endphp

     @foreach ($all_pro as $one_pro)
     <tr>
       <th scope="row">{{ $i }}</th>

       <td>{{ $one_pro->product_name }}</td>
       <td>{{ $one_pro->product_price }}</td>
       <td>{{ $one_pro->product_quantity }}</td>
  
     </tr>
     @php
       $i++;
     @endphp
   @endforeach

   </tbody>
 </table>
</div>
</div>
</div>

 </body>
 </html>
