@extends('layouts/app')
@section('custom_css')
<style>
  .slide_caption {
    padding: 50px 100px 50px 100px;
    position: absolute;
    bottom: 50px;
    left: 33%;
  }

  .slide_caption>p {
    color: white;
  }
</style>
@endsection
@section('body')
<!--Header Start-->
@include('includes/header')
<!--Header End-->
<!-- #region Jssor Slider Begin -->
<!-- Generator: Jssor Slider Maker -->
<!-- Source: https://www.jssor.com -->
<script src="{{url('js/jssor.slider-27.5.0.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
  jssor_1_slider_init = function() {

    var jssor_1_SlideoTransitions = [
      [{
        b: -1,
        d: 1,
        o: -0.7
      }],
      [{
        b: 900,
        d: 2000,
        x: -379,
        e: {
          x: 7
        }
      }],
      [{
        b: 900,
        d: 2000,
        x: -379,
        e: {
          x: 7
        }
      }],
      [{
        b: -1,
        d: 1,
        o: -1,
        sX: 2,
        sY: 2
      }, {
        b: 0,
        d: 900,
        x: -171,
        y: -341,
        o: 1,
        sX: -2,
        sY: -2,
        e: {
          x: 3,
          y: 3,
          sX: 3,
          sY: 3
        }
      }, {
        b: 900,
        d: 1600,
        x: -283,
        o: -1,
        e: {
          x: 16
        }
      }]
    ];

    var jssor_1_options = {
      $AutoPlay: 1,
      $SlideDuration: 800,
      $SlideEasing: $Jease$.$OutQuint,
      $CaptionSliderOptions: {
        $Class: $JssorCaptionSlideo$,
        $Transitions: jssor_1_SlideoTransitions
      },
      $ArrowNavigatorOptions: {
        $Class: $JssorArrowNavigator$
      },
      $BulletNavigatorOptions: {
        $Class: $JssorBulletNavigator$
      }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    /*#region responsive code begin*/

    var MAX_WIDTH = 3000;

    function ScaleSlider() {
      var containerElement = jssor_1_slider.$Elmt.parentNode;
      var containerWidth = containerElement.clientWidth;

      if (containerWidth) {

        var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

        jssor_1_slider.$ScaleWidth(expectedWidth);
      } else {
        window.setTimeout(ScaleSlider, 30);
      }
    }

    ScaleSlider();

    $Jssor$.$AddEvent(window, "load", ScaleSlider);
    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    /*#endregion responsive code end*/
  };
</script>
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
<style>
  /*jssor slider loading skin spin css*/
  .jssorl-009-spin img {
    animation-name: jssorl-009-spin;
    animation-duration: 1.6s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
  }

  @keyframes jssorl-009-spin {
    from {
      transform: rotate(0deg);
    }

    to {
      transform: rotate(360deg);
    }
  }

  /*jssor slider bullet skin 032 css*/
  .jssorb032 {
    position: absolute;
  }

  .jssorb032 .i {
    position: absolute;
    cursor: pointer;
  }

  .jssorb032 .i .b {
    fill: #fff;
    fill-opacity: 0.7;
    stroke: #000;
    stroke-width: 1200;
    stroke-miterlimit: 10;
    stroke-opacity: 0.25;
  }

  .jssorb032 .i:hover .b {
    fill: #000;
    fill-opacity: .6;
    stroke: #fff;
    stroke-opacity: .35;
  }

  .jssorb032 .iav .b {
    fill: #000;
    fill-opacity: 1;
    stroke: #fff;
    stroke-opacity: .35;
  }

  .jssorb032 .i.idn {
    opacity: .3;
  }

  /*jssor slider arrow skin 051 css*/
  .jssora051 {
    display: block;
    position: absolute;
    cursor: pointer;
  }

  .jssora051 .a {
    fill: none;
    stroke: #fff;
    stroke-width: 360;
    stroke-miterlimit: 10;
  }

  .jssora051:hover {
    opacity: .8;
  }

  .jssora051.jssora051dn {
    opacity: .5;
  }

  .jssora051.jssora051ds {
    opacity: .3;
    pointer-events: none;
  }
</style>
<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
  <!-- Loading Screen -->
  <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
  </div>
  <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
    @if(count($slides)>0)
    @foreach($slides as $slide)
    <div>
      <img data-u="image" src="{{url('uploads/sliders/'.$slide->image)}}" />
      @if(Auth::check())
      <div class="slide_caption">
        <a href="{{route('change.slide',['id'=>$slide->id])}}"><button class="btn btn-success">Update slide</button></a>&nbsp;
        <a onclick="return confirm('Are You Sure??')" href="{{route('delete.slide',['id'=>$slide->id])}}"><button class="btn btn-danger">Delete This Slide</button></a>
      </div>
      @endif
    </div>
    @endforeach
    @endif
    @if(Auth::check())
    <div>
      <img data-u="image" src="{{url('images/add.jpg')}}" />
      <div class="slide_caption">
        <a href="{{route('add.slide')}}"><button style="margin-left:60px;" class="btn btn-success">Add New Slide</button></a>&nbsp;
      </div>
    </div>
    @endif
  </div>
  <!-- Bullet Navigator -->
  <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
    <div data-u="prototype" class="i" style="width:16px;height:16px;">
      <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
      </svg>
    </div>
  </div>
  <!-- Arrow Navigator -->
  <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
      <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
    </svg>
  </div>
  <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
      <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
    </svg>
  </div>
</div>
<!--Counter Start-->
<div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="flash-text">
          <h1>Run BY Smart School Management Systems</h1>
        </div>
      </div>
    </div>
  </div>
  <!--Counter End-->
  <br /><br /><br /><br />
  <!-- Element Start -->
  @if(count($features)>0)
  <div class="element-wrap">
    <div class="container">
      <ul class="row">
        @foreach($features as $feature)
        <li class="col-lg-4">
          <div class="elementInfo">
            <div class="element-icon"><img src="{{url('uploads/message_image/'.$feature->image)}}" alt=""></div>
            <h3>{{$feature->title}}</h3>
            <p>{{$feature->description}}</p>
            @if(Auth::check())
            <br><a href="{{route('edit.message',['id'=>$feature->id])}}" style="color:white;"><i class="fa fa-edit"></i>&nbsp;edit</a>
            @endif
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
  @endif
  <!-- Element Endt -->
  <!--About Start-->
  <div class="about-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="title">
            <h1> <span>{{$message->title}}</span></h1>
          </div>
          @if($message->subtitle!=null)
          <p><strong>{{$message->subtitle}}</strong></p>
          @endif
          <p>{{$message->description}}</p>
          @if(Auth::check())
          <a href="{{route('edit.message',['id'=>$message->id])}}"><i class="fa fa-edit"></i>&nbsp;edit</a>
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
          <div class="aboutImg"><img src="{{url('uploads/message_image/'.$message->image)}}" alt=""></div>
        </div>
      </div>
    </div>
    <!--About End-->
    <!--Classes Start-->
    <div class="project-wrap">
      <div class="container">
        <div class="section-header">
          @if(count($weHaves)>0 || Auth::check())
          <div class="title">
            <h1> <span> Also We Have</span></h1>
          </div>
          @endif
          @if(Auth::check())
          <a href="{{route('add.weHave')}}"><button class="btn btn-success">+ Add new</button></a>
          @endif
        </div>
        @if(count($weHaves)>0)
        <ul class="owl-carousel classes-wrap">
          @foreach($weHaves as $weHave)
          <li class="item">
            <div class="class-item">
              <div class="image"> <img src="{{url('uploads/we_have/'.$weHave->image)}}" alt="class image" class="img-responsive">
              </div>
              <div class="content">
                <h4><a href="#">{{$weHave->title}}</a></h4>
                <p>{{$weHave->description}}</p>
                @if(Auth::check())
                <a href="{{route('edit.weHave',['id'=>$weHave->id])}}"><i class="fa fa-edit"></i>&nbsp;edit</a>&emsp;
                <a onclick="return confirm('Are You Sure??')" href="{{route('delete.weHave',['id'=>$weHave->id])}}"><i class="fa fa-trash"></i>&nbsp;delete</a>
                @endif
              </div>
            </div>
            <!-- class item -->
          </li>
          @endforeach
        </ul>
        @endif
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!--Classes Start-->
    <!--Project Start-->
    <div class="project-wrap">
      <div class="container">
        <div class="project-heading">
          <div class="section-header">
            @if(count($videos)>0 || Auth::check())
            <div class="title">
              <h1> <span> Video Gallery</span></h1>
            </div>
            @endif
            @if(count($videos)>0)
            @foreach($videos as $video)
            @if($video->type=="link")
            <iframe width="100%" height="400" src="https://www.youtube-nocookie.com/embed/{{$video->name}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            @else
            <div style="height: 400px; width:100%">
              <video style="height:100%; width:100%;" controls>
                <source src="{{url('uploads/videos/'.$video->name)}}" type="video/mp4">
              </video>
            </div>
            <!-- <iframe width="100%" height="400" src="{{url('uploads/videos/'.$video->name)}}" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            @endif
            @if(Auth::check())
            <a href="{{route('change.video',['id'=>$video->id])}}"><button style="margin: 10px;" class="btn btn-primary">Change Video</button></a>
            <a href="{{route('delete.video',['id'=>$video->id])}}"><button style="margin: 10px;" class="btn btn-danger">Delete Video</button></a>
            @endif
            @endforeach
            @endif
            @if(Auth::check())
            <br><a href="{{route('add.video')}}"><button class="btn btn-success">+ Add New Video</button></a>
            @endif
          </div>
        </div>
      </div>
      <!--Project End-->
      <!--Counter Start-->
      <div id="counter">
        <div class="container">
          <div class="row">
            @foreach($totals as $total)
            <div class="col-lg-3 col-md-6 col-xs-12 counter-item">
              <div class="counterbox">
                <div class="counter-icon"><i class="fa fa-{{$total->type}}" aria-hidden="true"></i></div>
                <span class="counter-number" data-from="1" data-to="{{$total->total}}" data-speed="4000">{{$total->total}}</span> <span class="counter-text">{{$total->title}}</span>
              </div>
              <a href="{{route('edit.total',['id'=>$total->id])}}"><i class="fa fa-edit">&nbsp;edit</i></a>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <!--Counter End-->
      <section class="section-padding white-bg blog-wrap">
        <div class="container">
          <!-- Slider Post -->
          <div class="blog-post-holder">
            <div class="row no-gutters">
              <br />
              <!-- Post Detail -->
              <br /><?php $count = 0; ?>
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
              <!-- Post Detail -->
            </div>
          </div>
          <!-- Slider Post -->
        </div>
        <!-- Our Blogs -->
        <br /><br /><br /><br /><br /><br /><br /><br />
    </div>
    </section>
    <!-- Our Blog -->
    @include('includes/footer')
    <!--Footer Start-->
    @endsection