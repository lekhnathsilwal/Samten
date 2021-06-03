<footer class="footer bg-style">
  <div class="container">
    <div class="footer-upper">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="footer-widget opening-hour">
            <h3 class="title">Keep follow us</h3>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsamtenschool%2F&tabs=timeline&width=300&height=200&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=2234768930107771" width="100%" height="150" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="footer-widget quick-links">
            <h3 class="title">Download School App</h3>
            <img src="{{url('uploads/images/app.png')}}" />
          </div>
        </div>
        <div class="col-lg-2 col-md-6">
          <div class="footer-widget quick-links">
            <h3 class="title">Useful Link</h3>
            <ul>
              <li><a href="{{route('show.about_us')}}">About us</a> </li>
              <li><a href="{{route('show.bod')}}">Board of Directors</a> </li>
              <li><a href="{{route('show.programs')}}">Our Programs</a> </li>
              <li><a href="{{route('show.gallery')}}">Gallery</a> </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="footer-widget contact">
            <h3 class="title">Contact Us</h3>
            <div class="widget-content">
              <ul class="contact-info">
                <li><span class="icon fa fa-home"></span> {{$info->name}} </li>
                <li><span class="icon fa fa-map-marker"></span>{{$info->address}}
                </li>
                <li><span class="icon fa fa-phone"></span>{{$info->contact}}
                </li>
                <li><span class="icon fa fa-envelope"></span>{{$info->email}}
                  @if(Auth::check())
                  <br><a href="{{route('edit.info')}}"><i class="fa fa-edit">&nbsp;edit contact info</i></a>
                  @endif
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--Footer End-->
<!--Copyright Start-->
<div class="footer-bottom text-center">
  <div class="container">
    <div class="copyright-text">
      <p style="float: left;"> ©Copyright Samten Memorial Educational Academy. All Rights Reserved. </p><span style="float: right;">Powered By: <a href="https://grafiastech.com" target="_blank">Grafias Technology </a> </span>
    </div>
  </div>
</div>
<!--Copyright Start-->