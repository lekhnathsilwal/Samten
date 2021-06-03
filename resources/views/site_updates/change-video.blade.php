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
                        <h3>{{($change==1)?'Update':'Insert'}}</h3>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>{{($change==1)?'Change Video':'Add New Video'}}</h2>
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
                                <p style="font-size:20px;">Upload: &emsp;
                                <span style="cursor: pointer" onclick="showLink()">Video Link</span>&emsp;/&emsp;<span style="cursor: pointer" onclick="showFile()">Video File</span></p>
                                <br />
                                <form action="{{($change==0)?route('store.video'):route('update.video',['id'=>$id])}}" method="post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                    @csrf
                                    <div style="display: block;" id="link" class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="link">Youtube Video Link
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="link" name="link" placeholder="Enter your video link here" class="form-control">
                                        </div>
                                    </div>
                                    <div style="display: none;" id="video" class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="video">Choose Video File
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="file" id="video" name="video" class="form-control">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <button type="submit" class="btn btn-success">Submit</button>
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
<script>
    function showLink() {
        var x = document.getElementById("link");
        var y = document.getElementById("video");
        x.style.display = "block";
        y.style.display = "none";
    }
    function showFile() {
        var x = document.getElementById("link");
        var y = document.getElementById("video");
        x.style.display = "none";
        y.style.display = "block";
    }
</script>
@endsection