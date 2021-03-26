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
                <form method="post" action="{{route('slider_store')}}" id="categoryForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-content">
                        <div class="row">

                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">Create New Slider</button>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Add Title *"
                                           value=""/>
                                    <font style="color: red">{{($errors->has('title'))?($errors->first('title')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Sub Title</label>
                                    <input type="text" class="form-control" name="sub_title" id="sub_title"
                                           placeholder=" sub title" value=""/>
                                    <font style="color: red">{{($errors->has('sub_title'))?($errors->first('sub_title')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Call</label>
                                    <input type="text" class="form-control" name="call" id="call"
                                           placeholder=" call" value=""/>
                                    <font style="color: red">{{($errors->has('call'))?($errors->first('call')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Button Name</label>
                                    <input type="text" class="form-control" name="btn_name" id="btn_name"
                                           placeholder=" Button name" value=""/>
                                    <font style="color: red">{{($errors->has('btn_name'))?($errors->first('btn_name')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Button url</label>
                                    <input type="url" class="form-control" name="url" id="url"
                                           placeholder=" url" value=""/>
                                    <font style="color: red">{{($errors->has('url'))?($errors->first('url')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type='file' name="image" id="image" onchange="readURL(this);" />
                                    <img id="blah" src="http://placehold.it/180" alt="your image" />
                                    <font style="color: red">{{($errors->has('image'))?($errors->first('image')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select class="form-control"  name="status" style="width: 100%;">
                                        <option value="1">Publish</option>
                                        <option value="0">Unpublish</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Create New Slider</button>
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

