@extends('layouts/app')
@section('body')
@include('includes/header')
<!--Inner Heading Start-->
<div class="inner-heading">
  <div class="container">
    <h1>Our Programs</h1>
  </div>
</div>
<!--Inner Heading End-->
<!--About Start-->
<div class="about-wrap">
  <div class="container">
    <!-- Slider Post -->
    <div class="blog-post-holder">
      <div class="row no-gutters">
        <br /><?php $count=0; ?>
        @if(count($programs)>0)
        <!-- Post Detail -->
        @foreach($programs as $program)
        <?php $count++; ?>
        <div class="col-lg-6 {{($count%2==1)?'':'pull-right'}}">
          <div class="blog-post-detail">
            <h3>{{$program->title}}
              @if(Auth::check())
              &emsp;<span style="font-size: 18px;"><a href="{{route('edit.program',['id'=>$program->id])}}"><i class="fa fa-edit">&nbsp;edit</i></a>&emsp;<a onclick="return confirm('Are you sure??')" href="{{route('delete.program',['id'=>$program->id])}}"><i class="fa fa-trash">&nbsp;delete</i></a></span>
              @endif
            </h3>
            @if(count($program->program_descriptions)>0)
            @foreach($program->program_descriptions as $program_desc)
            <p> <i class="fa fa-hand-o-right" aria-hidden="true"></i> {{$program_desc->description}}
              @if(Auth::check())
              &emsp; &emsp;<a href="{{route('edit.programDesc',['id'=>$program_desc->id])}}"><i class="fa fa-edit">&nbsp;edit</i></a>&emsp;<a onclick="return confirm('Are You Sure??')" href="{{route('delete.programDesc',['id'=>$program_desc->id])}}"><i class="fa fa-trash">&nbsp;delete</i></a>
              @endif
            </p>
            @endforeach
            @endif
            @if(Auth::check())
            <p></p><a href="{{route('add.programDesc',['id'=>$program->id])}}"><button class="btn btn-success"> Add more</button></a>
            @endif
          </div>
        </div>
        @endforeach
        @endif<p></p>
        @if(Auth::check())
        <a href="{{route('add.program')}}"><button class="btn btn-primary">+ Add New</button></a>
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
<!--Footer Start-->
@endsection