@extends('layouts.adminmaster')

@section('content')
  <div class="col-md-10">
      <div class="card p-4" >
        <h2>Add Product</h2>
        @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif

        {!!  Form::open(['route' => 'product.submit', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
          @csrf
          <div class="form-group">
          {!!   Form::label('product_name', 'Product Name') !!}
             {{Form::text('product_name',  $value = null, ['class'=>'form-control','placeholder'=>'Product Name' ])}}
          </div>
          <div class="form-group">
            {!!   Form::label('product_price', 'Product Price') !!}
               {{Form::text('product_price',  $value = null, ['class'=>'form-control','placeholder'=>'Product Price'])}}
          </div>
          <div class="form-group">
              {!!   Form::label('product_quantity', 'Product Quantity') !!}
              {{Form::text('product_quantity',  $value = null, ['class'=>'form-control','placeholder'=>'Product Quantity'])}}
            </div>
          <div class="form-group">
            {!!   Form::label('product_description', 'Product Description') !!}
            {{Form::textarea('product_description',  $value = null, ['class'=>'mytext'])}}
          </div>
          <div class="form-group">
            {!!   Form::label('product_photo', 'Product Photo') !!}
            {{Form::file('product_photo')}}
          </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary' , 'name'=>'btn'])}}
          {!! Form::close() !!}
      </div>
  </div>

@endsection
@section('richtext_scr')
  <script type="text/javascript">
  $('.mytext').richText();
  </script>

@endsection
