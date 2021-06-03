@extends('layouts/app')
@section('body')
@include('includes/header')
<!--Inner Heading Start-->
<div class="inner-heading">
  <div class="container">
    <h1>About Us</h1>
  </div>
</div>
<!--Inner Heading End-->
<!--About Start-->
<div class="about-wrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="title">
          <h1> <span>{{$welcome_message->title}}</span></h1>
        </div>
        <p><strong>{{$welcome_message->subtitle}}</strong></p>
        <p>{{$welcome_message->description}}</p>
        @if(Auth::check())
          <a href="{{route('edit.message',['id'=>$welcome_message->id])}}"><i class="fa fa-edit"></i>&nbsp;edit</a>
        @endif
        @if(count($icons)>0)
        <ul class="row iconsWrp">
          @foreach($icons as $icon)
          <li class="col-lg-4 col-md-4">
            <div class="icon-box iconbox-theme-colored"> <a class="icon-wrap icon-dark icon-circled icon-border-effect effect-circled icon-lg" href="#"> <i class="fa fa-{{$icon->image}}" aria-hidden="true"></i> </a>
              <h6>{{$icon->title}}</h6>
            </div>
            @if(Auth::check())
            <a style="background: none !important;" href="{{route('edit.icon',['id'=>$icon->id])}}"><i class="fa fa-edit"></i>&nbsp;edit</a>
            @endif
          </li>
          @endforeach
        </ul>
        @endif
      </div>
      <div class="col-lg-6">
        <div class="aboutImg"><img src="{{url('uploads/message_image/'.$welcome_message->image)}}" alt=""></div>
      </div>
    </div>
  </div>
</div>
<!--About End-->
<!--About Start-->
<div class="about-wrap">
  <div class="container">
    <div class="row">
      @if(count($mission_message)>0)
      @foreach($mission_message as $message)
      <div class="col-lg-3">
        <p><strong>{{$message->title}}</strong></p>
        <p>{{$message->description}}</p>
        @if(Auth::check())
        <a href="{{route('edit.message',['id'=>$message->id])}}"><i class="fa fa-edit">&nbsp;edit</i></a>&emsp;<a onclick="return confirm('Are You Sure')" href="{{route('delete.message',['id'=>$message->id])}}"><i class="fa fa-trash">&nbsp;delete</i></a>
        @endif
      </div>
      @endforeach
      @endif
    </div>
    @if(Auth::check())
    <br><a href="{{route('add.message',['type'=>'mission'])}}"><button class="btn btn-success">+ Add New</button></a>
    @endif
  </div>
</div>
<!--About End-->
<!--About Start-->
@foreach($principal_message as $message)
<div class="about-wrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="title">
          <h1> <span>{{$message->title}}</span></h1>
        </div>
        <p>{{$message->description}}</p>
        <p><strong>{{$message->subtitle}}</strong>
          @if(Auth::check())
          &emsp;<a href="{{route('edit.message',['id'=>$message->id])}}"><i class="fa fa-edit">&nbsp;edit</i></a>&emsp;<a onclick="return confirm('Are you sure??')" href="{{route('delete.message',['id'=>$message->id])}}"><i class="fa fa-trash">&nbsp;delete</i></a>
          @endif
        </p>
      </div>
      <div class="col-lg-6">
        <div class="aboutImg"><img src="{{url('uploads/message_image/'.$message->image)}}" alt=""></div>
      </div>
    </div>
  </div>
</div>
@endforeach
<div class="container">
  @if(Auth::check())
  <a href="{{route('add.message',['type'=>'principal'])}}"><button style="margin-bottom: 10px;" class="btn btn-success">+ Add new message</button></a>
  @endif
</div><br>
<!--About End-->
<!--Counter Start-->
<div id="counter">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-xs-12 counter-item">
        <div class="counterbox">
          <div class="counter-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="500" data-speed="4000">500</span> <span class="counter-text">Total Students</span>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-xs-12 counter-item">
        <div class="counterbox">
          <div class="counter-icon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="7" data-speed="4000">7</span> <span class="counter-text">Year of Experience</span>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-xs-12 counter-item">
        <div class="counterbox">
          <div class="counter-icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="20" data-speed="4000">20</span> <span class="counter-text">Our Programs</span>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-xs-12 counter-item">
        <div class="counterbox">
          <div class="counter-icon"><i class="fa fa-trophy" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="206" data-speed="4000">206</span> <span class="counter-text">Awards</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Counter End-->
<!-- Our Blog -->
@include('includes/footer')
@endsection