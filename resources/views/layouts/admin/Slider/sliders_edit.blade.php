@extends('layouts.admin.master')
@section('title')
    {{ __('Create New Slider')}}
@endsection
@section('content')

    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form method="post" action="{{route('slider_update',$slider_edit->id)}}" id="categoryForm"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-content">
                        <div class="row">

                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">Update Slider</button>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Add Title *"
                                           value="{{$slider_edit->title}}"/>
                                    <font style="color: red">{{($errors->has('title'))?($errors->first('title')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Sub Title</label>
                                    <input type="text" class="form-control" name="sub_title" id="sub_title"
                                           placeholder=" sub title" value="{{$slider_edit->sub_title}}"/>
                                    <font style="color: red">{{($errors->has('sub_title'))?($errors->first('sub_title')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Call</label>
                                    <input type="text" class="form-control" name="call" id="call"
                                           placeholder=" call" value="{{$slider_edit->call}}"/>
                                    <font style="color: red">{{($errors->has('call'))?($errors->first('call')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Button Name</label>
                                    <input type="text" class="form-control" name="btn_name" id="btn_name"
                                           placeholder=" Button name" value="{{$slider_edit->btn_name}}"/>
                                    <font style="color: red">{{($errors->has('btn_name'))?($errors->first('btn_name')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Button url</label>
                                    <input type="url" class="form-control" name="url" id="url"
                                           placeholder=" url" value="{{$slider_edit->url}}"/>
                                    <font style="color: red">{{($errors->has('url'))?($errors->first('url')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type='file' name="image" id="image" onchange="readURL(this);" />

                                    <img width="250" id="blah" src="{{(!empty($slider_edit->image))?url
                        ('images/slider_images/'.$slider_edit->image):url('images/blank_image.jpg')}}" alt="your image" />
                                    <font style="color: red">{{($errors->has('image'))?($errors->first('image')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select class="form-control"  name="status" style="width: 100%;">
                                        <option value="1" {{($slider_edit->status =="1")
                                        ?"selected":""}}>Publish</option>
                                        <option value="0" {{($slider_edit->status =="0")
                                        ?"selected":""}}>Unpublish</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Slider</button>
                        </div>

                    </div>
                </form>
            </div><!-- /.row -->
        </section><!-- /.content -->

    </section><!-- /.content -->

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection

