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
                                <h2>Edit WeHave</h2>
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
                                <form action="{{route('update.message',['id'=>$message->id])}}" method="post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                    @csrf
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="title" value="{{$message->title}}" name="title" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    @if($message->type!='mission' && $message->type!='features')
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="subtitle">{{($message->type=='principal'||$message->type=='bod')?'Name of speaker':'Subtitle'}}
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="subtitle" value="{{$message->subtitle}}" name="subtitle" class="form-control ">
                                        </div>
                                    </div>
                                    @endif
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <textarea id="description" name="description" required="required" class="form-control">{{$message->description}}</textarea>
                                        </div>
                                    </div>
                                    @if($message->type!='mission' && $message->type!='bod')
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">{{($message->type=='features')?'Small size PNG image':'Image'}}
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