@extends('layouts/app')
@section('body')
@include('includes/header')
<div class="inner-heading">
  <div class="container">
    <h1>Contact Us</h1>
  </div>
</div>
<!-- Inner Heading end -->
<div class="inner-content">
  <div class="container">
    <div class="row contactInfo">
      <div class="col-md-12">
        <h3>Contact Information </h3>
      </div>
      <div class="col-sm-4"> <i class="fa fa-phone" aria-hidden="true"></i> <a href="#">{{$info->contact}}</a></div>
      <div class="col-sm-4"> <i class="fa fa-map-marker" aria-hidden="true"></i>
        <p class="mt-15"><a> {{$info->address}}</a></p>
      </div>
      <div class="col-sm-4"> <i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@samtenschool.edu.np">{{$info->email}}</a> </div>
    </div>
    <!--Contact Start-->
    <div class="contact-wrap">
      <div class="contact-form">
        <div class="row">
          <div class="col-sm-12">
            <h3>CONTACT FORM</h3>
            <!-- Contact FORM -->
            <form id="contact" action="{{route('store.contact')}}" method="post">
              @csrf
              <!-- END IF MAIL SENT SUCCESSFULLY -->
              <div class="row">
                <div class="col-sm-6">
                  <div class="input-group">
                    <input type="text" class="form-control" required="required" id="name" name="name" placeholder="Your Name">
                  </div>
                  <div class="input-group">
                    <input type="text" class="form-control" required="required" id="email" name="email" placeholder="Email">
                  </div>
                  <div class="input-group">
                    <input type="text" class="form-control" required="required" name="subject" placeholder="Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group">
                    <textarea class="form-control" required="required" name="message" placeholder="Your Message"></textarea>
                  </div>
                </div>
                <div class="col-sm-12 mt-30">
                  <input type="submit" value="Submit Now" class="sub">
                </div>
              </div>
            </form>
            <!-- END Contact FORM -->
          </div>
        </div>
      </div>
    </div>
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8398.794248348622!2d85.35651188124919!3d27.74018759180421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1be495d09827%3A0xa567a7b4d52731d3!2sSamten%20Memorial%20Education%20Academy!5e0!3m2!1sen!2snp!4v1569170862808!5m2!1sen!2snp" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <!--Contact End-->
  </div>
</div>
<!-- Our Blog -->
@include('includes/footer')
@endsection