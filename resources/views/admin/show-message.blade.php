@extends('admin/layouts/app')
@section('body')
<div class="container body">
    <div class="main_container">
        @include('admin/includes/nav')
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Admin list</h3>
                    </div>
                    <!-- <div class="title_right">
                        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                                </span>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="x_panel">
                        @include('includes/message')
                        <div class="x_content">
                            <div class="col-md-12 col-sm-12  text-center">
                            </div>
                            <div class="clearfix"></div>
                            @if(count($messages)>0)
                            <ul class="messages">
                                @foreach($messages as $message)
                                <li>
                                    <img src="{{url('uploads/admin/profile_picture/nopp.jpg')}}" class="avatar" alt="Avatar">
                                    <div class="message_date">
                                        <h6 class="date text-info">{{$message->created_at}}</h6>
                                    </div>
                                    <div class="message_wrapper">
                                        <h4>{{$message->name}}</h4>
                                        <span>{{$message->email}}</span><br><hr>
                                        <span>Subject: {{$message->subject}}<span><br><br>
                                        <p class="message">{{$message->message}}</p>
                                    </div>
                                    <a onclick="return confirm('Are you Sure??')" href="{{route('delete.contact',['id'=>$message->id])}}"><i class="fa fa-trash">&nbsp;Delete</i></a>
                                </li><hr>
                                @endforeach
                                {{$messages->links()}}
                            </ul>
                            @else
                                <p>No Any Messages</p>
                            @endif
                        </div>
                    </div>
                    <a class="btn btn-success" href="{{route('add.admin')}}">+ Add Admin</a>
                </div>
            </div>
        </div>
        @include('admin/includes/footer')
    </div>
</div>
@endsection