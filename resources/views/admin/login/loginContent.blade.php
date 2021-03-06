
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('dashboard/')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('dashboard/')}}/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('dashboard/')}}/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('dashboard/')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                              {!!Form::open(['url'=>'/login','method'=>'POST'])!!}


                                  <div class="form-group">
                                        {{Form::email('email', $value = null, ['class'=>'form-control','placeholder'=>'E-mail Address'])}}
                                      <!-- <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus> -->
                                  </div>
                                  @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                  <div class="form-group">
                                    {{Form::password('password',  ['class'=>'form-control','placeholder'=>'Password'])}}
                                      <!-- <input class="form-control" placeholder="Password" name="password" type="password" value=""> -->
                                  </div>
                                  @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                  <div class="checkbox">
                                      <label>{{Form::checkbox('remember', 'I Agree')}} I Agree</label>
                                  </div>
                                  <!-- Change this to a button or input when using this as a form -->
                                  <div class="form-group">
                                    {{Form::submit('Login', ['class'=>'form-control btn-success' , 'name'=>'button'])}}
                                    <!-- <button value="Login" type="submit" class="form-control btn-success" name="button">Login</button> -->
                                  <!-- <input class="form-control  btn-lg btn-success "  name="button" value="Login" type="submit" > -->
                                  </div>
                                  {{-- <div class="panel-body">
                                   <a href="{{ url('auth/google') }}" class="btn btn-lg btn-primary btn-block">

                                       <strong>Login With Google</strong>

                                   </a>
                                </div> --}}

                              <div class="panel-body">
                                <a href="{{ url('auth/google') }}">
                                  <button type="button" class="loginBtn loginBtn--google">
                                    Login with Google
                                  </button>
                                </a>
                              </div>
                              {{-- <div class="panel-body">
                                <a href="{{ url('auth/facebook') }}">
                                  <button type="button" class="loginBtn loginBtn--facebook">
                                    Login with Google
                                  </button>
                                </a>
                              </div> --}}
                                {{-- <button class="loginBtn loginBtn--facebook">
                  Login with Facebook
                  </button> --}}


                              </fieldset>
                            {!!Form::close()!!}

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('dashboard/')}}/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('dashboard/')}}/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('dashboard/')}}/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('dashboard/')}}/dist/js/sb-admin-2.js"></script>

</body>

</html>
