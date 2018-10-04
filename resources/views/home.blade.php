@extends('layouts.adminmaster')

@section('content')

     <div class="row">
         <div class="col-lg-12">
             <h1 class="page-header">Dashboard</h1>
         </div>
         <!-- /.col-lg-12 -->
     </div>
     <!-- /.row -->

     <div class="row">
         <div class="col-lg-3 col-md-6">
             <div class="panel panel-primary">
                 <div class="panel-heading">
                     <div class="row">
                         <div class="col-xs-3">
                             <i class="fa fa-comments fa-5x"></i>
                         </div>
                         <div class="col-xs-9 text-right">
                             <div class="huge">26</div>
                             <div>New Comments!</div>
                         </div>
                     </div>
                 </div>
                 <a href="#">
                     <div class="panel-footer">
                         <span class="pull-left">View Details</span>
                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                         <div class="clearfix"></div>
                     </div>
                 </a>
             </div>
         </div>
         <div class="col-lg-3 col-md-6">
             <div class="panel panel-green">
                 <div class="panel-heading">
                     <div class="row">
                         <div class="col-xs-3">
                             <i class="fa fa-tasks fa-5x"></i>
                         </div>
                         <div class="col-xs-9 text-right">
                             <div class="huge">12</div>
                             <div>New Tasks!</div>
                         </div>
                     </div>
                 </div>
                 <a href="#">
                     <div class="panel-footer">
                         <span class="pull-left">View Details</span>
                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                         <div class="clearfix"></div>
                     </div>
                 </a>
             </div>
         </div>
         <div class="col-lg-3 col-md-6">
             <div class="panel panel-yellow">
                 <div class="panel-heading">
                     <div class="row">
                         <div class="col-xs-3">
                             <i class="fa fa-shopping-cart fa-5x"></i>
                         </div>
                         <div class="col-xs-9 text-right">
                             <div class="huge">124</div>
                             <div>New Orders!</div>
                         </div>
                     </div>
                 </div>
                 <a href="#">
                     <div class="panel-footer">
                         <span class="pull-left">View Details</span>
                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                         <div class="clearfix"></div>
                     </div>
                 </a>
             </div>
         </div>
         <div class="col-lg-3 col-md-6">
             <div class="panel panel-red">
                 <div class="panel-heading">
                     <div class="row">
                         <div class="col-xs-3">
                             <i class="fa fa-support fa-5x"></i>
                         </div>
                         <div class="col-xs-9 text-right">
                             <div class="huge">13</div>
                             <div>Support Tickets!</div>
                         </div>
                     </div>
                 </div>
                 <a href="#">
                     <div class="panel-footer">
                         <span class="pull-left">View Details</span>
                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                         <div class="clearfix"></div>
                     </div>
                 </a>
             </div>
         </div>
     </div>
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">Dashboard</div>

                 <div class="card-body">
                     @if (session('status'))
                         <div class="alert alert-success" role="alert">
                             {{ session('status') }}
                         </div>
                     @endif
                     <div id="app">
                       <passport-clients></passport-clients>
                       <passport-authorized-clients></passport-authorized-clients>
                       <passport-personal-access-tokens></passport-personal-access-tokens>
                     </div>
                 </div>
             </div>
         </div>
     </div>
  {{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div id="app">
                      <passport-clients></passport-clients>
                      <passport-authorized-clients></passport-authorized-clients>
                      <passport-personal-access-tokens></passport-personal-access-tokens>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
