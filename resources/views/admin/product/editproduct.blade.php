@extends('layouts.adminmaster')

@section('content')
  <div class="container">
      <div class="row justify-content-center">

          <div class="col-md-10">
              <div class="card p-4" >
                <div id="app">

                </div>
                <h2>Edit Product</h2>
                  <div class="alert alert-warning hidden" id="alert">
                    <strong id="alert_text"></strong>
                  </div>

                <form action="{!! route('product.edit.submit') !!}"  method="post">
                  @csrf
                  <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="hidden" class="form-control" name="product_id" id="product_id"value="{{ $pro_edit->id }}">
                    <input type="text" class="form-control" id="product_name" id="product_name" name="product_name" placeholder="Product Name" value="{{ $pro_edit->product_name }}">
                  </div>
                  <div class="form-group">
                    <label for="product_price">Product Price</label>
                    <input type="text" class="form-control" id="product_price" id="product_price" name="product_price" placeholder="Product Price" value="{{ $pro_edit->product_price }}">
                  </div>
                  <div class="form-group">
                    <label for="product_quantity">Product Quantity</label>
                    <input type="text" class="form-control" id="product_quantity" id="product_quantity" name="product_quantity" placeholder="Product Quantity" value="{{ $pro_edit->product_quantity }}">
                  </div>
                  <div class="form-group">
                    <label for="product_description">Product Description</label>
                    <textarea name="product_description"  class="edit" id="product_description" id="product_description" rows="8" cols="80">{{ $pro_edit->product_description }}</textarea>
                  </div>
                  {{-- <div class="form-group">
                    <div class="">
                      <img src="storage/product/user-150805.jpeg" height="100" alt="aass">
                    </div>
                    <label for="product_photo">Product Photo</label>


            {{Form::file('product_photo')}}
      </div> --}}

                  <button type="button" name="btn" id="btn" class="btn btn-warning">Update Product</button>
                </form>
              </div>
              <div class="">

                <a href="{!! route('product') !!}">All Product</a>
              </div>
          </div>
      </div>
  </div>
@endsection
@section('richtext_scr')
  <script type="text/javascript">
  $('.edit').richText();


  $(document).ready(function () {

    $('#btn').click(function(){
      var product_id = $('#product_id').val();
       var product_name = $('#product_name').val();
       var product_price = $('#product_price').val();
       var product_quantity = $('#product_quantity').val();
       var product_description = $('#product_description').val();
       $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
      });

      $.ajax({
        type:'POST',
        url:'/product/edit/submit',
        data: {product_id:product_id, product_name:product_name,product_price:product_price, product_quantity:product_quantity,  product_description:product_description,product_price:product_price},
        success: function (data) {
          if(data == 'done'){
            $('#alert_text').html("Successfully Updated!");
            $('#alert').removeClass("hidden");

          }else{
            $('#alert_text').html("Something Is Wrong!");

          }
        }
      });
       });
    });




  </script>




@endsection
