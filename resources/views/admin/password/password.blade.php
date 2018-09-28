@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">

          <div class="col-md-4">
              <div class="card p-4" >
                <h2>Change Your Password</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{!! route('password.change.done') !!}" method="post">
                  @csrf
                  <div class="form-group">
                    <label for="old_pass">Current Password</label>
                    <input type="password" class="form-control" id="old_pass" name="old_pass" placeholder="Current Password">
                  </div>

                  <div class="form-group">
                    <label for="new_pass">New Password</label>
                    <input type="password" class="form-control" id="new_pass" name="new_pass" placeholder="New Password">
                  </div>

                  <div class="form-group">
                    <label for="retype_pass">Re-type Password</label>
                    <input type="password" class="form-control" id="retype_pass" name="retype_pass" placeholder="Re-type Password">
                  </div>
                  <button type="submit" name="btn" class="btn btn-warning">Update Product</button>
                </form>
              </div>
          </div>
      </div>
  </div>
@endsection
