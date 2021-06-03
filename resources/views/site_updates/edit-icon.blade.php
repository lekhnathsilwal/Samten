@extends('admin/layouts/app')
@section('body')
<div class="container body">
    <div class="main_container">
        @include('admin/includes/nav')
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Update</h3>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Edit The Form</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                @include('includes/message')
                                <br />
                                <form action="{{route('update.icon',['id'=>$icon->id])}}" method="post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                    @csrf
                                    @if($icon->type=='icon')
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Icon Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="image" value="{{$icon->image}}" name="image" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Examples for icon name
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <p>
                                                "home" for&emsp;<i class="fa fa-home"></i>
                                                <br>"university" for &emsp;<i class="fa fa-university"></i>
                                                <br>"building" for &emsp;<i class="fa fa-building"></i>
                                                <br>For more icon's name go to <a style="color:blue;" href="https://fontawesome.com/icons?d=gallery"><u>this link</u></a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="title" value="{{$icon->title}}" name="title" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    @else
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Logo
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="file" id="image" name="image" class="form-control">
                                        </div>
                                    </div>
                                    @endif
                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin/includes/footer')
    </div>
</div>
@endsection