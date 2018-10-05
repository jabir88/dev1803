@extends('layouts.adminmaster')

@section('content')
  <div class="container">
      <div class="row justify-content-center">

          <div class="col-md-10">
              <div class="card p-4" >
                <h2>Edit Product</h2>
                @if (session('edit'))
                  <div class="alert alert-warning">
                      {{ session('edit') }}
                  </div>
              @endif
                <form action="{!! route('product.edit.submit') !!}"  method="post">
                  @csrf
                  <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="hidden" class="form-control" name="product_id"value="{{ $pro_edit->id }}">
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name" value="{{ $pro_edit->product_name }}">
                  </div>
                  <div class="form-group">
                    <label for="product_price">Product Price</label>
                    <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Product Price" value="{{ $pro_edit->product_price }}">
                  </div>
                  <div class="form-group">
                    <label for="product_quantity">Product Quantity</label>
                    <input type="text" class="form-control" id="product_quantity" name="product_quantity" placeholder="Product Quantity" value="{{ $pro_edit->product_quantity }}">
                  </div>
                  <div class="form-group">
                    <label for="product_description">Product Description</label>
                    <textarea name="product_description"  class="edit" id="product_description" rows="8" cols="80">{{ $pro_edit->product_description }}</textarea>
                  </div>
                  {{-- <div class="form-group">
                    <div class="">
                      <img src="storage/product/user-150805.jpeg" height="100" alt="aass">
                    </div>
                    <label for="product_photo">Product Photo</label>


            {{Form::file('product_photo')}}
      </div> --}}

                  <button type="submit" name="btn" class="btn btn-warning">Update Product</button>
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
  </script>

@endsection
