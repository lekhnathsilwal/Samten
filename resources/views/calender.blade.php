@extends('layouts/app')
@section('body')
@include('includes/header')
<!--Inner Heading Start-->
<div class="inner-heading">
  <div class="container">
    <h1> Calender</h1>
  </div>
</div>
<!--Inner Heading End-->
<!--About Start-->
<div class="about-wrap">
  <div class="container">
    <!-- Slider Post -->
    <div class="blog-post-holder">
      <div class="row no-gutters">
        <br />
        <!-- Post Detail -->
        <div class="col-lg-12">
          <div class="blog-post-detail">
            @foreach($calenders as $calender)
            <p><strong>{{$calender->title}}</strong>
            @if(Auth::check())
              &emsp; &emsp;<a href="{{route('edit.calender',['id'=>$calender->id])}}"><i class="fa fa-edit">&nbsp;edit</i></a>&emsp;<a onclick="return confirm('Are you sure??')" href="{{route('delete.calender',['id'=>$calender->id])}}"><i class="fa fa-trash">&nbsp;delete</i></a>
            @endif
            </p>
            @foreach($calender->holidays as $holiday)
            <p> <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;{{$holiday->description}}
              @if(Auth::check())
              &emsp; &emsp;<a href="{{route('edit.holiday',['id'=>$holiday->id])}}"><i class="fa fa-edit">&nbsp;edit</i></a>&emsp;<a onclick="return confirm('Are you sure??')" href="{{route('delete.holiday',['id'=>$holiday->id])}}"><i class="fa fa-trash">&nbsp;delete</i></a>
              @endif
            </p>
            @endforeach
            @if(Auth::check())
            <a href="{{route('add.holiday',['id'=>$calender->id])}}"><button style="margin-bottom: 10px;" class="btn btn-success">+ Add more</button></a>
            @endif
            @endforeach
          </div>
        </div>
        @if(Auth::check())
        <a href="{{route('add.calender')}}"><button class="btn btn-primary">+ Add New</button></a>
        @endif
        <!-- Post Detail -->
      </div>
    </div>
    <!-- Slider Post -->
  </div>
  <!-- Our Blogs -->
</div>
</div>
<!--About End-->
<!-- Our Blog -->
@include('includes/footer')
@endsection