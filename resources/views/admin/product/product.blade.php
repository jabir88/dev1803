@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card p-4" >
                <h2>All Product</h2>
                <div class="my-3 ">
                  <div class="form-group">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Search Customer Data" />
                       </div>
                </div>

                @if (session('delete'))
                  <div class="alert alert-danger">
                      {{ session('delete') }}
                  </div>
              @endif

              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Product Quantity</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $i =1;
                  @endphp
                  @foreach ($all_pro as $one_pro)

                  <tr>

                    <th scope="row">{{ $i }}</th>
                    <td>{{ $one_pro->product_name }}</td>
                    <td>{{ $one_pro->product_price }}</td>
                    <td>{{ $one_pro->product_quantity }}</td>
                    <td>
                      <a href="{!! route('product.edit',['product_id' => $one_pro->id]) !!}">
                        <button type="button" name="button " class="btn btn-info"><i class="far fa-edit"></i>  </button>
                      </a>
                      <a href="{!! route('product.delete',['product_id' => $one_pro->id]) !!}">
                        <button type="button" name="button " class="btn btn-danger"><i class="fas fa-trash-alt"></i>  </button>
                      </a>
                    </td>

                  </tr>

                  @php
                    $i++;
                  @endphp

                @endforeach

                </tbody>
              </table>
              {{ $all_pro->links() }}
              </div>
          </div>
          <div class="col-md-4">
              <div class="card p-4" >
                <h2>Add Product</h2>
                @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
              @endif
                <form action="{!! route('product.submit') !!}" method="post">
                  @csrf
                  <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name">
                  </div>
                  <div class="form-group">
                    <label for="product_price">Product Price</label>
                    <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Product Price">
                  </div>
                  <div class="form-group">
                    <label for="product_quantity">Product Quantity</label>
                    <input type="text" class="form-control" id="product_quantity" name="product_quantity" placeholder="Product Quantity">
                  </div>

                  <button type="submit" name="btn" class="btn btn-primary">Submit</button>
                </form>
              </div>
          </div>
      </div>
  </div>

@endsection
