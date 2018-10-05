<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{ url('/home') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>

            @auth
              @if (empty(Auth::user()->provider_id))
                <li>
                    <a href="{{ route('change.password') }}"><i class="fa fa-table fa-fw"></i> Change Password</a>
                </li>
              @else
                <li>
                    <a href="{{ route('new.password') }}"><i class="fa fa-table fa-fw"></i> Set Password</a>
                </li>

              @endif
              <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> Product<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                            <a href="{{ route('product.add') }}"><i class="fa fa-table fa-fw"></i>Add Product</a>

                    </li>
                    <li>
                            <a href="{{ route('product') }}"><i class="fa fa-table fa-fw"></i>Manage Products</a>

                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li>

          @endauth

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
