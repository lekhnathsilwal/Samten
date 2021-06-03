@extends('layouts/app')
@section('body')
@include('includes/header')
<div class="inner-heading">
  <div class="container">
    <h1>Gallery</h1>
  </div>
</div>
<!-- Inner Heading end -->
<div class="inner-content">
  <div class="container">
    <div class="galleryWrp">
    <ul class="row">
      @foreach($galleries as $gallery)
        <li class="col-lg-4 col-md-6">
          <div class="galleryImg"><img src="{{url('/uploads/gallery/'.$gallery->image)}}" alt="">
            <div class="jx-portfolio-hoverlayer"></div>
            <div class="jx-portfolio-hover">
              <div class="jx-portfolio-top-hover">
                <div class="jx-title jx-uppercase">{{$gallery->description}}</div>
              </div>
              <div class="jx-portfolio-plus-hover"> <a href="images/galleryImg01.jpg" data-fancybox="gallery">
                <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                </a> </div>
            </div>
          </div>
          @if(Auth::check())
            &emsp;<a href="{{route('edit.gallery',['id'=>$gallery->id])}}"><i style="margin-top: 10px;" class="fa fa-edit">&nbsp;edit</i></a>&emsp;<a onclick="return confirm('are you sure??')" href="{{route('delete.gallery',['id'=>$gallery->id])}}"><i style="margin-top: 10px;" class="fa fa-trash">&nbsp;delete</i></a>
          @endif
        </li>
      @endforeach
      </ul>
    </div><br>
    @if(Auth::check())
    &emsp;<a href="{{route('add.gallery')}}"><button style="margin-bottom: 10px;" class="btn btn-success">+ Add new</button></a>
    @endif
  </div>
</div>
<!--Gallery End-->
<!--Classes End-->
<!-- Our Blog -->
@include('includes/footer')
<!--Footer Start-->
@endsection