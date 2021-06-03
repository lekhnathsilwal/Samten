@extends('layouts/app')
@section('body')
@include('includes/header')
<!--Inner Heading Start-->
<div class="inner-heading">
  <div class="container">
    <h1>Board of Directors</h1>
  </div>
</div>
<!--Inner Heading End--> 
    <!--Classes Start--> 
<div class="inner-content">
  <div class="container"> 
    <div class="team-wrap">
        <div class="section-header">
    </div>
    <ul class="row">
      @foreach($bods as $bod)
      <li class="col-lg-4 col-md-6" style="margin-top: 20px;">
        <div class="team">
          <div class="team-image"> <img src="{{url('uploads/bods/'.$bod->image)}}" alt="">
          </div>
          <div class="team-list">
            <div class="team-info">
              <h5><a href="#">{{$bod->name}}</a></h5>
              <span>{{$bod->position}} </span> </div>
          </div>
          @if(Auth::check())
          <a href="{{route('edit.bod',['id'=>$bod->id])}}"><i style="margin-top: 10px;" class="fa fa-edit">&nbsp;edit</i></a>&emsp;<a onclick="return confirm('Are you sure??')" href="{{route('delete.bod',['id'=>$bod->id])}}"><i style="margin-top: 10px;" class="fa fa-trash">&nbsp;delete</i></a>
          @endif
        </div>
      </li>
      @endforeach
    </ul>
    @if(Auth::check())
      <br><a href="{{route('add.bod')}}"><button style="margin-bottom: 10px;" class="btn btn-success">+ Add new</button></a>
    @endif
  </div>
</div>
</div>
<!--Classes End--> 
<!--About Start-->
    <div class="about-wrap">
      <div class="container">
        @if(count($messages)>0)
        @foreach($messages as $message)
        <div class="row">
          <div class="col-lg-12">
            <p><strong>{{$message->title}}</strong></p>
            <p>{{$message->description}} 
              <br/><strong>{{$message->subtitle}}</strong>
              @if(Auth::check())
              &emsp;<a href="{{route('edit.message',['id'=>$message->id])}}"><i style="margin-top: 10px;" class="fa fa-edit">&nbsp;edit</i></a>&emsp;<a onclick="return confirm('Are you sure??')" href="{{route('delete.message',['id'=>$message->id])}}"><i style="margin-top: 10px;" class="fa fa-trash">&nbsp;delete</i></a>
              @endif
            </p>
          </div>
        </div>
        @endforeach
        @endif
        @if(Auth::check())
          &emsp;<a href="{{route('add.message',['type'=>'bod'])}}"><button style="margin-bottom: 10px;" class="btn btn-success">+ Add new</button></a>
        @endif
      </div>
    </div>
    <!--About End--> 
    <!-- Our Blog --> 
    @include('includes/footer')
@endsection