@extends('layouts.adminmaster')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-10">
              <div class="card p-4" >
                <h2>All Product</h2>
                <div class="my-3 ">
                  {{-- <div class="form-group">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Search Customer Data" />
                       </div> --}}
                </div>

                @if (session('delete'))
                  <div class="alert alert-danger">
                      {{ session('delete') }}
                  </div>
              @endif

              <table id="dataTables" class="table table-striped table-bordered" >
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
                  $i = 1;
                    // $i =$all_pro->perPage() * ($all_pro->currentPage() - 1)+1;
                  @endphp

                  @foreach ($all_pro as $one_pro)
                  <tr>
                    <th scope="row">{{ $i }}</th>
                    <td>{{ $one_pro->product_name }}</td>
                    <td>{{ $one_pro->product_price }}</td>
                    <td>{{ $one_pro->product_quantity }}</td>
                    <td>
                      <a href="{!! route('product.edit',['product_id' => $one_pro->id]) !!}">
                        <button type="button" name="button " class="btn btn-info"><i class="fa fa-edit"></i>  </button>
                      </a>
                      <a href="{!! route('product.delete',['product_id' => $one_pro->id]) !!}">
                        <button type="button" name="button " class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>  </button>
                      </a>
                    </td>
                  </tr>
                  @php
                    $i++;
                  @endphp
                @endforeach

                </tbody>
              </table>
              {{-- {{ $all_pro->links() }} --}}
              </div>
          </div>

      </div>
  </div>

@endsection
@section('richtext_scr')
  <script type="text/javascript">
  $('.mytext').richText();
  </script>

@endsection
