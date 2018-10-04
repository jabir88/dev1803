@extends('layouts.adminmaster')

@section('content')
  <div class="container">
      <div class="row justify-content-center">

          <div class="col-md-5">
              <div class="card p-4" >
                <h2 class="text-center">Change Your Password</h2>
                @if (session('status'))
                    <div class="alert alert-danger">
                        {{ session('status') }}
                    </div>
                @endif
                @if (session('hoise'))
                    <div class="alert alert-success">
                        {{ session('hoise') }}
                    </div>
                @endif
                <form action="{!! route('password.change.done') !!}" method="post">
                  @csrf
                  <div class="form-group">
                    <label for="old_pass">Current Password</label>
                    <input type="password" class="form-control" id="old_pass" name="old_pass" placeholder="Current Password" value="{{old('old_pass')}}">
                    @if ($errors->has('old_pass'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('old_pass') }}</strong>
                      </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="new_pass">New Password</label>
                    <input type="password" class="form-control" id="new_pass" name="new_pass" placeholder="New Password" value="{{old('new_pass')}}">
                    @if ($errors->has('new_pass'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('new_pass') }}</strong>
                      </span>
                    @endif
                  </div>

                  <div class="form-group">
                    <label for="retype_pass">Re-type Password</label>
                    <input type="password" class="form-control" id="retype_pass" name="retype_pass" placeholder="Re-type Password" value="{{old('retype_pass')}}">
                    @if ($errors->has('retype_pass'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('retype_pass') }}</strong>
                      </span>
                    @endif
                  </div>
                  <button type="submit" name="btn" class="btn btn-warning">Change Password</button>
                </form>
              </div>
          </div>
      </div>
  </div>
@endsection
