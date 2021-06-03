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
                                <form action="{{route('update.total',['id'=>$total->id])}}" method="post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                    @csrf
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="type">Icon Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="type" value="{{$total->type}}" name="type" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="type">Examples for icon name
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <p>
                                                "users" for&emsp;<i class="fa fa-users"></i>
                                                <br>"calendar" for &emsp;<i class="fa fa-calendar"></i>
                                                <br>"laptop" for &emsp;<i class="fa fa-laptop"></i>
                                                <br>"trophy" for &emsp;<i class="fa fa-trophy"></i>
                                                <br>For more icon's name go to <a style="color:blue;" href="https://fontawesome.com/icons?d=gallery"><u>this link</u></a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="title" value="{{$total->title}}" name="title" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="total">Total <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="total" value="{{$total->total}}" name="total" required="required" class="form-control ">
                                        </div>
                                    </div>
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