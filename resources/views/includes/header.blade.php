<!--Header Start-->
<div class="header-wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-1">
            <div class="logo"><a href="index.php"><img src="{{url('uploads/images/'.$logo->image)}}" alt=""></a></div>
          </div>
          <div class="col-lg-11"> 
            <!--Navegation Start-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <div class="container"> <a class="navbar-brand" href="#">Menu</a>
                <div class="navbar-dark">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarColor01">
                  <ul class="navbar-nav mr-auto">
                    @if(Auth::check())
                      <li class="nav-item"> <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a></li>
                    @endif
                    <li class="nav-item"> <a class="nav-link" href="{{route('show.home')}}">Home</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('show.about_us')}}">About US</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('show.bod')}}">{{(Auth::check())?'BOD':'Board of Directors'}}</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('show.programs')}}">Programs</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('show.achievements')}}">Achievements</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('show.gallery')}}">Gallery</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('show.calender')}}">Calender</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('show.contact')}}">Contact</a> </li>
                  </ul>
                </div>
              </div>
            </nav>
            <!--Navegation End--> 
          </div>
        </div>
      </div>
    </div>
<!--Header End--> 