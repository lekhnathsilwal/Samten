@extends('layouts/app')
@section('body')
@include('includes/header')
<div class="inner-heading">
  <div class="container">
    <h1>our achievements</h1>
  </div>
</div>
<!-- Inner Heading end -->
<!--Classes Start--> 
<div class="inner-content">
  <div class="container"> 
<div class="classesWrp classes class-wrap">
 <ul class="classes-wrap row">
   @foreach($achievements as $achievement)
      <li class="col-lg-4 col-md-6">
        <!-- class item --> 
        <div class="class-item">
          <div class="image"> <img src="{{url('uploads/achievements/'.$achievement->image)}}" alt="class image" class="img-responsive">
          </div>
          <div class="content">
            <h4><a href="#">{{$achievement->title}}</a></h4>
            <p>{{$achievement->description}}
              @if(Auth::check())
              <br><a href="{{route('edit.achievement',['id'=>$achievement->id])}}"><i style="margin-top: 10px;" class="fa fa-edit">&nbsp;edit</i></a>&emsp;<a onclick="return confirm('Are you sure??')" href="{{route('delete.achievement',['id'=>$achievement->id])}}"><i style="margin-top: 10px;" class="fa fa-trash">&nbsp;delete</i></a>
              @endif
            </p>
          </div>
        </div>
        <!-- class item --> 
      </li>
      @endforeach
</ul>
</div>
    @if(Auth::check())
      &emsp;<a href="{{route('add.achievement')}}"><button style="margin-bottom: 10px;" class="btn btn-success">+ Add new</button></a>
    @endif
</div>
</div>
<!--Classes End--> 
    <!-- Our Blog --> 
    @include('includes/footer')
@endsection