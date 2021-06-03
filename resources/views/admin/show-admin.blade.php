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
                            @foreach($admins as $admin)
                            <div class="col-md-4 col-sm-4  profile_details">
                                <div class="well profile_view">
                                    <div class="col-sm-12">
                                        <h4 class="brief">
                                            @if($admin->type==0)
                                                <i>Super Admin</i>
                                            @else
                                            <i>Admin</i>
                                            @endif
                                        </h4>
                                        <div class="left col-md-7 col-sm-7">
                                            <h2>{{$admin->f_name." ".$admin->l_name}}</h2>
                                            <p><strong>Email: </strong>{{$admin->email}}</p>
                                        </div>
                                        <div class="right col-md-5 col-sm-5 text-center">
                                            <img src="{{url('uploads/admin/profile_picture/'.$admin->pp)}}" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-sm-12" style="margin-bottom: 20px;">
                                    <hr>
                                        <div class="col-sm-6 emphasis">
                                            <h5>
                                                <div class="col-sm-12" style="text-align: center; padding-top:5px;">
                                                    <a href="{{route('edit.profile',['id'=>$admin->id])}}"><i class="fa fa-edit">&nbsp;Edit</i></a>
                                                </div>
                                            </h5>
                                        </div>
                                        @if(Auth::user()->id != $admin->id)
                                        <div class="col-sm-6 emphasis">
                                        <h5>
                                            <div class="col-sm-12" style="text-align: center; padding-top:5px;">
                                                <a onclick="return confirm('Are You Sure??')" href="{{route('delete.admin',['id'=>$admin->id])}}"><i class="fa fa-trash">&nbsp;Delete</i></a>
                                            </div>
                                        </h5>
                                        </div>
                                        @else
                                        <div class="col-sm-6 emphasis">
                                        <h5>
                                            <div class="col-sm-12" style="text-align: center; padding-top:5px;">
                                                <i class="fa fa-ban">&nbsp;Delete</i>
                                            </div>
                                        </h5>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
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