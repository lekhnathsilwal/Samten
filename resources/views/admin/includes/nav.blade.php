<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{route('dashboard')}}" class="site_title"><i class="fa fa-paw"></i> <span>Samten</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{url('uploads/admin/profile_picture/'.Auth::user()->pp)}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::user()->f_name." ".Auth::user()->l_name}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{route('dashboard')}}"><i class="fa fa-home"></i> Dashboard</a>
                  </li>
                  <li><a href="{{route('show.admin')}}"><i class="fa fa-user"></i> Admin </span></a>
                  </li>
                  <li>
                    <a href="{{route('show.message')}}"><i class="fa fa-envelope"></i> Message </span>
                    <span class="badge" style="font-size:13px; background:red; position:relative; color:white; left:5px; top:-10px;">{{($sum>0)?$sum:''}}</span></a>
                  </li>
                  <li><a href="{{route('edit.icon',['id'=>$logo->id])}}"><i class="fa fa-edit"></i> Change School Logo </span></a>
                  </li>
                  <li><a href="{{route('show.home')}}"><i class="fa fa-desktop"></i> Manage Site</a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a href="{{route('logout')}}" data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{url('uploads/admin/profile_picture/'.Auth::user()->pp)}}" alt="">{{Auth::user()->f_name." ".Auth::user()->l_name}}
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="{{route('edit.profile',['id'=>Auth::user()->id])}}">Edit Profile<i style="float: right;" class="fa fa-edit"></i></a>
                    <a class="dropdown-item"  href="{{route('change.password')}}">Change Password</a>
                    <a class="dropdown-item"  href="{{route('logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>